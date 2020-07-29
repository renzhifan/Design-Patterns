<?php


namespace Renzhifan\DesignPatterns\FactoryMethod02\Example;


class BaiduYunFactory extends MessageFactory
{
    protected function factoryMethod()
    {
        return new BaiduYunMessage();
    }
}