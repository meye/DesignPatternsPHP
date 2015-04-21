<?php

namespace DesignPatterns\Creational\Singleton;

/**
 * class Singleton
 */
class Singleton
{
    /**
     * @var Singleton reference to singleton instance
     */
    private static $instance;
    
    /**
     * 지연 초기화를 통해 인스턴스를 가져옵니다.(첫 번째 구문에서 생성합니다.)
     *
     * @return self
     */
    public static function getInstance()
    {
        if (null === static::$instance) {
            static::$instance = new static;
        }

        return static::$instance;
    }

    /**
     * is not allowed to call from outside: private!
     *
     */
    private function __construct()
    {
    }

    /**
     * prevent the instance from being cloned
     *
     * @return void
     */
    private function __clone()
    {
    }

    /**
     * prevent from being unserialized
     *
     * @return void
     */
    private function __wakeup()
    {
    }
}
