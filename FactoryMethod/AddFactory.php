<?php


namespace Renzhifan\DesignPatterns\FactoryMethod;


class AddFactory extends Factory
{
    public function create()
    {
        // TODO: Implement create() method.
        return new Add();
    }
}