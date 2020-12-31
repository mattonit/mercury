<?php

namespace Core;

class Config
{

    /**
     * Store all configuration entries
     * @var array
     */
    private static $config = [];

    /**
     * Get the single value from the config file
     * @param $key
     * @return mixed|null
     */
    public static function get($key)
    {

        // Parse function's input
        list ($file, $property) = static::parse($key);

        // Load configuration file
        static::load($file);

        // Return actual value or null
        return (array_key_exists($property, static::$config[$file])) ? static::$config[$file][$property] : null;

    }

    /**
     * Parse
     * @param $key
     * @return array
     */
    private static function parse($key): array
    {

        $parts = explode('.', $key);

        return [
            $parts[0],
            $parts[1]
        ];

    }

    private static function load($file)
    {
        try {
            if (file_exists($path = APP_PATH . '/config/' . $file . EXT)) {

                static::$config[$file] = require $path;

            }
        } catch (Exception $e) {
            throw new \Error('There was an error');
        }

    }

}
