.. DesignPatternsPHP

=================================
디자인패턴PHP (DesignPatternsPHP)
=================================

.. image:: https://readthedocs.org/projects/designpatternsphp/badge/?version=latest
   :target: https://readthedocs.org/projects/designpatternsphp/?badge=latest
   :alt: Documentation Status

이 문서는 일반적으로 디자인패턴(`Design Pattern`_)이라고 알려진 내용을 다루며, PHP에서 어떻게 구현해야하는지 샘플
코드를 담고 있습니다. 모든 패턴은 조금이나마 예제를 다루고 있습니다. (그리고 그 예제의 대부분은 사용하기에 친근한 Zend
Framework, Symfony2, Doctrine2에서 가져왔습니다.)

디자인 패턴에서의 문제는 종종 사람들은 그것들을 알지만 정작 언제 적용해야하는지 모른다는 것입니다.

디자인패턴
------

이 문서에서는 디자인패턴을 크게 3가지의 다른 카테고리로 분류하였습니다. 위키피디아(Wikipedia)에 설명되어있는 디자인 패턴은 **각각의 문서의 제목**을 클릭하시면 읽으실 수 있습니다.

(역자 : 디자인 패턴의 이름은 병행 표기하였습니다. :smile:)

.. toctree::
   :titlesonly:
   :numbered:

   Creational/README
   Structural/README
   Behavioral/README
   More/README

Contribute
----------

Please feel free to fork and extend existing or add your own examples
and send a pull request with your changes! To establish a consistent
code quality, please check your code using
`PHP CodeSniffer`_ against `PSR2 standard`_
using ``./vendor/bin/phpcs -p --standard=PSR2 --ignore=vendor .``.

License
-------

(The MIT License)

Copyright (c) 2014 `Dominik Liebler`_ and `contributors`_

Permission is hereby granted, free of charge, to any person obtaining a
copy of this software and associated documentation files (the
'Software'), to deal in the Software without restriction, including
without limitation the rights to use, copy, modify, merge, publish,
distribute, sublicense, and/or sell copies of the Software, and to
permit persons to whom the Software is furnished to do so, subject to
the following conditions:

The above copyright notice and this permission notice shall be included
in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED 'AS IS', WITHOUT WARRANTY OF ANY KIND, EXPRESS
OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF
MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT.
IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY
CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT,
TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE
SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.

.. _`Design Pattern`: http://en.wikipedia.org/wiki/Software_design_pattern
.. _`PHP CodeSniffer`: https://github.com/squizlabs/PHP_CodeSniffer
.. _`PSR2 standard`: https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-2-coding-style-guide.md
.. _`Dominik Liebler`: https://github.com/domnikl
.. _`contributors`: https://github.com/domnikl/DesignPatternsPHP/graphs/contributors
