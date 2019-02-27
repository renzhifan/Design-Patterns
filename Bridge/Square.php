<?php


namespace Renzhifan\DesignPatterns\Bridge;


class Square extends Graph
{
    public function draw()
    {
        // TODO: Implement draw() method.
        echo "画一个 {$this->color->run()} 的正方形";
    }
}