<?php

require_once 'vendor/autoload.php';

switch ($argv[1]) {
    case 'command':
        require_once 'src/behavioral/command/index.php';
        break;
    
    default:
        echo "Invalid pattern\n";
        break;
}