<?php

namespace DesignPatterns\Creational\FactoryMethod;

/**
 * class FactoryMethod
 */
abstract class FactoryMethod
{

    const CHEAP = 1;
    const FAST = 2;

    /**
     * 클래스의 자식들은 메서드들을 구현해야 합니다.
     * 
     * 메서드는 떄때로 "근본적인(raw)" 객체를 얻기 위해 public이 되어야 합니다.
     * 
     * @param string $type a generic type
     *
     * @return VehicleInterface a new vehicle
     */
    abstract protected function createVehicle($type);

    /**
     * Creates a new vehicle
     *
     * @param int $type
     *
     * @return VehicleInterface a new vehicle
     */
    public function create($type)
    {
        $obj = $this->createVehicle($type);
        $obj->setColor("#f00");

        return $obj;
    }
}
