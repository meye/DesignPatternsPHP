<?php

namespace DesignPatterns\Creational\AbstractFactory;

/**
 * Class JsonFactory
 *
 * JsonFactory는 JSON 구성요소에 대한 추상 팩토리 입니다. (예를 들어 ajax와 같은..)
 */
class JsonFactory extends AbstractFactory
{

    /**
     * Creates a picture component
     *
     * @param string $path
     * @param string $name
     *
     * @return Json\Picture|Picture
     */
    public function createPicture($path, $name = '')
    {
        return new Json\Picture($path, $name);
    }

    /**
     * Creates a text component
     *
     * @param string $content
     *
     * @return Json\Text|Text
     */
    public function createText($content)
    {
        return new Json\Text($content);
    }
}
