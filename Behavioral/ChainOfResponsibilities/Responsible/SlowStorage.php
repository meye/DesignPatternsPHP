<?php

namespace DesignPatterns\Behavioral\ChainOfResponsibilities\Responsible;

use DesignPatterns\Behavioral\ChainOfResponsibilities\Handler;
use DesignPatterns\Behavioral\ChainOfResponsibilities\Request;

/**
 * FastStorage와 코드가 거의 동일하지만, 사실은 크게 다를 수도 있습니다.
 *
 * CoR의 중요한 사실 하나: 연결 고리의 각 요소는 연결 고리 내에서 자신의 위치를
 * 가정해서는 안됩니다. 요청이 올 경우 예외를 발생하는 "ExceptionHandler"를
 * 만들지 않는 한, CoR은 요청이 처리되지 않더라도 아무 책임이 없습니다.
 *
 * 정말 연장할 수 있게 하려면, 각 핸들러는 그 뒤에 무엇이 있는지도 몰라야합니다.
 *
 */
class SlowStorage extends Handler
{
    /**
     * @var array
     */
    protected $data = array();

    /**
     * @param array $data
     */
    public function __construct($data = array())
    {
        $this->data = $data;
    }

    protected function processing(Request $req)
    {
        if ('get' === $req->verb) {
            if (array_key_exists($req->key, $this->data)) {
                $req->response = $this->data[$req->key];

                return true;
            }
        }

        return false;
    }
}
