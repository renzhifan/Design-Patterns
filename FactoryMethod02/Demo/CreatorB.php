<?php


namespace Renzhifan\DesignPatterns\FactoryMethod02\Demo;


class CreatorB extends Creator
{
    protected function FactoryMethod()
    {
        return new ProductB();
    }
}