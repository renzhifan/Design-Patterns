<?php


namespace Renzhifan\DesignPatterns\Decorator04\Demo;

require __DIR__ . '/../../vendor/autoload.php';

// 被装饰对象
$component = new ConcreteComponent();
$component->operation();

// 装饰第一层
$component = new ConcreteDecoratorA($component);
$component->operation();

// 装饰第二层
$component = new ConcreteDecoratorB($component);
$component->operation();

// ... 不断被装饰

// 直接一次全部装饰完
// 请把上方的三个$component->operation();注释掉再看看
/*$component2 = new ConcreteComponent();
$component2 = new ConcreteDecoratorA($component2);
$component2 = new ConcreteDecoratorB($component2);
$component2->operation();*/