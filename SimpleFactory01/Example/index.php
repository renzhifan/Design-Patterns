<?php


namespace Renzhifan\DesignPatterns\SimpleFactory01\Example;

require __DIR__.'/../../vendor/autoload.php';

// 当前业务需要使用极光
$message = MessageFactory::createMessage('Ali');
echo $message->send('您有新的短消息，请查收');