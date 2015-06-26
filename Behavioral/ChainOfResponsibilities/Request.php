<?php

namespace DesignPatterns\Behavioral\ChainOfResponsibilities;

/**
 * Request 는 책임 연결 고리를 통과하는 요청입니다.
 *
 * 요청에 대하여: 때로는 객체가 필요없어서 그냥 정수나 배열을 사용할 겁니다.
 * 하지만, 이 예제의 경우에는 CoR (Chain of Responsibilities)의 중요한 개념을
 * 설명하기 위해서 클래스를 만들었습니다. 실전에서는 \stdClass라도 항상 클래스를
 * 사용하는 것을 권장합니다. 그러는 것이 좀 더 적응성이 있다고 증명할 수 있는데,
 * 단일 핸들러는 외부 세계에 대해서 잘 알지 못하고, 언젠가 결정 과정에 어떤
 * 기준을 추가하고 싶더라도 어렵기 때문입니다.
 */
class Request
{
    // getter와 setter. 하지만 핸들러를 너무 번잡하게 만들고 싶지는 않습니다.
}
