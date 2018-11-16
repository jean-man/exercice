<?php

namespace Core;

class Autoloader
{

    public static function autoload(string $class): void
    {
        $parts = explode("\\", $class);
        $filepath = __DIR__ . "/../" . implode(DIRECTORY_SEPARATOR, $parts) . ".php";

        require_once $filepath;
    }

    public static function register(): void
    {
        spl_autoload_register(array(__CLASS__, 'autoload'));
    }

}