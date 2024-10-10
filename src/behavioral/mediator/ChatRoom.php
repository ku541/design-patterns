<?php

namespace Kusal\DesignPatterns\Behavioral\Mediator;

use Kusal\DesignPatterns\Behavioral\Mediator\User;
use Kusal\DesignPatterns\Behavioral\Mediator\ChatRoomMediator;

class ChatRoom implements ChatRoomMediator
{
    public function showMessage(User $user, string $message)
    {
        $time = date('Y-m-d g:i A');

        $sender = $user->getName();

        echo "$time [$sender]: $message\n";
    }
}