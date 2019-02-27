<?php


namespace Renzhifan\DesignPatterns\Decorator;


class Sausage extends Decorator
{
    public function name()
    {
        // TODO: Implement name() method.
        return $this->food->name() . '+肠';
    }
    public function price()
    {
        // TODO: Implement price() method.
        return $this->food->price() + 2;
    }
}