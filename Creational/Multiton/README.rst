멀티턴(Multiton)
================

**안티패턴이 될 수 있기 때문에 사용에 고려해 보아야 합니다! 더 나은 테스트가능성(Testablity)와
유지가능성(Maintainability)를 위해서 의존성 주입(Dependency Injection)을 사용하세요!**

사용 목적
---------

사용중인 이름있는 인스턴스만을 리스트로 갖고 싶을 때 사용합니다. 싱글턴과 유사하지만 싱글턴은 1개의 인스턴스를,
멀티턴은 n개의 인스턴스를 갖는 다는 점이 다릅니다. 

예시
----

-  2개의 데이터베이스 커넥터. 이를테면 하나는 MySQL, 또다른 하나는 SQLite.
-  여러개의 로거(Logger). (하나는 디버그 메시지용, 또 하나는 에러처리용)

UML 다이어그램
--------------

.. image:: uml/uml.png
   :alt: Alt Multiton UML Diagram
   :align: center

코드
----

코드는 또한 `GitHub`_ 에서 볼 수 있습니다.

Multiton.php

.. literalinclude:: Multiton.php
   :language: php
   :linenos:

Test
----

.. _`GitHub`: https://github.com/domnikl/DesignPatternsPHP/tree/master/Creational/Multiton
