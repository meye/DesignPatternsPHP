<?php

namespace DesignPatterns\Creational\AbstractFactory;

/**
 * class AbstractFactory
 *
 * 때때로 GUI 라이브러리의 "Kit"라고 알려져 있습니다.
 *
 * 이 디자인 패턴은 구체적인 구성 요소를 생성해야하는 추상 서브클래스이기 때문에 역 의존성 원리를 이해해서
 * 구현해야합니다.
 *
 *
 * 이 예제는 추상 팩토리를 웹의 몇몇 구성 요소를 만들기 위해 사용하였습니다. 두 개의 구성요소 : Text와 Picture. 두가지
 * 방법으로 렌더링을 합니다. : HTML 또는 JSON
 *
 * 4개의 추상 클래스들은 웹으로 동작하기 때문에 클래스들의 (html page 또는 AJAX request와 같은 요청에 대한) 정확한
 * http response가 필요합니다.  
 */
abstract class AbstractFactory
{
    /**
     * Creates a text component
     *
     * @param string $content
     *
     * @return Text
     */
    abstract public function createText($content);

    /**
     * Creates a picture component
     *
     * @param string $path
     * @param string $name
     *
     * @return Picture
     */
    abstract public function createPicture($path, $name = '');
}
