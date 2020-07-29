<?php


namespace Renzhifan\DesignPatterns\SimpleFactory01\Example;


class MessageFactory
{
    public static function createMessage($type){
        switch($type){
            case 'Ali':
                return new AliYunMessage();
            case 'BD':
                return new BaiduYunMessage();
            default:
                return null;
        }
    }
}