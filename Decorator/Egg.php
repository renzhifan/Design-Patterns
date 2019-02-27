<?php


namespace Renzhifan\DesignPatterns\Decorator;


class Egg extends Decorator
{
    public function name()
    {
        // TODO: Implement name() method.
        return $this->food->name().'+蛋';
    }
    public function price()
    {
        // TODO: Implement price() method.
        return $this->food->price() +1;
    }
}