<?php

namespace DesignPatterns\Creational\AbstractFactory\Json;

use DesignPatterns\Creational\AbstractFactory\Text as BaseText;

/**
 * Class Text
 *
 * Text 는 JSON 렌더링을 위한 구체적인 글자들 입니다.
 */
class Text extends BaseText
{
    /**
     * JSON의 출력 일부분을 가감없이 렌더링합니다.
     *
     * @return string
     */
    public function render()
    {
        return json_encode(array('content' => $this->text));
    }
}
