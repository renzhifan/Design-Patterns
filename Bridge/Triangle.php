<?php


namespace Renzhifan\DesignPatterns\Bridge;


class Triangle extends Graph
{
    /**
     * @return mixed|void
     */
    public function draw()
    {
        echo "画一个 {$this->color->run()} 的三角形";
    }
}