<?php


namespace Renzhifan\DesignPatterns\AbstractFactory03\Example;
require __DIR__ . '/../../vendor/autoload.php';

// 当前业务需要使用阿里云
$factory = new AliYunFactory();
// $factory = new BaiduYunFactory();
$message = $factory->createMessage();
$push = $factory->createPush();
echo $message->send('您已经很久没有登录过系统了，记得回来哦！');
echo $push->send('您有新的红包已到帐，请查收！');