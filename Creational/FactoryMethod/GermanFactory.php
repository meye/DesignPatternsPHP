<?php

namespace DesignPatterns\Creational\FactoryMethod;

/**
 * GermanFactory is a vehicle factory in Germany
 */
class GermanFactory extends FactoryMethod
{
    /**
     * {@inheritdoc}
     */
    protected function createVehicle($type)
    {
        switch ($type) {
            case parent::CHEAP:
                return new Bicycle();
                break;
            case parent::FAST:
                $obj = new Porsche();
                // 우리는 클래스를 알고있기 때문에 우리가 원하는 구체적인 탈것을 특별하게 만들 수 있습니다.
                $obj->addTuningAMG();

                return $obj;
                break;
            default:
                throw new \InvalidArgumentException("$type is not a valid vehicle");
        }
    }
}
