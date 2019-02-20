<?php


namespace Renzhifan\DesignPatterns\SimpleFactory;


abstract class Operation
{
    protected $numberA=0;
    protected $numberB=0;
    abstract public function getResult();
    public function setNumberA($number)
    {
        $this->numberA=$number;
    }
    public function setNumberB($number)
    {
        $this->numberB=$number;
    }
}