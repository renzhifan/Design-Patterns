<?php


namespace Renzhifan\DesignPatterns\SimpleFactory;


class Mul extends Operation
{
    public function getResult()
    {
        // TODO: Implement getResult() method.
        return $this->numberA * $this->numberB;
    }
}