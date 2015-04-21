`Builder`_
==========

사용 목적
-------

Builder는 복잡한 객체의 일부를 구현 하는 인터페이스 입니다.

builder가 어떻게 구현한 것들 보다 더 나은 지식을 가지며, 때때로 이 인터페이스는 기본 메소드(일명 adapter)와 추상 클래스가 될 수 있습니다.

만약 객체들에 복잡한 상속 트리가 있는 경우에는 구현해 놓은 결과물들을 위해 복잡한 상속 트리를 가졌다는 것이 논리적이다.

Note: Builder들은 보통 유동적인 인터페이스를 가지는데, PHPUnit의 mock builder가 그 예 입니다.

예
--------

-  PHPUnit: Mock Builder

UML 다이어그램
-----------

.. image:: uml/uml.png
   :alt: Alt Builder UML Diagram
   :align: center

코드
----

코드는 또한 `GitHub`_ 에서 볼 수 있습니다.

Director.php

.. literalinclude:: Director.php
   :language: php
   :linenos:

BuilderInterface.php

.. literalinclude:: BuilderInterface.php
   :language: php
   :linenos:

BikeBuilder.php

.. literalinclude:: BikeBuilder.php
   :language: php
   :linenos:

CarBuilder.php

.. literalinclude:: CarBuilder.php
   :language: php
   :linenos:

Parts/Vehicle.php

.. literalinclude:: Parts/Vehicle.php
   :language: php
   :linenos:

Parts/Bike.php

.. literalinclude:: Parts/Bike.php
   :language: php
   :linenos:

Parts/Car.php

.. literalinclude:: Parts/Car.php
   :language: php
   :linenos:

Parts/Engine.php

.. literalinclude:: Parts/Engine.php
   :language: php
   :linenos:

Parts/Wheel.php

.. literalinclude:: Parts/Wheel.php
   :language: php
   :linenos:

Parts/Door.php

.. literalinclude:: Parts/Door.php
   :language: php
   :linenos:

테스트
----

Tests/DirectorTest.php

.. literalinclude:: Tests/DirectorTest.php
   :language: php
   :linenos:

.. _`GitHub`: https://github.com/domnikl/DesignPatternsPHP/tree/master/Creational/Builder
.. _`Builder`: http://en.wikipedia.org/wiki/Builder_pattern
