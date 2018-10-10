<?php
/**
 * @author         Pierre-Henry Soria <hi@ph7.me>
 * @copyright      (c) 2018, Pierre-Henry Soria. All Rights Reserved.
 * @license        GNU General Public License; <https://www.gnu.org/licenses/gpl-3.0.en.html>
 */

namespace SparroWave\Frontend;

use SparroWave\Kernel\Core\Bootstrap;

require __DIR__ . '/vendor/autoload.php';

$app = new Bootstrap(__DIR__);
$app->setTimezoneIfNotSet();

ob_start();
$app->run();
ob_end_flush();
