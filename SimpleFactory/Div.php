<?php


namespace Renzhifan\DesignPatterns\SimpleFactory;


class Div extends Operation
{
    public function getResult()
    {
        // TODO: Implement getResult() method.
        if ($this->numberB == 0) {
            throw new \InvalidArgumentException('除数不能为0');
        }
        return $this->numberA / $this->numberB;
    }
}