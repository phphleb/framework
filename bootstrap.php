<?php
/**
 * @author  Foma Tuturov <fomiash@yandex.ru>
 */

declare(strict_types=1);

use Hleb\HlebBootstrap;

PHP_VERSION_ID < 80200 and exit('Current PHP version is ' . PHP_VERSION . ', required >= 8.2');

\class_exists(HlebBootstrap::class) or require __DIR__ . '/HlebBootstrap.php';

if (!defined('HLEB_PUBLIC_DIR') || !is_string(HLEB_PUBLIC_DIR)) {
    exit('Error! The public directory in the `index` file is incorrectly specified.');
}

(new HlebBootstrap(HLEB_PUBLIC_DIR))->load();
