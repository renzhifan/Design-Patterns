<?php


namespace Renzhifan\DesignPatterns\AbstractFactory03\Example;


class AliYunFactory implements MessageFactory
{
    public function createMessage()
    {
        return new AliYunMessage();
    }

    public function createPush()
    {
        return new AliYunPush();
    }
}