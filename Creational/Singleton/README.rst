싱글턴(`Singleton`_)
====================

**더 나은 테스트의 용이성과 의존성 주입을 사용한 유지 보수성을 위해 안티-패턴이 될 것인지 고려했습니다.**

사용 목적
---------

어플리케이션에서 오직 하나의 객체 인스턴스를 가지고 모든 이벤트를 처리하는 것입니다.

예시
----

-  DB Connector
-  Logger (여러 목적을 위해 많은 로그파일 있는 경우, multiton 패턴일 수 있습니다.)
-  Lock file for the application (파일시스템은 하나만 존재합니다
   ...)

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
