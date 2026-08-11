<?php

declare(strict_types=1);

use Consented\Admin\AccountAdminController;
use Consented\Admin\AdminController;
use Consented\Admin\CatalogController;
use Consented\Admin\InquiryAdminController;
use Consented\Admin\PropertyAdminController;
use Consented\Admin\SettingsAdminController;
use Consented\Admin\StatsController;
use Consented\Admin\SystemController;
use Consented\Api\ConsentApiController;
use Consented\Api\DeclarationController;
use Consented\Api\SdkController;
use Consented\Auth\LoginController;
use Consented\Auth\PasswordResetController;
use Consented\Auth\RegisterController;
use Consented\Auth\VerificationController;
use Consented\Core\Router;
use Consented\Org\AccountController;
use Consented\Org\InvitationController;
use Consented\Org\MemberController;
use Consented\Property\DashboardController;
use Consented\Property\DesignController;
use Consented\Property\DomainController;
use Consented\Property\IntegrationController;
use Consented\Property\LanguageController;
use Consented\Property\PropertyController;
use Consented\Property\ServiceController;
use Consented\Property\SettingsController;
use Consented\Property\TextController;
use Consented\Site\InquiryController;
use Consented\Site\PublicController;

return static function (Router $router): void {
    // ---------------------------------------------------------------- public
    $router->get('/', [PublicController::class, 'home']);
    $router->get('/features', [PublicController::class, 'features']);
    $router->get('/self-hosting', [PublicController::class, 'selfHosting']);
    $router->get('/docs', [PublicController::class, 'docs']);
    $router->get('/legal/{page}', [PublicController::class, 'legal']);

    // Offen fuer nicht angemeldete Absender: wer sich nicht anmelden kann,
    // ist genau die Person, die uns am dringendsten erreichen muss.
    $router->get('/kontakt', [InquiryController::class, 'form']);

    // Die Annahme MUSS in einer csrf-Gruppe stehen. Ohne sie nimmt der
    // Endpunkt jeden fremden POST an — hier zuerst uebersehen und beim
    // Durchstich aufgefallen, weil eine Anfrage ohne Token gespeichert wurde.
    $router->group(['csrf'], static function (Router $r): void {
        $r->post('/kontakt', [InquiryController::class, 'store']);
    });
    $router->get('/consent-lookup', [PublicController::class, 'consentLookup']);
    $router->get('/demo/frame', [PublicController::class, 'demoFrame']);

    // ------------------------------------------------------------------ auth
    $router->group(['guest'], static function (Router $r): void {
        $r->get('/login', [LoginController::class, 'show']);
        $r->get('/register', [RegisterController::class, 'show']);
        $r->get('/forgot-password', [PasswordResetController::class, 'showForgot']);
        $r->get('/reset-password/{token}', [PasswordResetController::class, 'showReset']);
    });

    $router->group(['guest', 'csrf'], static function (Router $r): void {
        $r->post('/login', [LoginController::class, 'login']);
        $r->post('/register', [RegisterController::class, 'register']);
        $r->post('/forgot-password', [PasswordResetController::class, 'sendLink']);
        $r->post('/reset-password/{token}', [PasswordResetController::class, 'reset']);
    });

    $router->get('/verify-email/{token}', [VerificationController::class, 'verify']);

    $router->group(['auth'], static function (Router $r): void {
        $r->get('/verify-email', [VerificationController::class, 'notice']);
    });

    $router->group(['auth', 'csrf'], static function (Router $r): void {
        $r->post('/logout', [LoginController::class, 'logout']);
        $r->post('/verify-email/resend', [VerificationController::class, 'resend']);
    });

    // ------------------------------------------------------------- dashboard
    $router->group(['auth'], static function (Router $r): void {
        $r->get('/dashboard', [DashboardController::class, 'index']);
        $r->get('/account', [AccountController::class, 'show']);
    });

    $router->group(['auth', 'csrf'], static function (Router $r): void {
        $r->post('/account', [AccountController::class, 'update']);
        $r->post('/account/password', [AccountController::class, 'changePassword']);
        // Der Wechsel wird hier nur beantragt. Wirksam wird er in
        // VerificationController::verify(), nach dem Klick auf den Link,
        // der an die neue Adresse ging.
        $r->post('/account/email', [AccountController::class, 'changeEmail']);
        $r->post('/account/email/cancel', [AccountController::class, 'cancelEmailChange']);
        $r->post('/account/sessions/revoke', [LoginController::class, 'logoutOtherDevices']);

        // Support-Zugriff beenden. Hängt in der auth-Gruppe und nicht in der
        // admin-Gruppe, weil der Knopf im Banner auf jeder Kundenseite steht —
        // ohne offene Freigabe tut die Route nichts.
        $r->post('/support/end', [PropertyAdminController::class, 'endSupport']);
    });

    // ------------------------------------------------------------ properties
    $router->group(['auth'], static function (Router $r): void {
        $r->get('/properties', [PropertyController::class, 'index']);
        $r->get('/properties/new', [PropertyController::class, 'create']);
        $r->get('/properties/{id}', [PropertyController::class, 'show']);
        $r->get('/properties/{id}/settings', [SettingsController::class, 'show']);
        $r->get('/properties/{id}/domains', [DomainController::class, 'index']);
        $r->get('/properties/{id}/languages', [LanguageController::class, 'index']);
        $r->get('/properties/{id}/texts', [TextController::class, 'index']);
        $r->get('/properties/{id}/design', [DesignController::class, 'show']);
        $r->get('/properties/{id}/services', [ServiceController::class, 'index']);
        $r->get('/properties/{id}/services/catalog', [ServiceController::class, 'catalog']);
        // Fragment endpoint for the live search on the page above. No CSRF: it
        // reads, and a GET with a token would break the plain form fallback.
        $r->get('/properties/{id}/services/catalog/search', [ServiceController::class, 'catalogSearch']);
        $r->get('/properties/{id}/services/custom', [ServiceController::class, 'customForm']);
        $r->get('/properties/{id}/services/{sid}/edit', [ServiceController::class, 'edit']);
        $r->get('/properties/{id}/integration', [IntegrationController::class, 'show']);
        $r->get('/properties/{id}/members', [MemberController::class, 'index']);
    });

    $router->group(['auth', 'csrf'], static function (Router $r): void {
        $r->post('/properties', [PropertyController::class, 'store']);
        $r->post('/properties/{id}/publish', [PropertyController::class, 'publish']);
        $r->post('/properties/{id}/delete', [PropertyController::class, 'destroy']);

        $r->post('/properties/{id}/settings', [SettingsController::class, 'update']);

        $r->post('/properties/{id}/domains', [DomainController::class, 'store']);
        $r->post('/properties/{id}/domains/{did}/verify', [DomainController::class, 'verify']);
        $r->post('/properties/{id}/domains/{did}/primary', [DomainController::class, 'makePrimary']);
        $r->post('/properties/{id}/domains/{did}/delete', [DomainController::class, 'destroy']);

        $r->post('/properties/{id}/languages', [LanguageController::class, 'update']);
        $r->post('/properties/{id}/texts', [TextController::class, 'update']);
        $r->post('/properties/{id}/texts/reset', [TextController::class, 'reset']);
        $r->post('/properties/{id}/design', [DesignController::class, 'update']);

        $r->post('/properties/{id}/services/add', [ServiceController::class, 'add']);
        $r->post('/properties/{id}/services/custom', [ServiceController::class, 'storeCustom']);
        $r->post('/properties/{id}/services/{sid}/update', [ServiceController::class, 'update']);
        $r->post('/properties/{id}/services/{sid}/delete', [ServiceController::class, 'destroy']);
        $r->post('/properties/{id}/services/reorder', [ServiceController::class, 'reorder']);

        $r->post('/properties/{id}/members/invite', [MemberController::class, 'invite']);
        $r->post('/properties/{id}/members/{uid}/role', [MemberController::class, 'changeRole']);
        $r->post('/properties/{id}/members/{uid}/remove', [MemberController::class, 'remove']);
        $r->post('/properties/{id}/invitations/{iid}/revoke', [MemberController::class, 'revokeInvitation']);
    });

    // ---------------------------------------------------------------- admin
    //
    // Reihenfolge ist hier Programm: der Router nimmt den ersten Treffer, und
    // ein Platzhalter {cid} steht für [^/]+. Jede literale Route muss deshalb
    // vor dem Platzhalter derselben Ebene stehen, sonst verschluckt er sie —
    // /admin/catalog/new würde sonst als Katalogeintrag mit der Kennung "new"
    // gesucht.
    $router->group(['admin'], static function (Router $r): void {
        $r->get('/admin', [AdminController::class, 'overview']);

        $r->get('/admin/users', [AccountAdminController::class, 'users']);
        $r->get('/admin/users/{uid}', [AccountAdminController::class, 'showUser']);
        $r->get('/admin/orgs', [AccountAdminController::class, 'orgs']);
        $r->get('/admin/orgs/{oid}', [AccountAdminController::class, 'showOrg']);

        $r->get('/admin/properties', [PropertyAdminController::class, 'index']);
        $r->get('/admin/properties/{pid}', [PropertyAdminController::class, 'show']);
        $r->get('/admin/properties/{pid}/config', [PropertyAdminController::class, 'config']);

        $r->get('/admin/catalog', [CatalogController::class, 'index']);
        $r->get('/admin/catalog/new', [CatalogController::class, 'create']);
        $r->get('/admin/catalog/{cid}', [CatalogController::class, 'show']);
        $r->get('/admin/catalog/{cid}/edit', [CatalogController::class, 'edit']);

        $r->get('/admin/mail', [AdminController::class, 'mail']);
        $r->get('/admin/mail/{mid}', [AdminController::class, 'mailBody']);

        $r->get('/admin/inquiries', [InquiryAdminController::class, 'index']);

        $r->get('/admin/audit', [SystemController::class, 'audit']);
        $r->get('/admin/system', [SystemController::class, 'system']);
        $r->get('/admin/stats', [StatsController::class, 'show']);

        $r->get('/admin/settings', [SettingsAdminController::class, 'index']);
        $r->get('/admin/settings/mail', [SettingsAdminController::class, 'mail']);
        $r->get('/admin/settings/operator', [SettingsAdminController::class, 'operator']);
        $r->get('/admin/settings/instance', [SettingsAdminController::class, 'instance']);
        $r->get('/admin/settings/retention', [SettingsAdminController::class, 'retention']);
    });

    $router->group(['admin', 'csrf'], static function (Router $r): void {
        $r->post('/admin/users/{uid}/admin', [AdminController::class, 'toggleAdmin']);
        $r->post('/admin/users/{uid}/verify', [AdminController::class, 'verifyUser']);
        $r->post('/admin/users/{uid}/delete', [AdminController::class, 'deleteUser']);
        $r->post('/admin/users/{uid}/suspend', [AccountAdminController::class, 'suspend']);
        $r->post('/admin/users/{uid}/sessions/revoke', [AccountAdminController::class, 'revokeSessions']);
        $r->post('/admin/users/{uid}/resend-verification', [AccountAdminController::class, 'resendVerification']);
        $r->post('/admin/users/{uid}/send-reset', [AccountAdminController::class, 'sendReset']);
        $r->post('/admin/invitations/{iid}/revoke', [AccountAdminController::class, 'revokeInvitation']);
        $r->post('/admin/inquiries/{iid}/status', [InquiryAdminController::class, 'setStatus']);
        $r->post('/admin/inquiries/{iid}/delete', [InquiryAdminController::class, 'destroy']);

        $r->post('/admin/properties/{pid}/support', [PropertyAdminController::class, 'startSupport']);
        $r->post('/admin/properties/{pid}/suspend', [PropertyAdminController::class, 'suspend']);
        $r->post('/admin/properties/{pid}/restore', [PropertyAdminController::class, 'restore']);

        $r->post('/admin/catalog/new', [CatalogController::class, 'store']);
        $r->post('/admin/catalog/{cid}/edit', [CatalogController::class, 'update']);
        $r->post('/admin/catalog/{cid}/active', [CatalogController::class, 'toggleActive']);
        $r->post('/admin/catalog/{cid}/verify', [AdminController::class, 'verifyCatalogEntry']);

        $r->post('/admin/mail/test', [AdminController::class, 'sendTestMail']);

        $r->post('/admin/settings/mail', [SettingsAdminController::class, 'saveMail']);
        $r->post('/admin/settings/mail/test', [SettingsAdminController::class, 'sendTest']);
        $r->post('/admin/settings/operator', [SettingsAdminController::class, 'saveOperator']);
        $r->post('/admin/settings/instance', [SettingsAdminController::class, 'saveInstance']);
        $r->post('/admin/settings/retention', [SettingsAdminController::class, 'saveRetention']);
    });

    // ----------------------------------------------------------- invitations
    $router->get('/invitations/{token}', [InvitationController::class, 'show']);
    $router->group(['csrf'], static function (Router $r): void {
        $r->post('/invitations/{token}/accept', [InvitationController::class, 'accept']);
    });

    // ------------------------------------------------------------- SDK / API
    // No CSRF and no session here: these are called by third-party websites.
    $router->get('/p/{publicId}/cmp.js', [SdkController::class, 'runtime']);
    $router->get('/p/{publicId}/config/{version}.json', [SdkController::class, 'config']);
    $router->get('/p/{publicId}/preview.json', [SdkController::class, 'preview']);

    // Cookie-Erklärung: dieselbe Auslieferungsart wie das SDK, nur für Menschen.
    // Das Skript zum Einbetten und die eigenständige Seite zum Verlinken.
    $router->get('/p/{publicId}/cookies.js', [DeclarationController::class, 'embed']);
    $router->get('/p/{publicId}/cookies', [DeclarationController::class, 'page']);

    $router->post('/api/v1/consent', [ConsentApiController::class, 'store']);
    // The beacon uses text/plain to stay CORS-safelisted, but the fetch
    // fallback may still preflight — so OPTIONS has to answer.
    $router->options('/api/v1/consent', [ConsentApiController::class, 'preflight']);
    $router->any('/api/v1/consent/{consentId}', [ConsentApiController::class, 'handle']);
    $router->get('/api/v1/health', [ConsentApiController::class, 'health']);
};
