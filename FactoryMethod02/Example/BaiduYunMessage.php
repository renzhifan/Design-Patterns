<?php


namespace Renzhifan\DesignPatterns\FactoryMethod02\Example;


class BaiduYunMessage implements Message
{
    public function send(string $msg){
        // 调用接口，发送短信
        // xxxxx
        return '百度SMS短信发送成功！短信内容：' . $msg.PHP_EOL;
    }
}