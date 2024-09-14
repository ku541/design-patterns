<?php

use Kusal\DesignPatterns\Behavioral\Command\TV;
use Kusal\DesignPatterns\Behavioral\Command\TurnOn;
use Kusal\DesignPatterns\Behavioral\Command\Remote;

$tv = new TV;

echo $tv->isOn() ? "TV is on\n" : "TV is off\n";

$turnOn = new TurnOn($tv);
$remote = new Remote;

$remote->send($turnOn);

echo $tv->isOn() ? "TV is on\n" : "TV is off\n";