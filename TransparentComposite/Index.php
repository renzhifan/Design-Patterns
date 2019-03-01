<?php


namespace Renzhifan\DesignPatterns\TransparentComposite;
/*这模式用来解决整体和部分可以一致对待的问题
就比如文件夹和其下的文件
可以复制文件也可以复制整个文件夹
组合模式是将对象组合成树形结构以表示整体和部分的层次结构
可以方便的增加节点
组合模式分为两种
1、透明模式
2、安全模式
先说透明组合模式

结构
Component：包含树枝节点和叶子节点方法的抽象类
Composite：树枝节点，有子节点 示例中指DIr文件夹
Leaf：叶子节点 没有子节点 示例中指FIle文件*/

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

/*再回头看下 File.php ；
File 作为叶子其下是不能再有子节点的；
但是为了让树枝节点和叶子能有一个统一的操作；
我们在抽象类 Component.php 中定义了 add 方法；
作为示例为了简化只写了个 add 配套的 remove 等都没写；
这种方式是透明了却不安全；
我们又不得不在 File 的 add 方法中抛出错误；*/