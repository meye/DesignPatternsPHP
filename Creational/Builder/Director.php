<?php

namespace DesignPatterns\Creational\Builder;

/**
 * Director는 builder 패턴의 일부분입니다. Director는 builder 인터페이스를 알고 있으며, builder의 도움으로 복잡한 객체를 구축합니다.
 *
 * 당신은 또한 하나 이상의 복잡한 객체들을 구현하는 대신 믾은 builder들을 집어넣을 수 있습니다.
 */
class Director
{

    /**
     * director는 구체적인 부분에 대해 알 수 없습니다.
     *
     * @param BuilderInterface $builder
     *
     * @return Parts\Vehicle
     */
    public function build(BuilderInterface $builder)
    {
        $builder->createVehicle();
        $builder->addDoors();
        $builder->addEngine();
        $builder->addWheel();

        return $builder->getVehicle();
    }
}
