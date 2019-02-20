<?php


namespace Renzhifan\DesignPatterns\FactoryMethod;
require __DIR__.'/../vendor/autoload.php';

class Index
{
    public function good()
    {
        $factory = new AddFactory();
        $operation = $factory->create();
        $operation->setNumberA(1);
        $operation->setNumberB(2);
        $result = $operation->getResult();
        echo $result;
    }
}
$class= new Index();
$class->good();