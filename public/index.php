<?php

$app = require(__DIR__ . '/../bootstrap/app.php');

$core = $app->make('Bete\Web\Core');

$core->run();
