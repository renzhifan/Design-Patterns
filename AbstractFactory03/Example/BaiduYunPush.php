<?php


namespace Renzhifan\DesignPatterns\AbstractFactory03\Example;


class BaiduYunPush implements Push
{
    public function send(string $msg)
    {
        // 调用接口，发送客户端推送
        // xxxxx
        return '百度Android&iOS云推送发送成功！推送内容：' . $msg.PHP_EOL;
    }
}