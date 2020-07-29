<?php


namespace Renzhifan\DesignPatterns\SimpleFactory01\Example;


class AliYunMessage implements Message
{
    public function send(string $msg){
        // 调用接口，发送短信
        // xxxxx
        return '阿里云短信（原阿里大鱼）发送成功！短信内容：' . $msg.PHP_EOL;
    }
}