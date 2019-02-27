<?php
/*原型模式主要用于创建重复的对象
目的是使用clone对象来减少new对象的开销
如果某个场景需要多次实例化一个类
那就可以尝试用原型模式优化
在php中使用原型模式是很简单的
毕竟php是世界上最好的语言
我们只需要clone就行了
但是clone有一些问题
我们在下面的代码中讲
结构
抽象的__clone()方法*/


namespace Renzhifan\DesignPatterns\Prototype;

require __DIR__ . '/../vendor/autoload.php';

class Index
{

    /*从运行结果可以看出；
    原本的流程需要先 new Car();
    然后new Drive()；
    得到的 $shallowDrive 先执行__contract() 然后执行 show();

    而克隆出来的$cloneDrive 不要 new Car();
    不要 __contract() ；
    直接 show() 带回家 ;

    相当于 $cloneDrive 不用做准备工作直接就能驾驶起来跑了；
    但是问题也显而易见；
    我们不要在 __contract() 中做具体的工作；
    而且需要注意的是 clone 是浅复制；
    也就是说 $cloneDrive 的 car 和 $shallowDrive 的 car 是一个引用；
    如果我们改变了 $car ；
    $cloneDrive 也会被改变；*/
    public function shallowCopy()
    {
        $car = new Car();
        $car->name = '特斯拉';
        $shallowDrive = new ShallowDrive();
        $shallowDrive->setCar($car);
        $shallowDrive->show();

        $cloneDrive = clone $shallowDrive;
        $cloneDrive->show();
        echo '<hr/>';

        $car->name = '哈弗H6';
        $shallowDrive->show();
        $cloneDrive->show();
    }

    public function deepCopy()
    {
        $car = new Car();
        $car->name = '深度特斯拉';

        $deepDrive = new DeepDrive();
        $deepDrive->setCar($car);
        $deepDrive->show();

        $cloneDrive = clone $deepDrive;
        $cloneDrive->show();
        echo '<hr/>';

        $car->name = '深度哈弗H6';
        $deepDrive->show();
        $cloneDrive->show();


    }
}

$index = new Index();
$index->shallowCopy();
echo '<hr/>';
echo '<hr/>';
$index->deepCopy();

//执行结果
/*准备完成开始驾驶特斯拉
开始驾驶特斯拉

开始驾驶哈弗H6
开始驾驶哈弗H6
***********************
准备完成开始驾驶深度特斯拉
开始驾驶深度特斯拉

开始驾驶深度哈弗H6
开始驾驶深度特斯拉*/

/*如我们所愿；
$cloneDrive 并没有随 $deepDrive 的 car 变化；
创建型的设计模式就算讲完了；*/