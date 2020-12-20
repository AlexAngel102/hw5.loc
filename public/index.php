<?php

use App\Str;

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require 'autoload.php';

$autoloader = new Psr4AutoloaderClass();
$autoloader->addNamespace('App', __DIR__ . '/../src');
$autoloader->register();

$phrase  = 'You should eat fruits, vegetables, and fiber every day.';
$phrase2  = 'You, should, eat, fruits, vegetables, and, fiber, every, day';
$phrase3 = 'You should eat pizza, beer, and ice cream every day.';
$healthy = ['fruits', 'vegetables', 'fiber'];
$yummy   = ['pizza', 'beer', 'ice cream'];

echo Str::toUpper($phrase);
echo '<br>';
echo Str::toLower($phrase);
echo '<br>';
echo Str::subStr($phrase, 0, 10);
echo '<br>';
echo Str::replace($healthy, $yummy, $phrase);
echo '<br>';
echo Str::length($phrase);
echo '<br>';
print_r(Str::explode(",", $phrase2));
echo '<br>';
echo Str::implode(" and ", $yummy);
echo '<br>';
echo Str::strStr($phrase, "f");
echo '<br>';
echo Str::trim($phrase);
echo '<br>';
echo Str::length($phrase);
