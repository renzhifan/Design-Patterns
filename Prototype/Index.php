<?php


namespace Renzhifan\DesignPatterns\Prototype;

require __DIR__.'/../vendor/autoload.php';
class Index
{
    public function shallowCopy()
    {
        $car=new Car();
        $car->name='特斯拉';
        $shallowDrive=new ShallowDrive();
        $shallowDrive->setCar($car);
        $shallowDrive->show();

        $cloneDrive=clone $shallowDrive;
        $cloneDrive->show();
        echo '<hr/>';

        $car->name='哈弗H6';
        $shallowDrive->show();
        $cloneDrive->show();
    }
    public function deepCopy()
    {
        $car=new Car();
        $car->name='深度特斯拉';

        $deepDrive=new DeepDrive();
        $deepDrive->setCar($car);
        $deepDrive->show();

        $cloneDrive=clone $deepDrive;
        $cloneDrive->show();
        echo '<hr/>';

        $car->name='深度哈弗H6';
        $deepDrive->show();
        $cloneDrive->show();


    }
}

$index=new Index();
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