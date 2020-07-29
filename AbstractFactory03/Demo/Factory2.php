<?php


namespace Renzhifan\DesignPatterns\AbstractFactory03\Demo;


class Factory2 implements AbstractFactory
{
    public function CreateProductA()
    {
        return new ProductA2();
    }

    public function CreateProductB()
    {
        return new ProductB2();
    }
}