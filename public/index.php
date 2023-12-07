<?php
/**
 * knut7 - a simple framework for PHP Developers
 *
 * @author   izni burak demirtaş (@izniburak) <izniburak@gmail.com>
 * @web      <http://burakdemirtas.org>
 * @url      <https://github.com/izniburak/knut7>
 * @license  The MIT License (MIT) - <http://opensource.org/licenses/MIT>
 */

// Autoload Dependencies
require_once __DIR__ . '/../vendor/autoload.php';

/** @var \Ballybran\Kernel\Application $app */
$app = require_once __DIR__ . '/../app/bootstrap.php';

$app->start(APP_ENV);
