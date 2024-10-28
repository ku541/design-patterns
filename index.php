<?php

require_once 'vendor/autoload.php';

const PATTERN_TO_TYPE_MAPPING = [
    'command' => 'behavioral',
    'template-method' => 'behavioral',
    'strategy' => 'behavioral',
    'facade' => 'structural',
    'mediator' => 'behavioral',
    'singleton' => 'creational'
];

$pattern = $argv[1];

if (!isset(PATTERN_TO_TYPE_MAPPING[$pattern])) {
    exit("Invalid pattern\n");
}

$type = PATTERN_TO_TYPE_MAPPING[$pattern];

require_once "src/$type/$pattern/index.php";