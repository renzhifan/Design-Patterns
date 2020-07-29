<?php


namespace Renzhifan\DesignPatterns\AbstractFactory03\Demo;
require __DIR__.'/../../vendor/autoload.php';

// 工厂一
$factory1 = new Factory1();
$factory1ProductA = $factory1->CreateProductA();
$factory1ProductB = $factory1->CreateProductB();
$factory1ProductA->show();
$factory1ProductB->show();

// 工厂二
$factory2 = new Factory2();
$factory2ProductA = $factory2->CreateProductA();
$factory2ProductB = $factory2->CreateProductB();
$factory2ProductA->show();
$factory2ProductB->show();