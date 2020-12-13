<?php

use App\Str;

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require 'autoload.php';

$autoloader = new Psr4AutoloaderClass();
$autoloader->addNamespace('App', __DIR__ . '/../src');
$autoloader->register();

$phrase  = "You should eat fruits, vegetables, and fiber every day.";
$healthy = array("fruits", "vegetables", "fiber");
$yummy   = array("pizza", "beer", "ice cream");

echo Str::replace($healthy, $yummy, $phrase);
echo '<br>';
echo Str::length($phrase);