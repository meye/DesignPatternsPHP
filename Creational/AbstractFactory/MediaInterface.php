<?php

namespace DesignPatterns\Creational\AbstractFactory;

/**
 * Interface MediaInterface
 *
 * 이 인터페이스는 패턴의 구성 성분이 아니고, 각각의 구성요소는 서로 연관성이 없습니다.
 */
interface MediaInterface
{

    /**
     * JSON의 출력 일부분 또는, html의 출력 일부분을 가감없이 렌더링합니다. (추상 클래스에 의존)
     *
     * @return string
     */
    public function render();
}
