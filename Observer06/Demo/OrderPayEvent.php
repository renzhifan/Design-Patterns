<?php


namespace Renzhifan\DesignPatterns\Observer06\Demo;


class OrderPayEvent implements  \SplSubject
{

    private $observers;
    public $order;
    public function __construct(Order $order)
    {
        $this->order = $order;
        $this->observers = new \SplObjectStorage();
    }

    public function attach(\SplObserver $observer) //加入观察者
    {
        $this->observers->attach($observer);
    }

    public function detach(\SplObserver $observer)
    {
        $this->observers->detach($observer);
    }

    public function notify() //通知所有观察者  也就是执行所有观察者
    {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }

}