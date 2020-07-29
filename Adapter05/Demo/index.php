<?php
//适配器模式

namespace Renzhifan\DesignPatterns\Adapter05\Demo;

require __DIR__ . '/../../vendor/autoload.php';

$adaptee = new Adaptee();
$adaptee->pay();
//适配器
$adapter = new Adapter();
$adapter->pay();

$adapter->notify();