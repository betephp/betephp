<?php

require(__DIR__ . '/../vendor/autoload.php');

$app = new Bete\Foundation\Application(realpath(__DIR__ . '/..'));

$app->singleton('exceptionHandler', 'App\Exception\Handler');

return $app;
