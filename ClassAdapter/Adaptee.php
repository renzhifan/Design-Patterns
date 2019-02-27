<?php


namespace Renzhifan\DesignPatterns\ClassAdapter;


class Adaptee
{
    public $money='￥34';
    public function pay()
    {
        echo '支付'.$this->money;
    }
}