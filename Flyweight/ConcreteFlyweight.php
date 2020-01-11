<?php


namespace Renzhifan\DesignPatterns\Flyweight;


class ConcreteFlyweight extends Flyweight
{
    /**
     * @param $content
     */
    public function show($content)
    {
        echo '共享的享元：' . $this->name . $content . '<br>';
    }
}

