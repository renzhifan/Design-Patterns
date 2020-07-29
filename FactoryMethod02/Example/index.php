<?php


namespace Renzhifan\DesignPatterns\FactoryMethod02\Example;
require __DIR__.'/../../vendor/autoload.php';

// 当前业务需要使用百度云
$factory = new BaiduYunFactory();
$message = $factory->getMessage();
echo $message->send('您有新的短消息，请查收');