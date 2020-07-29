<?php


namespace Renzhifan\DesignPatterns\AbstractFactory03\Example;


interface MessageFactory
{
    public function createMessage();

    public function createPush();
}