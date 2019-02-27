<?php


namespace Renzhifan\DesignPatterns\ClassAdapter;


class Adapter extends Adaptee implements Target
{
    public function __construct()
    {
        $this->money='￥5';
    }
    public function notify()
    {
        // TODO: Implement notify() method.
        echo '通知';
    }

}