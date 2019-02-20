<?php


namespace Renzhifan\DesignPatterns\SimpleFactory;


class Client
{

    /**
     * 不好的示例2
     *
     * @return int
     */
    public function bad2()
    {
        // 计算 1+2
        $operation = new Add();
        $operation->setNumberA(1);
        $operation->setNumberB(2);
        $result = $operation->getResult();
        echo $result;

        echo '<br>';

        // 计算 3+4
        $operation = new Add();
        $operation->setNumberA(3);
        $operation->setNumberB(4);
        $result = $operation->getResult();
        echo $result;
    }

    /**
     * 好的示例
     */
    public function good()
    {
        $factory = new Factory();
        $operation = $factory->create('+');
        $operation->setNumberA(1);
        $operation->setNumberB(2);
        $result = $operation->getResult();
        echo $result;
    }
}


$client = new Client();
$client->bad2();
echo '<br>';
$client->good();