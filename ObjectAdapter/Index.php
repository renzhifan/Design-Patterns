<?php
/*对象适配器和上篇的类适配器解决的问题一样
不过是适配器的另一种实现方式
示例中只有Adapter类有变化
Adaptee和Adapter部分可以完全一样
结构
Adaptee:原本已经有的具体类
Target:目标接口，包含我们希望用的的方法
Adapter:适配器类 适配Adaptee和Target*/

namespace Renzhifan\DesignPatterns\ObjectAdapter;
require __DIR__ . '/../vendor/autoload.php';

class Index
{
    public function run()
    {
        //原本的类的
        $adaptee=new Adaptee();
        $adaptee->pay();
        echo '<br>';
        //适配器
        $adapter=new Adapter($adaptee);
        $adapter->pay();
        echo '<br>';
        $adapter->notify();
    }
}
$index=new Index();
$index->run();

/*支付￥34
支付$5
通知*/

/*通过适配后；
我们可以在不改变原本的 Adaptee 类的情况下改变支付的币种；
并且可以灵活的增加新的方法；
相比类适配器；
对象适配器不需要继承；
因此也更加灵活一些；*/