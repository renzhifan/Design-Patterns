<?php


namespace Renzhifan\DesignPatterns\SimpleFactory01\Demo;
require __DIR__.'/../../vendor/autoload.php';

$productA = Factory::createProduct('A');
$productB = Factory::createProduct('B');
$productA->show();
$productB->show();