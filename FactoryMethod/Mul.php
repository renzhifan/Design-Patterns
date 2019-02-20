<?php


namespace Renzhifan\DesignPatterns\FactoryMethod;


class Mul extends Operation
{
    public function getResult()
    {
        // TODO: Implement getResult() method.
        return $this->numberA * $this->numberB;
    }
}