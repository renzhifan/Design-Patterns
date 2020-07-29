<?php


namespace Renzhifan\DesignPatterns\Decorator04\Demo;


class ConcreteDecoratorB extends Decorator
{
    public function operation()
    {
        $this->component->operation();
        $this->addedBehavior();
    }

    // 没什么实际意义的方法，只是区别于ConcreteDecoratorA
    public function addedBehavior()
    {
        echo "Push 2 cream！" . PHP_EOL;
    }
}