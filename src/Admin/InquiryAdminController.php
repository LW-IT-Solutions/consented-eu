<?php

declare(strict_types=1);

namespace Consented\Admin;

use Consented\Core\Captcha;
use Consented\Core\Controller;
use Consented\Core\Paginator;
use Consented\Core\Request;
use Consented\Core\Response;
use Consented\Core\Signal;
use Consented\Site\Inquiry;

/**
 * Support enquiries in the admin area.
 *
 * The list is the whole feature. There is deliberately no reply function here:
 * answering happens in a mail client, from the address the operator already
 * uses, with a thread the sender can continue. A half-built ticket system that
 * sends one-way messages nobody can reply to would be worse than none.
 */
final class InquiryAdminController extends Controller
{
    public function index(Request $request): Response
    {
        $status = (string) ($request->query['status'] ?? '');

        if (!in_array($status, Inquiry::STATUSES, true)) {
            $status = '';
        }

        $counts = Inquiry::counts();
        $total  = $status === '' ? array_sum($counts) : ($counts[$status] ?? 0);
        $pager  = Paginator::fromRequest($request, $total);
        $page   = Inquiry::page($status, $pager->limit(), $pager->offset());

        return $this->view('admin/inquiries', [
            'title'     => __('admin.inquiries.title'),
            'activeNav' => 'admin.inquiries',
            'rows'      => $page['rows'],
            'counts'    => $counts,
            'total'     => array_sum($counts),
            'status'    => $status,
            'pager'     => $pager,
            // Beide Nebenwege koennen still ausfallen. Der Admin ist der
            // einzige Ort, an dem das auffaellt, bevor jemand wochenlang auf
            // Meldungen wartet, die nie kommen.
            'signalOn'  => Signal::configured(),
            'captchaOn' => Captcha::active(),
        ], 'layouts/admin');
    }

    public function setStatus(Request $request): Response
    {
        $publicId = $request->param('iid');
        $status   = (string) $request->input('status', '');

        if (Inquiry::findByPublicId($publicId) === null) {
            $this->abort(404);
        }

        if (!Inquiry::setStatus($publicId, $status, $this->requireUser()->id())) {
            $this->flash('error', __('flash.admin.inquiry_failed'));
        }

        return $this->back($request);
    }

    public function destroy(Request $request): Response
    {
        $publicId = $request->param('iid');

        if (Inquiry::findByPublicId($publicId) === null) {
            $this->abort(404);
        }

        Inquiry::delete($publicId);
        $this->flash('success', __('flash.admin.inquiry_deleted'));

        return $this->redirect('/admin/inquiries');
    }
}
