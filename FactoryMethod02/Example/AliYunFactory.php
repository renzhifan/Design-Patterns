<?php


namespace Renzhifan\DesignPatterns\FactoryMethod02\Example;


class AliYunFactory extends MessageFactory
{
    protected function factoryMethod()
    {
        return new AliYunMessage();
    }
}