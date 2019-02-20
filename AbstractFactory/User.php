<?php


namespace Renzhifan\DesignPatterns\AbstractFactory;

//User产品接口
interface User
{
    /**
     * 新增
     * @return mixed
     */
    public function insert();

    /**
     * @return mixed
     * 查询
     */
    public function select();
}