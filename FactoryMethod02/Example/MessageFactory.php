<?php


namespace Renzhifan\DesignPatterns\FactoryMethod02\Example;


abstract class MessageFactory
{
    abstract protected function factoryMethod();

    public function getMessage()
    {
        return $this->factoryMethod();
    }
}