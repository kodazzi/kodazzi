<?php
/**
 * This file is part of the Kodazzi Framework.
 *
 * (c) Jorge Gaitan <info@kodazzi.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

require_once '../system/app/defined.php';

$Kernel = new Kodazzi\Kernel('dev', true);
$response = $Kernel->handle(Service::get('kernel.request'));
$response->send();

$Kernel->terminate(Service::get('kernel.request'), $response);