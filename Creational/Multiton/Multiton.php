<?php

namespace DesignPatterns\Creational\Multiton;

/**
 * class Multiton
 */
class Multiton
{
    /**
     *
     * 첫번째 인스턴스
     */
    const INSTANCE_1 = '1';

    /**
     *
     * 두번째 인스턴스
     */
    const INSTANCE_2 = '2';

    /**
     * 이름이 지정된 인스턴스들을 저장합니다.
     *
     * @var array
     */
    private static $instances = array();

    /**
     * 외부에서 호출되면 안됨: private!
     *
     */
    private function __construct()
    {
    }

    /**
     * 주어진 이름을 통해 인스턴스를 가져옵니다. e.g. Multiton::INSTANCE_1
     * 게으른 초기화(Lazy Initialization)를 사용
     *
     * @param string $instanceName
     *
     * @return Multiton
     */
    public static function getInstance($instanceName)
    {
        if (!array_key_exists($instanceName, self::$instances)) {
            self::$instances[$instanceName] = new self();
        }

        return self::$instances[$instanceName];
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
