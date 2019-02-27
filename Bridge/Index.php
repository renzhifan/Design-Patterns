<?php


namespace Renzhifan\DesignPatterns\Bridge;
require __DIR__.'/../vendor/autoload.php';

class Index
{
    public function run()
    {
        $red = new Red();
        $yellow = new Yellow();
        $green = new Green();

        // 红色的正方形
        $redSquare = new Square($red);
        $redSquare->draw();
        echo '<br>';

        // 黄色的正方形
        $yellowSquare = new Square($yellow);
        $yellowSquare->draw();
        echo '<br>';

        // 绿色的正方形
        $greenSquare = new Square($green);
        $greenSquare->draw();
        echo '<br>';


        // 红色的三角形
        $redTriangle = new Triangle($red);
        $redTriangle->draw();
        echo '<br>';

        // 黄色的三角形
        $yellowTriangle = new Triangle($yellow);
        $yellowTriangle->draw();
        echo '<br>';

        // 绿色的三角形
        $greenTriangle = new Triangle($green);
        $greenTriangle->draw();
        echo '<br>';


        // 红色的圆形
        $redCircle = new Circle($red);
        $redCircle->draw();
        echo '<br>';

        // 黄色的圆形
        $yellowCircle = new Circle($yellow);
        $yellowCircle->draw();
        echo '<br>';

        // 绿色的圆形
        $greenCircle = new Circle($green);
        $greenCircle->draw();
        echo '<br>';

    }
}
$index = new Index();
$index->run();

/*画一个 红色 的正方形
画一个 黄色 的正方形
画一个 绿色 的正方形
画一个 红色 的三角形
画一个 黄色 的三角形
画一个 绿色 的三角形
画一个 红色 的圆形
画一个 黄色 的圆形
画一个 绿色 的圆形*/

/*从代码我们可以发现跟上篇文章的适配器模式有点像；
它们都是让两个类配合工作；
但是适配器是为了让已有的两个类互相兼容；
而桥接模式则是为了让抽象和实现解耦；
在减少创建类的同时还可以方便组合功能；*/

