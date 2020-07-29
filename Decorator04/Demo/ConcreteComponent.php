<?php


namespace Renzhifan\DesignPatterns\Decorator04\Demo;


class ConcreteComponent implements Component
{
    public function operation()
    {
        echo "I'm face!" . PHP_EOL;
    }
}