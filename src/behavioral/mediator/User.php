<?php

namespace Kusal\DesignPatterns\Behavioral\Mediator;

use Kusal\DesignPatterns\Behavioral\Mediator\ChatRoomMediator;

class User
{
    public function __construct(
        private string $name,
        private ChatRoomMediator $chatRoom
    ) {}

    public function getName(): string
    {
        return $this->name;
    }

    public function send(string $message)
    {
        $this->chatRoom->showMessage($this, $message);
    }
}