<?php


namespace Renzhifan\DesignPatterns\FactoryMethod02\Demo;


abstract class  Creator
{
    // 抽象工厂方法
    abstract protected function FactoryMethod();

    // 操作方法
    public function AnOperation()
    {
        return $this->FactoryMethod();
    }

}