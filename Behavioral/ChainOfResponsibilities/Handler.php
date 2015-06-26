<?php

namespace DesignPatterns\Behavioral\ChainOfResponsibilities;

/**
 * Handler는 책임 연결 고리의 일반적인 핸들러입니다.
 *
 * 단순한 핸들러로 더 가벼운 CoR을 만들 수 있습니다만, CoR이 확장가능하고,
 * 결합도를 낮추고 싶다면 실전에서는 이렇게 하는 것이 낫습니다. 일반적으로,
 * CoR은 항상 변화하고 발전한다고 여겨지며, 그것이 바로 우리가 조금의 코드에서
 * 흐름을 자르는 이유입니다.
 */
abstract class Handler
{
    /**
     * @var Handler
     */
    private $successor = null;

    /**
     * 연결 고리의 끝에 책임을 추가합니다.
     *
     * 동일한 생각에서 앞쪽에 추가하는 방법도 가능합니다.
     *
     * 생성자에 다음 처리자(successor)를 전달할 수 있지만, 마지막 핸들러는 null
     * 처리자를 갖기 때문에 매개변수에 타입-힌트를 사용할 수 없습니다. 따라서,
     * PHP에서는 좋은 생각이 아닙니다.
     *
     * 그리고 생성자를 오버라이드한다면, 그 Handler는 다음 처리자를
     * 갖지 않게됩니다. 해결 방법 한가지는 NullObject를 제공하는 것입니다.
     * (패턴 참고) 생성자를 "자유롭게" 두고 symfony2의 DiC와 같은 것으로 필요한
     * 서비스를 주입하는 것이 더 낫습니다.
     *
     * @param Handler $handler
     */
    final public function append(Handler $handler)
    {
        if (is_null($this->successor)) {
            $this->successor = $handler;
        } else {
            $this->successor->append($handler);
        }
    }

    /**
     * 요청을 처리(handle)합니다.
     *
     * 템플릿 메소드 패턴을 사용한 이런 방법은 각 서브 클래스들이 다음 처리자를
     * 호출하는 것을 잊지 않도록 합니다. 그리고, 반환되는 부울 값은 요청이
     * 처리되었는지 여부를 알려줍니다.
     *
     * @param Request $req
     *
     * @return bool
     */
    final public function handle(Request $req)
    {
        $req->forDebugOnly = get_called_class();
        $processed = $this->processing($req);
        if (!$processed) {
            // 요청이 이 핸들러에 의해서 처리되지 않았습니다. => 다음 핸들러를 봅니다.
            if (!is_null($this->successor)) {
                $processed = $this->successor->handle($req);
            }
        }

        return $processed;
    }

    /**
     * 각각의 실제 핸들러는 요청을 처리하는 것을 구현해야 합니다.
     *
     * @param Request $req
     *
     * @return bool 요청이 처리되었다면 true
     */
    abstract protected function processing(Request $req);
}
