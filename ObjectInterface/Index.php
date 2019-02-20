<?php
//对象接口使用方法

namespace Renzhifan\DesignPatterns\ObjectInterface;

/*1、使用接口（interface），可以指定某个类必须实现哪些方法，但不需要定义这些方法的具体内容。
2、接口是通过interface关键字来定义的，就像定义一个标准的类一样，但其中定义所有的方法都是空的。
3、接口中定义的所有方法都必须是共有的，这是接口的特性。*/

/*实现（implements）
要实现一个接口，使用implements操作符，类中必须实现接口中定义的所有方法，否则会报一个致命错误。
类可以实现多个接口，用逗号来分割多个接口的名称
Note
1、实现多个接口时，接口中的方法不能有重名
2、接口也可以继承，通过extends操作符
3、类要实现接口，必须使用和接口中所定义的方法完全一致的方式，否则会导致致命错误*/

/*常量
接口中也可以定义常量。接口常量和类常量的使用完全相同，但是不能被子类或子类接口所覆盖*/


// 声明一个'iTemplate'接口
interface iTemplate
{
    public function setVariable($name, $var);
    public function getHtml($template);
}


// 实现接口
// 下面的写法是正确的
class Template implements iTemplate
{
    private $vars = array();

    public function setVariable($name, $var)
    {
        $this->vars[$name] = $var;
    }

    public function getHtml($template)
    {
        foreach($this->vars as $name => $value) {
            $template = str_replace('{' . $name . '}', $value, $template);
        }

        return $template;
    }
}

// 下面的写法是错误的，会报错，因为没有实现 getHtml()：
// Fatal error: Class BadTemplate contains 1 abstract methods
// and must therefore be declared abstract (iTemplate::getHtml)
class BadTemplate implements iTemplate
{
    private $vars = array();

    public function setVariable($name, $var)
    {
        $this->vars[$name] = $var;
    }
}

//Example #2 可扩充的接口
interface a
{
    public function foo();
}

interface b extends a
{
    public function baz(Baz $baz);
}

// 正确写法
class c implements b
{
    public function foo()
    {
    }

    public function baz(Baz $baz)
    {
    }
}

// 错误写法会导致一个致命错误
class d implements b
{
    public function foo()
    {
    }

    public function baz(Foo $foo)
    {
    }
}
//Example #3 继承多个接口
interface a
{
    public function foo();
}

interface b
{
    public function bar();
}

interface c extends a, b
{
    public function baz();
}

class d implements c
{
    public function foo()
    {
    }

    public function bar()
    {
    }

    public function baz()
    {
    }
}
//Example #4 使用接口常量
interface a
{
    const b = 'Interface constant';
}

// 输出接口常量
echo a::b;

// 错误写法，因为常量不能被覆盖。接口常量的概念和类常量是一样的。
class b implements a
{
    const b = 'Class constant';
}