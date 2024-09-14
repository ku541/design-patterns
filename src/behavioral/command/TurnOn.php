<?php

namespace Kusal\DesignPatterns\Behavioral\Command;

use Kusal\DesignPatterns\Behavioral\Command\TV;
use Kusal\DesignPatterns\Behavioral\Command\Command;

class TurnOn implements Command
{
    public function __construct(private TV $tv) {}

    public function execute()
    {
        $this->tv->turnOn();
    }

    public function undo()
    {
        $this->tv->turnOff();
    }
}