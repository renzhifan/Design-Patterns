<?php


namespace Renzhifan\DesignPatterns\AbstractFactoryWithReflection;


/**
 * Article 产品接口
 *
 * Interface Article
 * @package Baijunyao\DesignPatterns\AbstractFactoryWithReflection
 */
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