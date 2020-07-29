<?php


namespace Renzhifan\DesignPatterns\AbstractFactory03\Example;


class BaiduYunFactory implements MessageFactory
{
    public function createMessage()
    {
        return new BaiduYunMessage();
    }

    public function createPush()
    {
        return new BaiduYunPush();
    }
}