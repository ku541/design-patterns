<?php

use Kusal\DesignPatterns\Behavioral\Mediator\ChatRoom;
use Kusal\DesignPatterns\Behavioral\Mediator\User;

$chatRoom = new ChatRoom;

$john = new User('John Doe', $chatRoom);
$jane = new User('Jane Doe', $chatRoom);

$john->send('Hi there!');
$jane->send('Hey!');