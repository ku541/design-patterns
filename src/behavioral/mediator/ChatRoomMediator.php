<?php

namespace Kusal\DesignPatterns\Behavioral\Mediator;

use Kusal\DesignPatterns\Behavioral\Mediator\User;

interface ChatRoomMediator
{
    public function showMessage(User $user, string $message);
}