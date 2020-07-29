<?php


namespace Renzhifan\DesignPatterns\Adapter05\Demo;


class Adaptee
{
    public $money='￥34';
    public function pay()
    {
        echo '支付'.$this->money.PHP_EOL;
    }
}