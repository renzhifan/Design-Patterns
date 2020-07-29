<?php


namespace Renzhifan\DesignPatterns\SimpleFactory01\Demo;


class ProductA implements Product
{
    public function show()
    {
        echo 'Show ProductA'.PHP_EOL;
    }
}