<?php


namespace Renzhifan\DesignPatterns\Decorator04\Example;

// 过滤新广告法中不允许出现的词汇
class AdFilterDecoratorMessage extends DecoratorMessageTemplate
{
    public function message()
    {
        return str_replace('全国第一', '全国第二', $this->template->message());
    }
}