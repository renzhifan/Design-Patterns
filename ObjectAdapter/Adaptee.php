<?php


namespace Renzhifan\DesignPatterns\ObjectAdapter;


class Adaptee
{
    public $money='￥34';
    public function pay()
    {
        echo '支付'.$this->money;
    }

}