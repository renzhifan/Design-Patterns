<?php
/*适配器模式还有一个名字叫包装器模式
其实很容易理解
因为现实中我们天天都在用
就比如说手机充电器
墙上的插孔装修完后就不在变了
手机买回来后我们也不会去改造他
如何让不变的插孔和不变的手机之间能连上充电
并未把220v转化为5v
这时候就需要电源适配器了
软件开始种也是同样的道理
在软件中适配器分为类适配器和对象适配器
我们先将类适配器
结构
Adaptee: 原本已经有的具体类
Target: 目标接口；包含我们希望拥有的方法
Adapter:适配器类；适配Adapteehe Target;*/

namespace Renzhifan\DesignPatterns\ClassAdapter;
require __DIR__.'/../vendor/autoload.php';

class Index
{
    public function run()
    {
        //原本的类的
        $adaptee=new Adaptee();
        $adaptee->pay();
        echo '<br/>';
        //适配器
        $adapter=new Adapter();
        $adapter->pay();
        echo '<br/>';

        $adapter->notify();
    }
}
$index=new Index();
$index->run();
/*支付￥34
支付￥5
通知*/

/*通过适配后；
我们可以在不改变原本的 Adaptee 类的情况下改变支付的币种；
并且可以灵活的增加新的方法；*/