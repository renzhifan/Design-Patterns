<?php


namespace Renzhifan\DesignPatterns\ObjectAdapter;


class Adapter implements Target
{
    public function __construct(Adaptee $adaptee)
    {
        $this->adaptee=$adaptee;
        $adaptee->money='$5';
    }
    public function pay()
    {
        // TODO: Implement pay() method.
        $this->adaptee->pay();
    }
    public function notify()
    {
        // TODO: Implement notify() method.
        echo '通知';
    }
}