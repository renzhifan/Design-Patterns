<?php


namespace Renzhifan\DesignPatterns\AbstractFactoryWithSimpleFactory;
//Article 产品接口

interface Article
{
    /**
     * 新增
     *
     * @return mixed
     */
    public function insert();

    /**
     * 查询
     *
     * @return mixed
     */
    public function select();
}