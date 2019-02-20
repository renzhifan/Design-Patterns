<?php


namespace Renzhifan\DesignPatterns\AbstractFactoryWithSimpleFactory;
require __DIR__.'/../vendor/autoload.php';

class Index
{
    public function run()
    {
        $factory=new Factory();
        //创建user
        $user=$factory->createUser();
        $user->insert();
        echo '<br>';
        $user->select();

        echo '<hr>';

        // 创建 article
        $article = $factory->createArticle();
        $article->insert();
        echo '<br>';
        $article->select();
    }
}
$index=new Index();
$index->run();