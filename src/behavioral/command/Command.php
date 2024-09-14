<?php

namespace Kusal\DesignPatterns\Behavioral\Command;

interface Command
{
    public function execute();

    public function undo();
}