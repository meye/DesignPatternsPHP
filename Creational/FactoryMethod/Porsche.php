<?php

namespace DesignPatterns\Creational\FactoryMethod;

/**
 * Porsche is a german car
 */
class Porsche implements VehicleInterface
{
    /**
     * @var string
     */
    protected $color;

    /**
     * @param string $rgb
     */
    public function setColor($rgb)
    {
        $this->color = $rgb;
    }

    /**
     * AMG 튜닝은 오직 메스세데스 자동차를 위해서 제공하지만, 이것은 단지 코딩의 예제일 뿐입니다.
     */
    public function addTuningAMG()
    {
    }
}
