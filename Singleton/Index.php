<?php


namespace Renzhifan\DesignPatterns\Singleton;
//单例模式
/*特点 ：4私1公
1、私有化构造方法；防止使用new创建多个实例
2、私有化克隆方法；防止clone多个实例
3、私有化重建方法；防止序列化
4、私有化静态属性；防止直接访问存储实例的属性*/

//普通类
class Db1
{
    public static $instance = null;
    public static function getInstance()
    {
        if(null=== static::$instance){
            static::$instance=new static();
        }
        return static::$instance;
    }
    public function __construct()
    {
    }
    public function __clone()
    {
        // TODO: Implement __clone() method.
    }
    public function __wakeup()
    {
        // TODO: Implement __wakeup() method.
    }
}
$db1=new Db1();
$db2=new Db1();
$db3=clone $db2;
$db4=Db1::getInstance();
$db5=unserialize(serialize($db4));
var_dump($db1);
echo '<hr>';
var_dump($db2);
echo '<hr>';
var_dump($db3);
echo '<hr>';
var_dump($db4);
echo '<hr>';
var_dump($db5);
echo '<hr>';

//单例类
class Db2
{
    private static $instance=null;
    public static function getInstance()
    {
        if(null=== static::$instance){
            static:: $instance=new static();
        }
        return static::$instance;
    }
    private function __construct()
    {
    }
    private function __clone()
    {
        // TODO: Implement __clone() method.
    }
    private function __wakeup()
    {
        // TODO: Implement __wakeup() method.
    }
}
$db6 = Db2::getInstance();
$db7 = Db2::getInstance();

var_dump($db6);
echo '<hr>';
var_dump($db7);
echo '<hr>';

//运行结果
/*object(Renzhifan\DesignPatterns\Singleton\Db1)#1 (0) { }
object(Renzhifan\DesignPatterns\Singleton\Db1)#2 (0) { }
object(Renzhifan\DesignPatterns\Singleton\Db1)#3 (0) { }
object(Renzhifan\DesignPatterns\Singleton\Db1)#4 (0) { }
object(Renzhifan\DesignPatterns\Singleton\Db1)#5 (0) { }
object(Renzhifan\DesignPatterns\Singleton\Db2)#6 (0) { }
object(Renzhifan\DesignPatterns\Singleton\Db2)#6 (0) { }*/

/*运行代码我们可以看到；
普通类DB1的句柄每个都是不一样的；
一共5个实例；
而单例这两个的句柄都是6 ；
一直是一个实例；*/