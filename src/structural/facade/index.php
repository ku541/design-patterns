<?php

use Kusal\DesignPatterns\Structural\Facade\Computer;
use Kusal\DesignPatterns\Structural\Facade\ComputerFacade;

$computer = new ComputerFacade(new Computer);

$computer->turnOn();

$computer->turnOff();
