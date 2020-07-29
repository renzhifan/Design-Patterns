<?php


namespace Renzhifan\DesignPatterns\FactoryMethod02\Demo;


class ProductA implements Product
{
    public function show()
    {
        echo 'Show ProductA'.PHP_EOL;
    }
}