<?php

namespace Kusal\DesignPatterns\Behavioral\Command;

class TV
{
    private bool $isOn = false;

    public function turnOn()
    {
        $this->isOn = true;
    }

    public function turnOff()
    {
        $this->isOn = false;
    }

    public function isOn(): bool
    {
        return $this->isOn === true;
    }
}