<?php

require_once 'vendor/autoload.php';

switch ($argv[1]) {
    case 'command':
        require_once 'src/behavioral/command/index.php';
        break;

    case 'template-method':
        require_once 'src/behavioral/template-method/index.php';
        break;

    case 'strategy':
        require_once 'src/behavioral/strategy/index.php';
        break;

    default:
        echo "Invalid pattern\n";
        break;
}