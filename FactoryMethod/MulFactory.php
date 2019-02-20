<?php


namespace Renzhifan\DesignPatterns\FactoryMethod;


class MulFactory extends Factory
{
    public function create()
    {
        return new Mul();
    }
}