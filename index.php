<?php

require_once 'vendor/autoload.php';

// use Kusal\DesignPatterns\Behavioral\Command\TV;
// use Kusal\DesignPatterns\Behavioral\Command\On;
// use Kusal\DesignPatterns\Behavioral\Command\Remote;

// $tv = new TV;

// $on = new On($tv);

// $remote = new Remote();

// $remote->send($on);

// var_dump($tv);

switch ($argv[1]) {
    case 'command':
        require_once 'src/behavioral/command/index.php';
        break;
    
    default:
        echo "Invalid pattern\n";
        break;
}