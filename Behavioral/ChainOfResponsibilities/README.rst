책임 연쇄 패턴(`Chain Of Responsibilities`_)
=============================================

사용 목적
---------

호출을 처리하기 위해서 순서대로 객체들의 연결 고리(Chain)를 만듭니다. 한 객체가
호출을 처리하지 못하면, 연결 고리의 다음 객체로 그 호출을 위임하기를 계속합니다.

예시
----

-  연결 고리의 각 요소가 자율적으로 로그 메시지로 무엇을 할지 결정하는 로깅 프레임워크(logging framework)
-  스팸 필터
-  캐시(Caching): 첫번째 객체는 예를 들어 Memcached 인터페이스의 인스턴스이고,
   이것이 "실패(misses)"하는 경우에는 데이터베이스 인터페이스에 이 호출을 위임합니다.
-  Yii Framework: CFilterChain은 컨트롤러 액션 필터들의 연결 고리입니다.
   실행 지점이 한 필터에서 연결 고리를 따라서 다음으로 전달되고,
   모든 필터들이 "예"라고 할 경우에만 해당 액션이 마지막에 수행됩니다.

UML 다이어그램
--------------

.. image:: uml/uml.png
   :alt: Alt ChainOfResponsibility UML Diagram
   :align: center

코드
----

코드는 `GitHub`_ 에서도 볼 수 있습니다.

Request.php

.. literalinclude:: Request.php
   :language: php
   :linenos:

Handler.php

.. literalinclude:: Handler.php
   :language: php
   :linenos:

Responsible/SlowStorage.php

.. literalinclude:: Responsible/SlowStorage.php
   :language: php
   :linenos:

Responsible/FastStorage.php

.. literalinclude:: Responsible/FastStorage.php
   :language: php
   :linenos:

테스트
------

Tests/ChainTest.php

.. literalinclude:: Tests/ChainTest.php
   :language: php
   :linenos:

.. _`GitHub`: https://github.com/domnikl/DesignPatternsPHP/tree/master/Behavioral/ChainOfResponsibilities
.. _`Chain Of Responsibilities`: http://en.wikipedia.org/wiki/Chain_of_responsibility_pattern
