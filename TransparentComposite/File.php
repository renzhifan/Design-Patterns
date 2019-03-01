<?php


namespace Renzhifan\DesignPatterns\TransparentComposite;


class File extends Component
{
    public function add(Component $component)
    {
        throw new \Exception('文件不能添加子节点');
    }
    public function display()
    {
        // TODO: Implement display() method.
        return '--'.$this->name.'<br>';
    }
}