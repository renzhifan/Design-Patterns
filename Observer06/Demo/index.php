<?php


namespace Renzhifan\DesignPatterns\Observer06\Demo;
require __DIR__.'/../../vendor/autoload.php';

$order = new Order();

$event = new OrderPayEvent($order);
$event->attach(new UpdateOrderStatus());
$event->attach(new SmsNotify());
$event->notify();