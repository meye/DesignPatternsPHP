팩토리메소드(`Factory Method`_)
===============================

사용 목적
---------

SimpleFactory를 통해 좋은점은 서브클래스가 객체를 여러 방법으로 구현할 수 있다는 것 입니다.

간단한 예로는, 이 추상 클래스는 인터페이스가 될 수 있다는 것입니다.

이 패턴은 "real" 디자인 패턴 입니다. 왜냐하면 S.O.L.I.D 원리에서 "D", 일명 "역 의존성 원리"를 달성해야 하기 때문입니다.

이 말은 FactoryMethod 클래스는 구체적인 클래스가 아닌, 추상화에 따른다는 것입니다. 이것은 SimpleFactory나 StaticFactory에 비하면 진짜
기술입니다.

UML 다이어그램
--------------

.. image:: uml/uml.png
   :alt: Alt FactoryMethod UML Diagram
   :align: center

코드
----

코드는 또한 `GitHub`_ 에서 볼 수 있습니다.

FactoryMethod.php

.. literalinclude:: FactoryMethod.php
   :language: php
   :linenos:

ItalianFactory.php

.. literalinclude:: ItalianFactory.php
   :language: php
   :linenos:

GermanFactory.php

.. literalinclude:: GermanFactory.php
   :language: php
   :linenos:

VehicleInterface.php

.. literalinclude:: VehicleInterface.php
   :language: php
   :linenos:

Porsche.php

.. literalinclude:: Porsche.php
   :language: php
   :linenos:

Bicycle.php

.. literalinclude:: Bicycle.php
   :language: php
   :linenos:

Ferrari.php

.. literalinclude:: Ferrari.php
   :language: php
   :linenos:

테스트
------

Tests/FactoryMethodTest.php

.. literalinclude:: Tests/FactoryMethodTest.php
   :language: php
   :linenos:

.. _`GitHub`: https://github.com/domnikl/DesignPatternsPHP/tree/master/Creational/FactoryMethod
.. _`Factory Method`: http://en.wikipedia.org/wiki/Factory_method_pattern
