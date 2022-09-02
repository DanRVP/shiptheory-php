<?php

namespace Shiptheory\Util;

class Environment
{
    const VARIABLE_PREFIX = 'SHIPTHEORY_PHP_';

    /**
     * Loads the contents of .env and and uses putenv() to save the values.
     * Only tries to get shiptheory-php env variables and ignores all others.
     */
    public static function loadFromEnvFile()
    {
        $env_contents = file_get_contents('.env');
        if (!$env_contents) {
            return;
        }

        $variables = explode("\n", $env_contents);
        array_map(function ($variable_set) {
            if (strpos($variable_set, self::VARIABLE_PREFIX) !== false) {
                putenv($variable_set);
            }
        }, $variables);
    }

    /**
     * Loads an environment variable using getenv().
     *
     * @param string $name The name of the environment variable.
     * @return mixed
     */
    public static function loadEnvVariable($name)
    {
        $value = getenv($name);
        switch ($value) {
            case 'null':
                return null;
            case 'false':
                return false;
            case 'true':
                return true;
            case is_numeric($value):
                if (strpos($value, '.') !== false) {
                    return (float) $value;
                } else {
                    return (int) $value;
                }
            default:
                return $value;
        }
    }
}
