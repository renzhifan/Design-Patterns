<?php


namespace Renzhifan\DesignPatterns\TransparentComposite;


class Dir extends Component
{
    protected $children = [];

//添加子节点
    public function add(Component $component)
    {
        $this->children[]=$component;
    }
    public function display()
    {
        // TODO: Implement display() method.
        $nameStr=$this->name."<br/>";
        foreach ($this->children as $k => $v){
            $nameStr.='--'.$v->display();
        }
        return $nameStr;
    }
}