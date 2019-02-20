<?php
namespace Renzhifan\DesignPatterns\StaticAndSelf;
class Father
{
    public function getNewFather()
    {
        return new self();
    }
    public function getNewCaller()
    {
        return new static();
    }
}
$f=new Father();
print_r(get_class($f->getNewFather()));
echo '<hr/>';
print_r(get_class($f->getNewCaller()));
echo '<br/>';
/*注意，上面的代码get_class()方法是用于获取实例所属的类名。

这里的结果是：无论调用getNewFather()还是调用getNewCaller()返回的都是Father这个类的实例。

打印的结果为：FatherFather

到这里，貌似new self()和new static()是没有区别的。我们接着往下走：*/
class Sun1 extends Father
{

}
class Sun2 extends  Father
{

}
$sun1= new Sun1();
$sun2= new Sun2();
print_r(get_class($sun1->getNewFather()));
echo '<hr/>';
print_r(get_class($sun1->getNewCaller()));

/*看上面的代码，现在这个Father类有两个子类，由于Father类的getNewFather()和getNewCaller()是public的，所以子类继承了这两个方法。

打印的结果是：FatherSun1FatherSun2

我们发现，无论是Sun1还是Sun2，调用getNewFather()返回的对象都是类Father的实例，而getNewCaller()则返回的是调用者的实例。

即$sun1返回的是Sun1这个类的实例，$sun2返回的是Sun2这个类的实例。

现在好像有点明白new self()和new static()的区别了。

首先，他们的区别只有在继承中才能体现出来，如果没有任何继承，那么这两者是没有区别的。

然后，new self()返回的实例是万年不变的，无论谁去调用，都返回同一个类的实例，而new static()则是由调用者决定的。

上面的$sun1->getNewCaller()的调用者是$sun1对吧！$sun1是类Sun1的实例，所以返回的是Sun1这个类的实例，$sun2同样的道理就不赘述了。*/