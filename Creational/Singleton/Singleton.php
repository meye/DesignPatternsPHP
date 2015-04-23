<?php

namespace DesignPatterns\Creational\Singleton;

/**
 * class Singleton
 */
class Singleton
{
    /**
     * @var Singleton singleton객체를 참조합니다.
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
     * 외부에서 호출되면 안됨: private!
     *
     */
    private function __construct()
    {
    }

    /**
     * clone에 의해서 호출 되는 것 방지
     *
     * @return void
     */
    private function __clone()
    {
    }

    /**
     * unserialized에 의해 인스턴스화 방지
     *
     * @return void
     */
    private function __wakeup()
    {
    }
}
