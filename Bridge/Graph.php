<?php


namespace Renzhifan\DesignPatterns\Bridge;


abstract class Graph
{
    protected $color;
    public function __construct(Color $color)
    {
        $this->color=$color;
    }
    abstract public function draw();
}