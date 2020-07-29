<?php


namespace Renzhifan\DesignPatterns\Decorator04\Example;

// 假设有很多模板实现了上面的短信模板接口
// 下面这个是其中一个优惠券发送的模板实现
class CouponMessageTemplate implements MessageTemplate
{
    public function message()
    {
        return '优惠券信息：我们是全国第一的牛X产品哦，送您十张优惠券！'.PHP_EOL;
    }
}