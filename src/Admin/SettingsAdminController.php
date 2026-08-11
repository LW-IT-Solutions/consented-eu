<?php

declare(strict_types=1);

namespace Consented\Admin;

use Consented\Core\Audit;
use Consented\Core\Controller;
use Consented\Core\Env;
use Consented\Core\Exception\ValidationException;
use Consented\Core\Lang;
use Consented\Core\Mail;
use Consented\Core\Request;
use Consented\Core\Response;
use Consented\Core\Sanitizer;
use Consented\Core\Settings;
use Consented\Core\Url;

/**
 * Instance settings, split into four independent forms.
 *
 * One page per concern, one POST target per page. The single combined form it
 * replaces had a failure mode that cost real work: a typo in an imprint field
 * threw away the mail configuration entered in the same submit, because the
 * handler redirected without flashing the input back.
 *
 * Both halves of that are fixed here. The forms cannot take each other down
 * because they post to different endpoints, and every failure goes through
 * Controller::validate() — which raises ValidationException, which Kernel
 * answers with Session::flashInput($request->post). That is the mechanism the
 * rest of the application already uses; nothing new was invented for it.
 */
final class SettingsAdminController extends Controller
{
    /**
     * Kürzeste zulässige Aufbewahrung für den Prüfpfad, in Tagen.
     *
     * 365, weil eine Auseinandersetzung über einen Support-Zugriff in einem
     * fremden Kundenkonto selten in derselben Woche beginnt, in der er
     * stattgefunden hat. 0 — „nie löschen" — bleibt daneben zulässig.
     */
    private const MIN_AUDIT_RETENTION_DAYS = 365;

    /** Imprint fields, in the order the form shows them. */
    private const OPERATOR_FIELDS = [
        'operator_name',
        'operator_legal_form',
        'operator_street',
        'operator_zip',
        'operator_city',
        'operator_country',
        'operator_email',
        'operator_phone',
        'operator_represented_by',
        'operator_register_court',
        'operator_register_number',
        'operator_vat_id',
        'operator_dpo',
        'operator_supervisory_authority',
    ];

    /** The old combined page. Kept as a redirect so bookmarks still land somewhere. */
    public function index(Request $request): Response
    {
        return $this->redirect('/admin/settings/mail');
    }

    /* ------------------------------------------------------------------ mail */

    public function mail(Request $request): Response
    {
        return $this->page('mail', [
            'title'          => __('admin.settings.tab_mail') . ' · ' . __('admin.settings.title'),
            'transport'      => Mail::transport(),
            'passwordIsSet'  => Mail::smtpPasswordConfigured(),
        ]);
    }

    public function saveMail(Request $request): Response
    {
        $this->validate($request->post, [
            'mail_transport'  => 'required|in:mail,smtp',
            'smtp_from_email' => 'required|email',
            'smtp_from_name'  => 'required|max:120',
            'smtp_host'       => 'max:190',
            'smtp_port'       => 'int|between:1,65535',
            'smtp_encryption' => 'required|in:none,tls,ssl',
            'smtp_username'   => 'max:190',
        ]);

        $transport = (string) $request->input('mail_transport', 'mail');
        $host      = strtolower(Sanitizer::text((string) $request->input('smtp_host', '')));
        $auth      = $request->boolean('smtp_auth');
        $username  = Sanitizer::text((string) $request->input('smtp_username', ''));

        // Rejected here rather than discovered in the log later: an SMTP
        // transport without a host fails on every single message.
        if ($transport === 'smtp' && $host === '') {
            throw new ValidationException(
                ['smtp_host' => [__('admin.settings.error_host_required')]],
                __('admin.settings.error_host_required')
            );
        }

        if ($transport === 'smtp' && $auth && $username === '') {
            throw new ValidationException(
                ['smtp_username' => [__('admin.settings.error_username_required')]],
                __('admin.settings.error_username_required')
            );
        }

        $port = (int) $request->input('smtp_port', '587');

        $values = [
            'mail_enabled'    => $request->boolean('mail_enabled') ? '1' : '0',
            'mail_transport'  => $transport,
            'smtp_from_email' => strtolower(Sanitizer::text((string) $request->input('smtp_from_email', ''))),
            'smtp_from_name'  => Sanitizer::text((string) $request->input('smtp_from_name', '')),
            'smtp_host'       => $host,
            'smtp_port'       => (string) ($port >= 1 && $port <= 65535 ? $port : 587),
            'smtp_encryption' => (string) $request->input('smtp_encryption', 'tls'),
            'smtp_auth'       => $auth ? '1' : '0',
            'smtp_username'   => $username,
        ];

        $this->persist($request, 'mail', $values);

        // Enabling SMTP without the credential in place is the single most
        // likely way to end up with a silently broken instance, so it is said
        // out loud instead of waiting for the first failed registration.
        if ($values['mail_enabled'] === '1' && $transport === 'smtp' && $auth && !Mail::smtpPasswordConfigured()) {
            $this->flash('warning', __('flash.settings.smtp_password_missing'));
        }

        return $this->redirect('/admin/settings/mail');
    }

    /**
     * Sends a test message to the signed-in administrator.
     *
     * Reports the transport's own answer verbatim on failure. A test send that
     * only says "did not work" costs an operator an afternoon; "535 5.7.8
     * authentication failed" costs them a minute.
     */
    public function sendTest(Request $request): Response
    {
        $user = $this->requireUser();

        $result = Mail::deliver(
            $user->email(),
            __('admin.test_mail.subject'),
            Mail::layout(
                __('admin.test_mail.heading'),
                '<p>' . __('admin.test_mail.body') . '</p>',
                __('admin.test_mail.cta'),
                Url::absolute('/admin/settings/mail')
            )
        );

        Audit::log(
            'admin.test_mail_sent',
            $user->id(),
            null,
            null,
            'settings',
            'mail',
            ['transport' => Mail::transport(), 'status' => $result['status']],
            $request->ip()
        );

        if ($result['ok']) {
            $this->flash('success', __('flash.admin.test_mail_sent', ['email' => $user->email()]));
        } else {
            $this->flash('error', __('flash.admin.test_mail_failed_detail', [
                'error' => $result['error'] ?? '',
            ]));
        }

        return $this->redirect('/admin/settings/mail');
    }

    /* -------------------------------------------------------------- operator */

    public function operator(Request $request): Response
    {
        return $this->page('operator', [
            'title'    => __('admin.settings.tab_operator') . ' · ' . __('admin.settings.title'),
            'complete' => Settings::imprintComplete(),
        ]);
    }

    public function saveOperator(Request $request): Response
    {
        $this->validate($request->post, [
            'operator_name'                  => 'max:190',
            'operator_legal_form'            => 'max:120',
            'operator_street'                => 'max:190',
            'operator_zip'                   => 'max:20',
            'operator_city'                  => 'max:120',
            'operator_country'               => 'max:120',
            'operator_email'                 => 'email',
            'operator_phone'                 => 'max:60',
            'operator_represented_by'        => 'max:190',
            'operator_register_court'        => 'max:120',
            'operator_register_number'       => 'max:60',
            'operator_vat_id'                => 'max:40',
            'operator_dpo'                   => 'max:190',
            'operator_supervisory_authority' => 'max:190',
        ]);

        $values = [];

        foreach (self::OPERATOR_FIELDS as $field) {
            $values[$field] = Sanitizer::text((string) $request->input($field, ''));
        }

        $values['operator_email'] = strtolower($values['operator_email']);

        $this->persist($request, 'operator', $values);

        return $this->redirect('/admin/settings/operator');
    }

    /* -------------------------------------------------------------- instance */

    public function instance(Request $request): Response
    {
        return $this->page('instance', [
            'title'     => __('admin.settings.tab_instance') . ' · ' . __('admin.settings.title'),
            'coverage'  => Lang::coverage(),
            // shipped(), nicht available(): available() liefert nur die
            // eingeschalteten Sprachen. Baute die Auswahlliste darauf auf,
            // verschwände eine abgeschaltete Sprache aus dem Formular und
            // ließe sich nie wieder anschalten.
            'languages' => Lang::shipped(),
            'active'    => Settings::uiLanguages(),
            // Both env switches still override the database, so the page has to
            // say when one of them is doing so — otherwise the setting looks
            // broken rather than overruled.
            'envRegistrationOff' => !Env::bool('ALLOW_REGISTRATION', true),
            'envComingSoon'      => Env::bool('CE_COMING_SOON'),
        ]);
    }

    public function saveInstance(Request $request): Response
    {
        $this->validate($request->post, [
            'registration_mode'           => 'required|in:open,invite,closed',
            'session_idle_hours'          => 'required|int|between:1,720',
            'remember_lifetime_days'      => 'required|int|between:1,365',
            'consent_rate_limit_per_hour' => 'required|int|between:1,100000',
            'launch_note'                 => 'max:200',
        ]);

        // The reference locale is added unconditionally by Settings::uiLanguages()
        // as well; keeping it here too means the stored value is already the
        // truth and does not depend on the reader to repair it.
        $languages = [Lang::DEFAULT_LOCALE];

        foreach ($request->inputArray('ui_languages') as $code) {
            if (Lang::isSupported($code) && !in_array($code, $languages, true)) {
                $languages[] = $code;
            }
        }

        $values = [
            'registration_mode'           => (string) $request->input('registration_mode', 'open'),
            'require_email_verification'  => $request->boolean('require_email_verification') ? '1' : '0',
            'session_idle_hours'          => (string) (int) $request->input('session_idle_hours', '2'),
            'remember_lifetime_days'      => (string) (int) $request->input('remember_lifetime_days', '30'),
            'consent_rate_limit_per_hour' => (string) (int) $request->input('consent_rate_limit_per_hour', '60'),
            'ui_languages'                => implode(',', $languages),
            'coming_soon'                 => $request->boolean('coming_soon') ? '1' : '0',
            'review_notices'              => $request->boolean('review_notices') ? '1' : '0',
            'launch_note'                 => Sanitizer::text((string) $request->input('launch_note', '')),
        ];

        $this->persist($request, 'instance', $values);

        return $this->redirect('/admin/settings/instance');
    }

    /* ------------------------------------------------------------- retention */

    public function retention(Request $request): Response
    {
        return $this->page('retention', [
            'title' => __('admin.settings.tab_retention') . ' · ' . __('admin.settings.title'),
        ]);
    }

    public function saveRetention(Request $request): Response
    {
        $this->validate($request->post, [
            'retention_consent_days'   => 'required|int|between:0,36500',
            'retention_mail_log_days'  => 'required|int|between:0,36500',
            'retention_audit_log_days' => 'required|int|between:0,36500',
        ]);

        $values = [];

        foreach (Settings::RETENTION_KEYS as $key) {
            $values[$key] = (string) max(0, (int) $request->input($key, '0'));
        }

        // Untergrenze für den Prüfpfad.
        //
        // Ohne sie kann sich der Betreiber selbst entlasten: Frist auf 1 Tag
        // setzen, Worker abwarten, Frist zurückstellen — und die Einträge über
        // Support-Zugriffe in fremden Kundenkonten sind weg. Ein Prüfpfad, den
        // der Geprüfte kürzen kann, ist keiner. 0 bleibt erlaubt, weil das
        // „nie löschen" heißt und in die sichere Richtung zeigt.
        $auditDays = (int) $values['retention_audit_log_days'];

        if ($auditDays > 0 && $auditDays < self::MIN_AUDIT_RETENTION_DAYS) {
            $this->flash('error', __('flash.settings.audit_retention_too_short', [
                'min' => (string) self::MIN_AUDIT_RETENTION_DAYS,
            ]));

            return $this->redirect('/admin/settings/retention');
        }

        $this->persist($request, 'retention', $values);

        return $this->redirect('/admin/settings/retention');
    }

    /* ------------------------------------------------------------- internals */

    /** @param array<string,mixed> $data */
    private function page(string $tab, array $data): Response
    {
        return $this->view('admin/settings/' . $tab, array_merge([
            'activeNav' => 'admin.settings',
            'tab'       => $tab,
            'settings'  => Settings::all(),
        ], $data), 'layouts/admin');
    }

    /**
     * Writes one section and records what changed.
     *
     * The snapshot is taken before the write so the diff is real. Values of
     * credentials and personal data are withheld by Settings::auditDiff() —
     * the entry proves the change happened without copying the operator's
     * postal address into a second table.
     *
     * @param array<string,string> $values
     */
    private function persist(Request $request, string $section, array $values): void
    {
        $before = Settings::all();

        Settings::setMany($values);

        $diff = Settings::auditDiff($before, $values);

        if ($diff === []) {
            $this->flash('info', __('flash.settings.unchanged'));

            return;
        }

        Audit::log(
            'admin.settings_changed',
            $this->requireUser()->id(),
            null,
            null,
            'settings',
            $section,
            $diff,
            $request->ip()
        );

        $this->flash('success', __('flash.settings.saved'));
    }
}
