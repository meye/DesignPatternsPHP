Simple Factory
==============

사용 목적
-------

ConcreteFactory는 simple factory 패턴입니다.

simple factory는 정적이지 않기 때문에 static factory와는 다릅니다.
숙지할 점: static => global => evil!

그러므로, 여러 팩토리들과, 다른 매개변수를 가지고 서브클래스를 만들거나, 모형(mock-up)을 만들 수 있습니다.

UML 다이어그램
-----------

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

Test
----

Tests/SimpleFactoryTest.php

.. literalinclude:: Tests/SimpleFactoryTest.php
   :language: php
   :linenos:

.. _`GitHub`: https://github.com/domnikl/DesignPatternsPHP/tree/master/Creational/SimpleFactory
