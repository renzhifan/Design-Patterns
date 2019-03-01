<?php


namespace Renzhifan\DesignPatterns\SafeComposite;


class Dir extends Component
{
    protected $children =[];
    public function add(Component $component)
    {
        $this->children[]=$component;
    }
    public function display()
    {
        // TODO: Implement display() method.
        $nameStr=$this->name.'<br>';
        foreach ($this->children as $k => $v){
            $nameStr.='--'.$v->display();
        }
        return $nameStr;
    }
}