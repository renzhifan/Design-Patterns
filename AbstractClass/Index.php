<?php
//抽象类使用方法

namespace Renzhifan\DesignPatterns\AbstractClass;
/*1、PHP5支持抽象类和抽象方法。定义为抽象的类不能被实例化。
2、任何一个类，如果它里面至少有一个方法是被定义为抽象的，那么这个类就必须被声明为抽象的。
3、被定义为抽象的方法只是声明了其调用方式（参数），不能定义其具体的功能实现。
4、继承一个抽象类的时候，子类必须定义父类中的所有抽象方法；另外，这些方法的访问控制必须和父类中一样（或者更宽松）。
5、例如某个抽象方法被声明为受保护的，那么子类中实现的方法就应该声明为受保护的或者共有的，而不能定义为私有的。
6、此外方法的调用方式必须匹配，即类型和所需参数数量必须一致。
7、例如，子类定义了一个可选参数，而父类抽象方法的声明里没有，则两则的声明并无冲突。
8、这也适用于PHP5.4起的构造函数。在PHP5.4之前的构造函数声明可以不一样的*/

abstract class AbstractClass
{
    //强制要求子类定义这些方法
    abstract protected function getvalue();
    abstract protected function prefixValue($prefix);
    //普通方法(非抽象方法)
    public function printOut()
    {
        print $this->getvalue()."\n";
    }
}
class ConcreteClass1 extends AbstractClass
{
    protected function getvalue()
    {
        // TODO: Implement getvalue() method.
        return "ConcreteClass1";
    }
    public function prefixValue($prefix)
    {
        // TODO: Implement prefixValue() method.
        return "{$prefix}ConcreteClass1";
    }
}
class ConcreteClass2 extends AbstractClass
{
    protected function getvalue()
    {
        // TODO: Implement getvalue() method.
        return "ConcreteClass2";
    }
    public function prefixValue($prefix)
    {
        // TODO: Implement prefixValue() method.
        return "{$prefix}ConcreteClass2";
    }
}
$class1=new ConcreteClass1();
$class1->printOut();
echo $class1->prefixValue("FOO_")."\n";
$class2 = new ConcreteClass2;
$class2->printOut();
echo $class2->prefixValue('FOO_') ."\n";
/*以上例程会输出：
ConcreteClass1
FOO_ConcreteClass1
ConcreteClass2 FOO_
ConcreteClass2*/