<?php


namespace Renzhifan\DesignPatterns\Observer06\Demo;
use SplSubject;

class SmsNotify implements  \SplObserver {
    public function update(SplSubject $subject)
    {
        echo "发送短信:". $subject->order->user_id.'购买了商品'.PHP_EOL;
    }
}