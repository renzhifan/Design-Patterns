<?php


namespace Renzhifan\DesignPatterns\Facade;


class Facade
{
    private $file;
    private $encrypt;
    public function __construct()
    {
        $this->file=new File();
        $this->encrypt=new Encrypt();
    }
    public function contentEncrypt()
    {
        echo $this->file->content();
        echo '<br>';
        echo $this->encrypt->encrypt();
    }
}