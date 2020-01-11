<?php


namespace Renzhifan\DesignPatterns\Flyweight;


class UnsharedConcreteFlyweight extends Flyweight
{
    /**
     * @param $content
     */
    public function show($content)
    {
        echo '不共享的享元：' . $this->name . $content . '<br>';
    }

    /**
     * 附加的删除方法
     */
    public function delete()
    {
        $this->name = '';
    }
}

