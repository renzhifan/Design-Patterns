<?php


namespace Renzhifan\DesignPatterns\AbstractFactoryWithSimpleFactory;


class Factory
{
    public $db='MYSQL';
    /**
     * Factory constructor.
     */
    public function __construct()
    {
        /**
         * 从配置项中获取 driver
         */
        $config = include 'config.php';
        $this->db = $config['driver'];
    }
    /**
     * @return MySQLUser|SQLiteUser
     * 创建 User 产品
     */
    public function createUser()
    {
        switch ($this->db) {
            case 'MYSQL':
                $user =  new MySQLUser();
                break;
            case 'SQLite':
                $user =  new SQLiteUser();
                break;
            default:
                throw new \InvalidArgumentException('暂不支持的数据库类型');
        }
        return $user;
    }
    /**
     * 创建 Article 产品
     *
     * @return MySQLArticle|SQLiteArticle
     */
    public function createArticle()
    {
        switch ($this->db) {
            case 'MYSQL':
                $article =  new MySQLArticle();
                break;
            case 'SQLite':
                $article =  new SQLiteArticle();
                break;
            default:
                throw new \InvalidArgumentException('暂不支持的数据库类型');
        }
        return $article;
    }

}