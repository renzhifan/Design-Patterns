<?php


namespace Renzhifan\DesignPatterns\SimpleFactory;


class Sub extends Operation
{
    public function getResult():int
    {
        // TODO: Implement getResult() method.
        return $this->numberA-$this->numberB;
    }
}