<?php


namespace Renzhifan\DesignPatterns\AbstractFactory03;


class MySQLUser implements User
{
    public function insert()
    {
        echo '向 MySQL 数据库中插入 User';
    }
    public function select()
    {
        // TODO: Implement select() method.
        echo '从 MySQL 数据库中查询 User';
    }
}