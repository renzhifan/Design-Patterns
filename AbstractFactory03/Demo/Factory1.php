<?php


namespace Renzhifan\DesignPatterns\AbstractFactory03\Demo;


class Factory1 implements AbstractFactory
{
    public function CreateProductA()
    {
        return new ProductA1();
    }
    public function CreateProductB()
    {
        return new ProductB1();
    }
}