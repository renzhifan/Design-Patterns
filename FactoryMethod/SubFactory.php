<?php


namespace Renzhifan\DesignPatterns\FactoryMethod;


class SubFactory extends Factory
{
    public function create()
    {
        // TODO: Implement create() method.
        return new Sub();
    }
}