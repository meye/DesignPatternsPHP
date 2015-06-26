<?php

namespace DesignPatterns\Behavioral\ChainOfResponsibilities\Responsible;

use DesignPatterns\Behavioral\ChainOfResponsibilities\Handler;
use DesignPatterns\Behavioral\ChainOfResponsibilities\Request;

/**
 * Class FastStorage
 */
class FastStorage extends Handler
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
                // 핸들러에 책임이 있으면 요청을 처리합니다.
                $req->response = $this->data[$req->key];
                // true를 리턴하는 대신 해당 값을 리턴할 수 있지만,
                // 그것은 좋은 생각이 아닙니다. 만약 값이 "false"인 경우라면?
                return true;
            }
        }

        return false;
    }
}
