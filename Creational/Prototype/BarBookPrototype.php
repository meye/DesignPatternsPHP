<?php

namespace DesignPatterns\Creational\Prototype;

/**
 * Class BarBookPrototype
 */
class BarBookPrototype extends BookPrototype
{
    /**
     * @var string
     */
    protected $category = 'Bar';

    /**
     * 빈 클론 매서드
     */
    public function __clone()
    {
    }
}
