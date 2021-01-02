<?php

namespace Core;

use Dotenv\Dotenv;
use Dotenv\Repository\RepositoryBuilder;
use Dotenv\Repository\RepositoryInterface;

class Env
{

    /**
     * @var RepositoryInterface|null
     */
    protected static $repository;

    /**
     * Create the environment repository
     * @return \Dotenv\Repository\AdapterRepository|RepositoryInterface
     */
    protected static function createRepository()
    {

        $repository = RepositoryBuilder::createWithDefaultAdapters()->make();

        $path = realpath('../');

        $dotenv = Dotenv::create(
            $repository,
            $path
        );

        $dotenv->safeLoad($path);

        return static::$repository = $repository;

    }

    /**
     * Get the environment repository
     * @return RepositoryInterface|null
     */
    public static function getRepository(): ?RepositoryInterface
    {

        if (static::$repository === null) {

            static::createRepository();

        }

        return static::$repository;

    }

    /**
     * Get a single value from the environment repository
     * @param $key
     * @param null $default
     * @return mixed|string|null
     */
    public static function get($key, $default = null): ?string
    {

        return static::getRepository()->get($key) ?? $default;

    }

}
