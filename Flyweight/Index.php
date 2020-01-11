<?php


namespace Renzhifan\DesignPatterns\Flyweight;

require __DIR__.'/../vendor/autoload.php';
class Index
{
    public function run()
    {
        $flyweight = new FlyweightFactory();
        $zhangsan1 = $flyweight->getFlyweight('170cm的模特');
        $zhangsan1->show('第1件L号的衣服');

        $zhangsan2 = $flyweight->getFlyweight('170cm的模特');
        $zhangsan2->show('第99件L号的衣服');

        var_dump($zhangsan1 === $zhangsan2);
        echo '<hr>';

        $lisi = $flyweight->getFlyweight('180cm的模特');
        $lisi->show('第1件XXL号的衣服');

        $wangmazi = new UnsharedConcreteFlyweight('190cm的模特');
        $wangmazi->show('第1件XXXL号的衣服');
        $wangmazi->delete();
        $wangmazi->show('第1件XXXL号的衣服');
    }
}
$index=new Index();
$index->run();

/*获取文件内容
加密文件内容*/

/*从代码可以看出；
外观模式对客户端屏蔽了子系统；
但是也有缺点；
如果想增加子系统；
就需要修改 Facade ；
这就违反了开闭原则*/