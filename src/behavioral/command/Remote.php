<?php

namespace Kusal\DesignPatterns\Behavioral\Command;

use Kusal\DesignPatterns\Behavioral\Command\Command;

class Remote
{
    public function send(Command $command)
    {
        $command->execute();
    }
}