<?php


namespace Renzhifan\DesignPatterns\AbstractFactory03\Demo;


class ProductB1 implements AbstractProductB
{
    public function show()
    {
        echo 'ProductB1 is Show!' . PHP_EOL;
    }
}