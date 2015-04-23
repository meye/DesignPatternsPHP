싱글턴(`Singleton`_)
====================

**안티패턴이 될 수 있기 때문에 사용에 고려해 보아야 합니다! 더 나은 테스트가능성(Testablity)과
유지가능성(Maintainability)을 위해서 의존성 주입(Dependency Injection)을 사용하세요!**

사용 목적
---------

어플리케이션에서 오직 하나의 객체 인스턴스를 가지고 모든 이벤트를 처리합니다.

예시
----

-  DB 커넥터
-  Logger (여러 목적을 위해 많은 로그파일 있는 경우, multiton 패턴일 수 있습니다.)
-  어플리케이션의 락파일 (파일시스템은 하나만 존재합니다 ...)

UML 다이어그램
--------------

.. image:: uml/uml.png
   :alt: Alt Singleton UML Diagram
   :align: center

코드
----

코드는 또한 `GitHub`_ 에서 볼 수 있습니다.

Singleton.php

.. literalinclude:: Singleton.php
   :language: php
   :linenos:

테스트
------

Tests/SingletonTest.php

.. literalinclude:: Tests/SingletonTest.php
   :language: php
   :linenos:

.. _`GitHub`: https://github.com/domnikl/DesignPatternsPHP/tree/master/Creational/Singleton
.. _`Singleton`: http://en.wikipedia.org/wiki/Singleton_pattern
