<?php

namespace DesignPatterns\Creational\SimpleFactory;

/**
 * class ConcreteFactory
 */
class ConcreteFactory
{
    /**
     * @var array
     */
    protected $typeList;

    /**
     * 사용자는 기본 값에 자신이 가진 list 타입을 주입하거나, 합칠 것이라고 상상할 수 있다. 
     */
    public function __construct()
    {
        $this->typeList = array(
            'bicycle' => __NAMESPACE__ . '\Bicycle',
            'other' => __NAMESPACE__ . '\Scooter'
        );
    }

    /**
     * Creates a vehicle
     *
     * @param string $type a known type key
     *
     * @return VehicleInterface a new instance of VehicleInterface
     * @throws \InvalidArgumentException
     */
    public function createVehicle($type)
    {
        if (!array_key_exists($type, $this->typeList)) {
            throw new \InvalidArgumentException("$type is not valid vehicle");
        }
        $className = $this->typeList[$type];

        return new $className();
    }
}
