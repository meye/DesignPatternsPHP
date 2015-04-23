<?php

namespace DesignPatterns\Creational\Builder;

/**
 * Director는 빌더 패턴의 일부분입니다. Director는 빌더 인터페이스를 알고 있으며, 빌더의 도움으로 복잡한 객체를
 * 구축합니다.
 *
 * 또한, 더 복잡한 객체들을 만드는 것 대신에 믾은 빌더들을 주입할 수 있습니다.
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
