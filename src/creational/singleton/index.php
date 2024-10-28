<?php

use Kusal\DesignPatterns\Creational\Singleton\President;

$president1 = President::getInstance();
$president2 = President::getInstance();

$equality = $president1 === $president2 ? '' : 'not ';

echo "President 1 & 2 are {$equality}the same.\n";