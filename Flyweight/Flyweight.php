<?php


namespace Renzhifan\DesignPatterns\Flyweight;


abstract class Flyweight
{
    /**
     * @var
     */
    protected $name;

    /**
     * Flyweight constructor.
     *
     * @param $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * @param $content
     */
    public function show($content)
    {
    }
}

