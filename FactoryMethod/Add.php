<?php


namespace Renzhifan\DesignPatterns\FactoryMethod;


class Add extends Operation
{
    public function getResult():int
    {
        // TODO: Implement getResult() method.
        return $this->numberA + $this->numberB;
    }
}