<?php

namespace DesignPatterns\Creational\Pool;

class Worker
{

    public function __construct()
    {
        // 생성자가 정말 비싼일을 한다고 가정해보자.
        // 예를들면 "스레드"를 생성한다던가.
    }

    public function run($image, array $callback)
    {
        // $image를 가지고 어떤 처리를 실행.
        // 끝나면 callback을 실행.
        call_user_func($callback, $this);
    }
}
