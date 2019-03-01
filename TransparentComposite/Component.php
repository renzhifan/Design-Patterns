<?php


namespace Renzhifan\DesignPatterns\TransparentComposite;
//包含树枝节点和叶子节点方法的抽象类

abstract class Component
{
    protected $name;
    public function __construct($name)
    {
        $this->name=$name;
    }
    abstract public function display();
}