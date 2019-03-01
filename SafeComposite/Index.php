<?php


namespace Renzhifan\DesignPatterns\SafeComposite;
/*上篇文章我们讲了透明组合模式；
但是也说了透明组合模式中的叶子节点虽然有 add 方法；
运行的时候却是抛出错误；
这还有个安全的组合模式避免这种情况；
结构

Component：只包含树枝节点和叶子节点公共的方法抽象类
Composite：树枝节点 有子节点 示例中指 Dir 文件夹
Leaf：叶子节点 没有子节点 示例中指 File 文件*/
require __DIR__.'/../vendor/autoload.php';
class Index
{

    public function run()
    {
        $designPatterns = new Dir('design-patterns');

        $classAdapter = new Dir('ClassAdapter');
        $objectAdapter = new Dir('ObjectAdapter');
        $safeComposite = new Dir('SafeComposite');

        $designPatterns->add($classAdapter);
        $designPatterns->add($objectAdapter);
        $designPatterns->add($safeComposite);

        $componentFile = new File('Component.php');
        $dirFile = new File('Dir.php');
        $fileFile = new File('File.php');
        $indexFile = new File('index.php');

        $safeComposite->add($componentFile);
        $safeComposite->add($dirFile);
        $safeComposite->add($fileFile);
        $safeComposite->add($indexFile);

        echo $designPatterns->display();
    }
}
$index=new Index();
$index->run();

/*design-patterns
--ClassAdapter
--ObjectAdapter
--SafeComposite
----Component.php
----Dir.php
----File.php
----index.php*/


/*我们可以发现其实树枝节点的 Dir.php 没有任何变化；
从透明转变到安全也很直观；
就是把树枝节点特有的方法从抽象类中下移到树枝节点类中；
但是这样也有缺点；
就是没法愉快的面向抽象类编程了；*/