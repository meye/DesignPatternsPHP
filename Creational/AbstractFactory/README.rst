`Abstract Factory`_
===================

사용 목적
-------

관계에 대한 집합을 만들거나, 의존성 없이 자신의 추상 클래스를 지정하게 해줍니다.일반적으로 생성된 클래스들은 모두 같은 인터페이스를 구현해 만듭니다. abstract factory의 클래스들은
어떻게 동작되는지 알고, 어떻게 객체가 어떻게 만들어지는지 상관하지 않습니다.

UML 다이어그램
-----------

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

Test
----

Tests/AbstractFactoryTest.php

.. literalinclude:: Tests/AbstractFactoryTest.php
   :language: php
   :linenos:

.. _`GitHub`: https://github.com/domnikl/DesignPatternsPHP/tree/master/Creational/AbstractFactory
.. _`Abstract Factory`: http://en.wikipedia.org/wiki/Abstract_factory_pattern
