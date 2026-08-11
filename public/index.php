<?php

declare(strict_types=1);

/**
 * Front controller.
 *
 * This is both the marketing site and the dashboard: consented.eu uses its own
 * CMP, so the landing page and the product share one deployment.
 */

require dirname(__DIR__) . '/bootstrap.php';

use Consented\Core\Kernel;
use Consented\Core\Request;

$kernel = new Kernel();

(require CONSENTED_ROOT . '/routes/web.php')($kernel->router());

$kernel->handle(Request::capture())->send();
