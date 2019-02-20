<?php


namespace Renzhifan\DesignPatterns\SimpleFactory;


class Add extends Operation
{
    public function getResult():int
    {
        // TODO: Implement getResult() method.
        return $this->numberA + $this->numberB;
    }
}