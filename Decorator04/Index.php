<?php


namespace Renzhifan\DesignPatterns\Decorator04;
require __DIR__.'/../vendor/autoload.php';
/*结构
Component: 原本的对象和装饰共同的接口
ConcreteComponent:原本的对象，示例中指 手抓饼和烤冷面
Decorator：实现接口的装饰抽象类
ConcreteDecorator:具体的装饰  示例中指 肠 蛋 辣条*/
class Index
{
    public function run()
    {
        //手抓饼
        $shouzhuabing=new Shouzhuabing();
        echo $shouzhuabing->name();
        echo $shouzhuabing->price().'元';
        echo '<hr/>';echo '<br/>';
        //烤冷面
        $kaolengmian =new Kaolengmian();
        echo $kaolengmian->name();
        echo $kaolengmian->price().'元';
        echo '<hr/>';echo '<br/>';

        // 手抓饼+蛋
        $egg = new Egg($shouzhuabing);
        echo $egg->name();
        echo $egg->price() . '元';
        echo '<hr/>';echo '<br/>';

        // 手抓饼+肠
        $sausage = new Sausage($kaolengmian);
        echo $sausage->name();
        echo $sausage->price() . '元';
        echo '<hr/>';echo '<br/>';

        // 烤冷面+辣条
        $latiao = new Latiao($shouzhuabing);
        echo $latiao->name();
        echo $latiao->price() . '元';
        echo '<hr/>';echo '<br/>';
    }

}
$index=new Index();
$index->run();


/*手抓饼5元
烤冷面6元
手抓饼+蛋6元
烤冷面+肠8元
手抓饼+辣条8元*/