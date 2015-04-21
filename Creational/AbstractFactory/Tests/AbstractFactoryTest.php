<?php

namespace DesignPatterns\Creational\AbstractFactory\Tests;

use DesignPatterns\Creational\AbstractFactory\AbstractFactory;
use DesignPatterns\Creational\AbstractFactory\HtmlFactory;
use DesignPatterns\Creational\AbstractFactory\JsonFactory;

/**
 * AbstractFactoryTest로 전체적인 팩토리들을 테스트 합니다.
 */
class AbstractFactoryTest extends \PHPUnit_Framework_TestCase
{
    public function getFactories()
    {
        return array(
            array(new JsonFactory()),
            array(new HtmlFactory())
        );
    }

    /**
     * 이 메서드는 팩토리들을 사용하는데, 메서드에 주어진 팩토리를 신경쓰지 않고, 원하는데로 랜더링 하고 원하는 구성 요소를 만듭니다.
     *
     * @dataProvider getFactories
     */
    public function testComponentCreation(AbstractFactory $factory)
    {
        $article = array(
            $factory->createText('Lorem Ipsum'),
            $factory->createPicture('/image.jpg', 'caption'),
            $factory->createText('footnotes')
        );

        $this->assertContainsOnly('DesignPatterns\Creational\AbstractFactory\MediaInterface', $article);

        /**
         * Builder 패턴을 볼 시간입니다. 이 패턴은 주어진 Abstract 팩토리를 넘어 복잡한 객체 생성 문제를 도와줍니다.
         */
    }
}
