<?php

namespace DesignPatterns\Creational\StaticFactory;

/**
 * Note1: 기억하세요, static => global => evil
 * Note2: 서브클래스, 모형(mock-up), 여러 인스턴스들을 가질 수 없습니다.
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
