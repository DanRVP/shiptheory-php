<?php

namespace Shiptheory\Util;

class Environment
{
    const VARIABLE_PREFIX = 'SHIPTHEORY_PHP_';

    /**
     * Loads the contents of .env and and uses putenv() to save the values.
     */
    public static function loadFromEnvFile()
    {
        $env_contents = file_get_contents(__DIR__ . '../../.env');
        if (!$env_contents) {
            return;
        }

        $variables = explode("\n", $env_contents);
        array_map(function ($variable_set) {
            putenv(self::VARIABLE_PREFIX . trim($variable_set));
        }, $variables);
    }

    /**
     * Loads an environment variable using getenv().
     *
     * @param $name Name of the environment variable.
     * @return mixed
     */
    public static function loadEnvVariable($name)
    {
        return getenv(self::VARIABLE_PREFIX . $name);
    }
}
