<?php

ob_start();
session_start();

use Ballybran\Kernel\Application;

$app = new Application;

define('KNUT_VERSION', Application::VERSION);
define('APP_ENV', strtolower(config('app.env')));

return $app;
