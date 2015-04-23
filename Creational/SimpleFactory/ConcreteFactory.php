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
     * 너만의 타입을 새로 주입할수도 있고,
     * 기본값과 합쳐서 사용할 수 있습니다.
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
     * @param string $type 알고있는 타입값
     *
     * @return VehicleInterface VehicleInterface를 구현하여 생성된 인스턴스
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
