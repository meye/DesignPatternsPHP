`Prototype`_
============

사용 목적
---------

일반적으로 사용하는 객체 생성(new Foo())의 비용을 피하기 위해서 사용합니다. 그리고 그 대신에 프로토타입을 생성하고
그것을 복제(clone)합니다.

예시
----

-  많은 양의 데이터. (이를테면, ORM을 통해 데이터베이스에서 한번에 1,000,000줄을 생성할 때.)

UML 다이어그램
--------------

.. image:: uml/uml.png
   :alt: Alt Prototype UML Diagram
   :align: center

코드
----

코드는 또한 `GitHub`_ 에서 볼 수 있습니다.

index.php

.. literalinclude:: index.php
   :language: php
   :linenos:

BookPrototype.php

.. literalinclude:: BookPrototype.php
   :language: php
   :linenos:

BarBookPrototype.php

.. literalinclude:: BarBookPrototype.php
   :language: php
   :linenos:

FooBookPrototype.php

.. literalinclude:: FooBookPrototype.php
   :language: php
   :linenos:

테스트
----

.. _`GitHub`: https://github.com/domnikl/DesignPatternsPHP/tree/master/Creational/Prototype
.. _`Prototype`: http://en.wikipedia.org/wiki/Prototype_pattern
