<?php

namespace Kusal\DesignPatterns\Creational\Singleton;

final class President
{
    private static ?self $instance = null;

    private function __construct() {}

    public static function getInstance(): self
    {
        if (! self::$instance) {
            self::$instance = new self;
        }

        return self::$instance;
    }

    private function __clone() {}

    public function __wakeup() {}
}