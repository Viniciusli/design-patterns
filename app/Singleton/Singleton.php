<?php

namespace App\Singleton;

class Singleton
{
    protected static $instancia;

    private function __construct() {}
    private function __clone() {}
    private function __wakeup() {}

    public static function getInstancia(): self
    {
        if (empty(self::$instancia)) {
            self::$instancia = new self();
        }

        return self::$instancia;
    }
}