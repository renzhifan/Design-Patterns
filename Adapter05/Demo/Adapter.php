<?php


namespace Renzhifan\DesignPatterns\Adapter05\Demo;


class Adapter extends Adaptee implements Target
{
    public function __construct()
    {
        $this->money='￥5';
    }
    public function notify()
    {
        // TODO: Implement notify() method.
        echo '通知'.PHP_EOL;
    }

}