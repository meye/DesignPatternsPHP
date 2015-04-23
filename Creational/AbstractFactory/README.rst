추상팩토리(`Abstract Factory`_)
===============================

사용 목적
---------

관계에 대한 집합 혹은 그들의 자신의 객체에 대한 서술 없이 의존된 객체를 생성하기 위해 사용합니다. 일반적으로 생성된
클래스들은 모두 같은 인터페이스를 구현해 만듭니다. 추상 팩토리의 사용자(Client)는 어떻게 객체가 만들어지는지 신경쓰지
않고, 단지 어떻게 동작되는지만 알면 됩니다.

UML 다이어그램
--------------

.. image:: uml/uml.png
   :alt: Alt AbstractFactory UML Diagram
   :align: center

코드
----

코드는 또한 `GitHub`_ 에서 볼 수 있습니다.

AbstractFactory.php

.. literalinclude:: AbstractFactory.php
   :language: php
   :linenos:

JsonFactory.php

.. literalinclude:: JsonFactory.php
   :language: php
   :linenos:

HtmlFactory.php

.. literalinclude:: HtmlFactory.php
   :language: php
   :linenos:

MediaInterface.php

.. literalinclude:: MediaInterface.php
   :language: php
   :linenos:

Picture.php

.. literalinclude:: Picture.php
   :language: php
   :linenos:

Text.php

.. literalinclude:: Text.php
   :language: php
   :linenos:

Json/Picture.php

.. literalinclude:: Json/Picture.php
   :language: php
   :linenos:

Json/Text.php

.. literalinclude:: Json/Text.php
   :language: php
   :linenos:

Html/Picture.php

.. literalinclude:: Html/Picture.php
   :language: php
   :linenos:

Html/Text.php

.. literalinclude:: Html/Text.php
   :language: php
   :linenos:

테스트
------

Tests/AbstractFactoryTest.php

.. literalinclude:: Tests/AbstractFactoryTest.php
   :language: php
   :linenos:

.. _`GitHub`: https://github.com/domnikl/DesignPatternsPHP/tree/master/Creational/AbstractFactory
.. _`Abstract Factory`: http://en.wikipedia.org/wiki/Abstract_factory_pattern
