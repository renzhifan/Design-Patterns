<?php


namespace Renzhifan\DesignPatterns\SafeComposite;


class File extends Component
{
    /**
     * @return mixed|string
     */
    public function display()
    {
        return '--' . $this->name .'<br>';
    }

}