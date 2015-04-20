<?php

namespace DesignPatterns\Creational\Prototype;

$fooPrototype = new FooBookPrototype();
$barPrototype = new BarBookPrototype();

// 지금 10,000개의 foo 책 객체 그리고 5,000개의 bar를 필요하다면...
for ($i = 0; $i < 10000; $i++) {
    $book = clone $fooPrototype;
    $book->setTitle('Foo Book No ' . $i);
}

for ($i = 0; $i < 5000; $i++) {
    $book = clone $barPrototype;
    $book->setTitle('Bar Book No ' . $i);
}
