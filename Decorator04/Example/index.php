<?php


namespace Renzhifan\DesignPatterns\Decorator04\Example;


// 客户端，发送接口，需要使用模板来进行短信发送
class Message
{
    public $msgType = 'old';
    public function send(MessageTemplate $mt)
    {
        // 发送出去咯
        if ($this->msgType == 'old') {
            echo '面向内网用户发送' . $mt->message() . PHP_EOL;
        } else if ($this->msgType == 'new') {
            echo '面向全网用户发送' . $mt->message() . PHP_EOL;
        }

    }
}

$template = new CouponMessageTemplate();
$message = new Message();

// 老系统，用不着过滤，只有内部用户才看得到
$message->send($template);

// 新系统，面向全网发布的，需要过滤一下内容哦
$message->msgType = 'new';
$template = new AdFilterDecoratorMessage($template);
$template = new SensitiveFilterDecoratorMessage($template);

// 过滤完了，发送吧
$message->send($template);