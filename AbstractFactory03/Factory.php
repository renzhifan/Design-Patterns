<?php


namespace Renzhifan\DesignPatterns\AbstractFactory03;

//工厂接口
interface Factory
{
    /**
     * @return mixed
     * 创建User产品
     */
    public function  createUser();
    /**
     * 创建 Article 产品
     *
     * @return mixed
     */
    public function createArticle();
}