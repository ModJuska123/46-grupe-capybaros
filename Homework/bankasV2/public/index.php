<?php
use Bank\App\App;

require '../vendor/autoload.php';
define('ROOT', __DIR__ . '/../');
define('URL', 'http://bank-second.test');


echo App::run();