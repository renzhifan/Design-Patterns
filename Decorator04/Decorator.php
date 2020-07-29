<?php


namespace Renzhifan\DesignPatterns\Decorator04;


abstract class Decorator implements Food
{
    protected $food;
    public function __construct(Food $food)
    {
        $this->food=$food;
    }
}