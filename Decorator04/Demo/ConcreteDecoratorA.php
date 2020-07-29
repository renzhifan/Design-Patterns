<?php


namespace Renzhifan\DesignPatterns\Decorator04\Demo;


class ConcreteDecoratorA extends Decorator
{
    public $addedState = 1; // 没什么实际意义的属性，只是区别于ConcreteDecoratorB

    public function operation()
    {
        echo $this->component->operation() . "Push " . $this->addedState . " cream！" . PHP_EOL;
    }
}