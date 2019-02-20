<?php


namespace Renzhifan\DesignPatterns\AbstractFactory;


class MySQLFactory implements Factory
{
    public function createUser()
    {
        // TODO: Implement createUser() method.
        return new MySQLUser();
    }
    /**
     * 创建 MySQLArticle 产品
     *
     * @return MySQLArticle|mixed
     */
    public function createArticle()
    {
        return new MySQLArticle();
    }
}