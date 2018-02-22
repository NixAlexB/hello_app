<?php
require 'vendor/autoload.php';

$app = new \Slim\Slim();

require_once __DIR__ . '/app/app.php';

$app->run();
