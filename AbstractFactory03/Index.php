<?php


namespace Renzhifan\DesignPatterns\AbstractFactory03;

require __DIR__.'/../vendor/autoload.php';
class Index
{
    public function run()
    {
        //使用MYSQL
        $factory=new MySQLFactory();
        $user=$factory->createUser();
        $user->insert();
        echo '<br/>';
        $user->select();
        echo '<hr>';

        $factory = new MySQLFactory();
        // 创建 article
        $article = $factory->createArticle();
        $article->insert();
        echo '<br>';
        $article->select();
        echo '<br><br>';
        // 使用 SQLite
        $factory = new SQLiteFactory();
        // 创建 user
        $user = $factory->createUser();
        $user->insert();
        echo '<br>';
        $user->select();

        echo '<hr>';

        $factory = new SQLiteFactory();
        // 创建 article
        $article = $factory->createArticle();
        $article->insert();
        echo '<br>';
        $article->select();
    }
}
$index=new Index();
$index->run();