<?php


namespace Renzhifan\DesignPatterns\FactoryMethod;


class DivFactory extends Factory
{
    public function create()
    {
        return new Div();
    }
}