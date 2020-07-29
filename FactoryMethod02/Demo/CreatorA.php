<?php


namespace Renzhifan\DesignPatterns\FactoryMethod02\Demo;


class CreatorA extends Creator
{
    // 实现操作方法
    protected function FactoryMethod()
    {
        return new ProductA();
    }
}