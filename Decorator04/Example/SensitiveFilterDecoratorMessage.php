<?php


namespace Renzhifan\DesignPatterns\Decorator04\Example;

// 使用我们的大数据部门同事自动生成的新词库来过滤敏感词汇，这块过滤不是强制要过滤的内容，可选择使用
class SensitiveFilterDecoratorMessage  extends DecoratorMessageTemplate
{
    public $bigDataFilterWords = ['牛X'];
    public $bigDataReplaceWords = ['好用'];
    public function message()
    {
        return str_replace($this->bigDataFilterWords, $this->bigDataReplaceWords, $this->template->message());
    }
}