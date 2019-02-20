<?php


namespace Renzhifan\DesignPatterns\AbstractFactory;


class MySQLArticle implements Article
{
    /**
     * 新增
     */
    public function insert()
    {
        echo '向 MySQL 数据库中插入 Article';
    }

    /**
     * 查询
     */
    public function select()
    {
        echo '从 MySQL 数据库中查询 Article';
    }
}