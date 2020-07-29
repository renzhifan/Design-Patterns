<?php


namespace Renzhifan\DesignPatterns\Observer06\Demo;

use SplSubject;

class UpdateOrderStatus implements \SplObserver{
    public function update(SplSubject $subject)
    {
        $subject->order->status = 'success';
        echo "订单状态更改成功".PHP_EOL;
    }
}