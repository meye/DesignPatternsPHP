<?php

namespace DesignPatterns\Creational\StaticFactory;

/**
 * Note1: 기억할것!, 정적(static) => 전역(global) => 좋지않음(evil)!
 * Note2: 상속된 클래스, 목업(mock-up), 여러개의 인스턴스를 가질 수 없습니다.
 */
class StaticFactory
{
    /**
     * the parametrized function to get create an instance
     *
     * @param string $type
     *
     * @static
     *
     * @throws \InvalidArgumentException
     * @return FormatterInterface
     */
    public static function factory($type)
    {
        $className = __NAMESPACE__ . '\Format' . ucfirst($type);

        if (!class_exists($className)) {
            throw new \InvalidArgumentException('Missing format class.');
        }

        return new $className();
    }
}
