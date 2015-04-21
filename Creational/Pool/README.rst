풀(`Pool`_)
===========

**오브젝트 풀 패턴**은  소프트웨어 생성 패턴(Creational Patterns) 중 하나입니다. 객체들을 하나하나
할당(Allocating)하고 해제(Destroying)하기 보다는, 풀(Pool)을 이용하여 사용할 준비가 된 초기화된 객체들을 사용합니다.
풀의 사용자(Client)는 풀에서 객체를 요청하고, 반환된 객체를 이용해서 작업을 수행합니다. 그리고 사용자가 작업을 끝내면
그것을 해제(Destroy)하기 보다는 풀에 팩토리 객체의 특정 타입으로 된 객체를 반환합니다.

객체 풀링(Pooling)은 클래스를 초기화 하는 비용이 크고, 클래스의 인스턴스화 비율이 크고, 특정 시점에 사용중인
인스턴스의 숫자가 적을 때 성능향상을 제공합니다. 풀된 객체는 새로운 객체의 생성(특히 네트워크를 통해)이 다양한
시간(오래 걸리든, 짧게 걸리든)을 갖더라도, 예측가능한 시간을 얻을 수 있습니다.

그러나, 이러한 장점들은 시간상에서 비용이 큰 객체, 이를테면 데이터베이스 연결이나, 소켓 연결, 스레드나 폰트 혹은
비트맵과 같은 큰 그래픽 객체에 대해서는 사실입니다만, 특정 상황, 즉, 단순한 객체 풀링(외부 자원은 보유하지만, 전용
메모리를 차지하는)은 아마도 효과적이지 않을 수 있고 오히려 성능을 감소시킬 수 있습니다.

UML 다이어그램
-----------

.. image:: uml/uml.png
   :alt: Alt Pool UML Diagram
   :align: center

코드
----

코드는 또한 `GitHub`_ 에서 볼 수 있습니다.

Pool.php

.. literalinclude:: Pool.php
   :language: php
   :linenos:

Processor.php

.. literalinclude:: Processor.php
   :language: php
   :linenos:

Worker.php

.. literalinclude:: Worker.php
   :language: php
   :linenos:

Test
----

Tests/PoolTest.php

.. literalinclude:: Tests/PoolTest.php
   :language: php
   :linenos:

Tests/TestWorker.php

.. literalinclude:: Tests/TestWorker.php
   :language: php
   :linenos:

.. _`GitHub`: https://github.com/domnikl/DesignPatternsPHP/tree/master/Creational/Pool
.. _`Pool`: http://en.wikipedia.org/wiki/Object_pool_pattern
