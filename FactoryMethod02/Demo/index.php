<?php


namespace Renzhifan\DesignPatterns\FactoryMethod02\Demo;

require __DIR__.'/../../vendor/autoload.php';
// A工厂方法生产的A商品
$factoryA = new CreatorA();
$productA = $factoryA->AnOperation();

// B工厂方法生产的B商品
$factoryB = new CreatorB();
$productB = $factoryB->AnOperation();

// 调用测试
$productA->show();
$productB->show();