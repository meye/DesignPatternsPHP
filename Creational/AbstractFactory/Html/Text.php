<?php

namespace DesignPatterns\Creational\AbstractFactory\Html;

use DesignPatterns\Creational\AbstractFactory\Text as BaseText;

/**
 * Class Text
 *
 * Text 는 HTML 렌더링을 위한 구체적인 글자들 입니다.
 */
class Text extends BaseText
{
    /**
     * HTML의 출력 일부분을 가감없이 렌더링합니다.
     *
     * @return string
     */
    public function render()
    {
        return '<div>' . htmlspecialchars($this->text) . '</div>';
    }
}
