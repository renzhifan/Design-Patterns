<?php


namespace Renzhifan\DesignPatterns\AbstractFactoryWithSimpleFactory;

//适用于 SQLite 的 Article
class SQLiteArticle implements Article
{
    /**
     * 新增
     *
     * @return mixed|void
     */
    public function insert()
    {
        echo '向 SQLite 数据库中插入 Article';
    }

    /**
     * 查询
     *
     * @return mixed|void
     */
    public function select()
    {
        echo '从 SQLite 数据库中查询 Article';
    }
}