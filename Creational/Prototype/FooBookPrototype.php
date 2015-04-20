<?php

namespace DesignPatterns\Creational\Prototype;

/**
 * Class FooBookPrototype
 */
class FooBookPrototype extends BookPrototype
{
    protected $category = 'Foo';

    /**
     * 빈 클론 매서드
     */
    public function __clone()
    {
    }
}
