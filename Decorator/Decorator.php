<?php


namespace Renzhifan\DesignPatterns\Decorator;


abstract class Decorator implements Food
{
    protected $food;
    public function __construct(Food $food)
    {
        $this->food=$food;
    }
}