정적팩토리(Static Factory)
==========================

사용 목적
---------

이 패턴은 추상 팩토리와 유사하고, 종속 객체들이나 연관된 집합을 만드는데 사용합니다. 이 패턴과 추상 팩토리 패턴 사이의
차이점은 정적 팩토리 패턴은 만들 수 있는 모든 타입의 객체를 만드는 오직 단 하나의 정적인 메서드를 사용한다는 것입니다.
이 패턴은 보통 ``factory`` 또는 ``build``라고 합니다.

예시
----

-  Zend Framework: ``Zend_Cache_Backend`` 또는 ``_Frontend``는 팩토리 메서드를 사용하고 캐시 백엔드 또는, 프론트엔드를 만듭니다.

UML 다이어그램
--------------

.. image:: uml/uml.png
   :alt: Alt StaticFactory UML Diagram
   :align: center

코드
----

코드는 또한 `GitHub`_ 에서 볼 수 있습니다.

StaticFactory.php

.. literalinclude:: StaticFactory.php
   :language: php
   :linenos:

FormatterInterface.php

.. literalinclude:: FormatterInterface.php
   :language: php
   :linenos:

FormatString.php

.. literalinclude:: FormatString.php
   :language: php
   :linenos:

FormatNumber.php

.. literalinclude:: FormatNumber.php
   :language: php
   :linenos:

테스트
------

Tests/StaticFactoryTest.php

.. literalinclude:: Tests/StaticFactoryTest.php
   :language: php
   :linenos:

.. _`GitHub`: https://github.com/domnikl/DesignPatternsPHP/tree/master/Creational/StaticFactory
