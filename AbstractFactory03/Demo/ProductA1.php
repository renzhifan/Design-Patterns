<?php


namespace Renzhifan\DesignPatterns\AbstractFactory03\Demo;


class ProductA1 implements AbstractProductA
{
    public function show()
    {
        echo 'ProductA1 is Show!' . PHP_EOL;
    }
}