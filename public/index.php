<?php

$app = require(__DIR__ . '/../bootstrap/app.php');

$core = $app->make('Bete\Http\Core');

$core->run();
