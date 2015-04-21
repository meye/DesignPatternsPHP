# 디자인패턴PHP (DesignPatternsPHP)

[![Build Status](https://travis-ci.org/domnikl/DesignPatternsPHP.png?branch=master)](https://travis-ci.org/domnikl/DesignPatternsPHP)

[한국어 DesignPatternsPHP 읽기(준비중)](http://designpatternsphpko.readthedocs.org)
or [PDF/Epub으로 다운로드(준비중)](https://readthedocsko.org/projects/designpatternsphp/downloads/)

[Read the Docs of DesignPatternsPHP](http://designpatternsphp.readthedocs.org)
or [Download as PDF/Epub](https://readthedocs.org/projects/designpatternsphp/downloads/)

이 문서는 일반적으로 디자인패턴(`Design Pattern`_)이라고 알려진 내용을 다루며, PHP에서 어떻게 구현해야하는지 샘플
코드를 담고 있습니다. 모든 패턴은 조금이나마 예제를 다루고 있습니다. (그리고 그 예제의 대부분은 사용하기에 친근한 Zend Framework, Symfony2, Doctrine2에서 가져왔습니다.)

디자인 패턴에서의 문제는 종종 사람들은 그것들을 알지만 정작 언제 적용해야하는지 모른다는 것입니다.

## 디자인패턴

이 문서에서는 디자인패턴을 크게 3가지의 다른 카테고리로 분류하였습니다. 위키피디아(Wikipedia)에 설명되어있는 전체 디자인 패턴은 [여기:notebook:](http://en.wikipedia.org/wiki/Software_design_pattern)에서 읽으실 수 있습니다.

(역자 : 디자인 패턴의 이름은 병행 표기하였습니다. :smile:)

### [생성 패턴(Creational)](Creational)

* [추상팩토리(AbstractFactory)](Creational/AbstractFactory) [:notebook:](http://en.wikipedia.org/wiki/Abstract_factory_pattern)
* [빌더(Builder)](Creational/Builder) [:notebook:](http://en.wikipedia.org/wiki/Builder_pattern)
* [팩토리메소드(FactoryMethod)](Creational/FactoryMethod) [:notebook:](http://en.wikipedia.org/wiki/Factory_method_pattern)
* [멀티턴(Multiton)](Creational/Multiton) (is considered an anti-pattern! :no_entry:)
* [풀(Pool)](Creational/Pool) [:notebook:](http://en.wikipedia.org/wiki/Object_pool_pattern)
* [프로토타입(Prototype)](Creational/Prototype) [:notebook:](http://en.wikipedia.org/wiki/Prototype_pattern)
* [팩토리(SimpleFactory)](Creational/SimpleFactory)
* [싱글턴(Singleton)](Creational/Singleton) [:notebook:](http://en.wikipedia.org/wiki/Singleton_pattern) (is considered an anti-pattern! :no_entry:)
* [정적팩토리(StaticFactory)](Creational/StaticFactory)

### [구조 패턴(Structural)](Structural)

* [Adapter](Structural/Adapter) [:notebook:](http://en.wikipedia.org/wiki/Adapter_pattern)
* [Bridge](Structural/Bridge) [:notebook:](http://en.wikipedia.org/wiki/Bridge_pattern)
* [Composite](Structural/Composite) [:notebook:](http://en.wikipedia.org/wiki/Composite_pattern)
* [DataMapper](Structural/DataMapper) [:notebook:](http://en.wikipedia.org/wiki/Data_mapper_pattern)
* [Decorator](Structural/Decorator) [:notebook:](http://en.wikipedia.org/wiki/Decorator_pattern)
* [DependencyInjection](Structural/DependencyInjection) [:notebook:](http://en.wikipedia.org/wiki/Dependency_injection)
* [파사드(Facade)](Structural/Facade) [:notebook:](http://en.wikipedia.org/wiki/Facade_pattern)
* [FluentInterface](Structural/FluentInterface) [:notebook:](http://en.wikipedia.org/wiki/Fluent_interface)
* [Proxy](Structural/Proxy) [:notebook:](http://en.wikipedia.org/wiki/Proxy_pattern)
* [Registry](Structural/Registry) [:notebook:](http://en.wikipedia.org/wiki/Service_locator_pattern)

### [행동 패턴(Behavioral)](Behavioral)

* [ChainOfResponsibilities](Behavioral/ChainOfResponsibilities) [:notebook:](http://en.wikipedia.org/wiki/Chain_of_responsibility_pattern)
* [Command](Behavioral/Command) [:notebook:](http://en.wikipedia.org/wiki/Command_pattern)
* [Iterator](Behavioral/Iterator) [:notebook:](http://en.wikipedia.org/wiki/Iterator_pattern)
* [Mediator](Behavioral/Mediator) [:notebook:](http://en.wikipedia.org/wiki/Mediator_pattern)
* [Memento](Behavioral/Memento) [:notebook:](http://en.wikipedia.org/wiki/Memento_pattern)
* [NullObject](Behavioral/NullObject) [:notebook:](http://en.wikipedia.org/wiki/Null_Object_pattern)
* [Observer](Behavioral/Observer) [:notebook:](http://en.wikipedia.org/wiki/Observer_pattern)
* [Specification](Behavioral/Specification) [:notebook:](http://en.wikipedia.org/wiki/Specification_pattern)
* [State](Behavioral/State) [:notebook:](http://en.wikipedia.org/wiki/State_pattern)
* [Strategy](Behavioral/Strategy) [:notebook:](http://en.wikipedia.org/wiki/Strategy_pattern)
* [TemplateMethod](Behavioral/TemplateMethod) [:notebook:](http://en.wikipedia.org/wiki/Template_method_pattern)
* [Visitor](Behavioral/Visitor) [:notebook:](http://en.wikipedia.org/wiki/Visitor_pattern)

### [그외..](More)
* [Delegation](More/Delegation) [:notebook:](http://en.wikipedia.org/wiki/Delegation_pattern)
* [ServiceLocator](More/ServiceLocator) [:notebook:](http://en.wikipedia.org/wiki/Service_locator_pattern)
* [Repository](More/Repository)

## Contribute

Please feel free to fork and extend existing or add your own examples and send a pull request with your changes!
To establish a consistent code quality, please check your code using [PHP_CodeSniffer](https://github.com/squizlabs/PHP_CodeSniffer) against [PSR2 standard](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-2-coding-style-guide.md) using `./vendor/bin/phpcs -p --standard=PSR2 --ignore=vendor .`.

## License

(The MIT License)

Copyright (c) 2014 Dominik Liebler and [contributors](https://github.com/domnikl/DesignPatternsPHP/graphs/contributors)

Permission is hereby granted, free of charge, to any person obtaining
a copy of this software and associated documentation files (the
'Software'), to deal in the Software without restriction, including
without limitation the rights to use, copy, modify, merge, publish,
distribute, sublicense, and/or sell copies of the Software, and to
permit persons to whom the Software is furnished to do so, subject to
the following conditions:

The above copyright notice and this permission notice shall be
included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED 'AS IS', WITHOUT WARRANTY OF ANY KIND,
EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF
MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT.
IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY
CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT,
TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE
SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
