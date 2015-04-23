빌더(`Builder`_)
================

사용 목적
---------

빌더는 복잡한 객체의 일부를 생성하는 인터페이스 입니다.

때때로, 빌더는 그것에 대해 더 명확한 정보(Knowledge)를 가질 때, 해당 인터페이스는 기본 매서드(일명 Adapter)를 가진
추상클래스가 됩니다.

만약 객체들에 복잡한 상속 트리가 있는 경우에, 빌더 또한 복잡한 상속 트리를 가져야 마땅합니다.

Note: 빌더들은 보통 유연한 인터페이스를 가지는데, PHPUnit의 mock builder가 그 예 입니다.

예시
----

-  PHPUnit: Mock Builder

UML 다이어그램
--------------

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
------

Tests/DirectorTest.php

.. literalinclude:: Tests/DirectorTest.php
   :language: php
   :linenos:

.. _`GitHub`: https://github.com/domnikl/DesignPatternsPHP/tree/master/Creational/Builder
.. _`Builder`: http://en.wikipedia.org/wiki/Builder_pattern
