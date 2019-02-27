<?php


namespace Renzhifan\DesignPatterns\Prototype;


class DeepDrive
{
    private $car;

    public function __construct()
    {
        echo '准备完成';
    }
    public function setCar($car)
    {
        $this->car=$car;
    }
    public function show()
    {
        echo '开始驾驶'.$this->car->name;
        echo '<br/>';
    }
    public function __clone()
    {
        // TODO: Implement __clone() method.
        $this->car=clone $this->car;
    }
}