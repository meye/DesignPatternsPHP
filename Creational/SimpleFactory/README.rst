단순팩토리(Simple Factory)
==========================

사용 목적
---------

ConcreteFactory(코드에 언급된)는 단순팩토리입니다.

단순팩토리패턴은 정적이지 않기 때문에 정적팩토리패턴(Static Factory)과는 다릅니다.
참고: 정적(static) => 전역(global) => 좋지않음(evil)!

그러므로, 서로 다른 패러매터를 가진 여러개의 팩토리를 가질 수 있고, 이것의 상속된 클래스를 만들 수 있으며, 이것의
목업(mock-up)을 생성할 수 있습니다.

UML 다이어그램
--------------

.. image:: uml/uml.png
   :alt: Alt SimpleFactory UML Diagram
   :align: center

코드
----

코드는 또한 `GitHub`_ 에서 볼 수 있습니다.

ConcreteFactory.php

.. literalinclude:: ConcreteFactory.php
   :language: php
   :linenos:

VehicleInterface.php

.. literalinclude:: VehicleInterface.php
   :language: php
   :linenos:

Bicycle.php

.. literalinclude:: Bicycle.php
   :language: php
   :linenos:

Scooter.php

.. literalinclude:: Scooter.php
   :language: php
   :linenos:

테스트
------

Tests/SimpleFactoryTest.php

.. literalinclude:: Tests/SimpleFactoryTest.php
   :language: php
   :linenos:

.. _`GitHub`: https://github.com/domnikl/DesignPatternsPHP/tree/master/Creational/SimpleFactory
