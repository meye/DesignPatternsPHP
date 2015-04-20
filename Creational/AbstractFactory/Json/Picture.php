<?php

namespace DesignPatterns\Creational\AbstractFactory\Json;

use DesignPatterns\Creational\AbstractFactory\Picture as BasePicture;

/**
 * Class Picture
 *
 * Picture 는 JSON 렌더링을 위한 구체적인 글자들 입니다.
 */
class Picture extends BasePicture
{
    /**
     * JSON의 출력 일부분을 가감없이 렌더링합니다.
     *
     * @return string
     */
    public function render()
    {
        return json_encode(array('title' => $this->name, 'path' => $this->path));
    }
}
