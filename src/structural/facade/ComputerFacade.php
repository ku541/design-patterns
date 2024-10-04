<?php

namespace Kusal\DesignPatterns\Structural\Facade;

use Kusal\DesignPatterns\Structural\Facade\Computer;

class ComputerFacade
{
    public function __construct(private Computer $computer) {}

    public function turnOn()
    {
        $this->computer->getElectricShock();

        $this->computer->makeSound();

        $this->computer->showLoadingScreen();

        $this->computer->bam();
    }

    public function turnOff()
    {
        $this->computer->closeEverything();

        $this->computer->pullCurrent();

        $this->computer->sooth();
    }
}
