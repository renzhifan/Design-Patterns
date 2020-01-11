<?php
namespace Renzhifan\DesignPatterns\Flyweight;

class FlyweightFactory
{
    /**
     * @var array
     */
    private $flyweights = [];

    /**
     * @param $name
     *
     * @return mixed
     */
    public function getFlyweight($name)
    {
        if(!isset($this->flyweights[$name])){
            $this->flyweights[$name]=new ConcreteFlyweight($name);
        }
        return $this->flyweights[$name];
    }
}