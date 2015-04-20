<?php

namespace DesignPatterns\Creational\AbstractFactory\Html;

use DesignPatterns\Creational\AbstractFactory\Picture as BasePicture;

/**
 * Class Picture
 *
 * Picture 는 HTML 렌더링을 위한 구체적인 이미지 입니다.
 */
class Picture extends BasePicture
{
    /**
     * HTML의 출력 일부분을 가감없이 렌더링합니다.
     *
     * @return string
     */
    public function render()
    {
        return sprintf('<img src="%s" title="%s"/>', $this->path, $this->name);
    }
}
