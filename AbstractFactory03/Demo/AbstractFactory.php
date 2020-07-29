<?php


namespace Renzhifan\DesignPatterns\AbstractFactory03\Demo;


interface AbstractFactory
{
    // 创建商品A
    public function CreateProductA();
    // 创建商品B
    public function CreateProductB();
}