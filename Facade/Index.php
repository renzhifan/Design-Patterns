<?php


namespace Renzhifan\DesignPatterns\Facade;

require __DIR__.'/../vendor/autoload.php';
class Index
{
    public function run()
    {
        $facade = new Facade();
        $facade->contentEncrypt();
    }
}
$index=new Index();
$index->run();

/*获取文件内容
加密文件内容*/

/*从代码可以看出；
外观模式对客户端屏蔽了子系统；
但是也有缺点；
如果想增加子系统；
就需要修改 Facade ；
这就违反了开闭原则*/