<?php


namespace Renzhifan\DesignPatterns\SimpleFactory01\Demo;


class Factory
{
    public static function createProduct(string $type)
    {
        $product = null;
        switch ($type) {
            case 'A':
                $product = new ProductA();
                break;
            case 'B':
                $product = new ProductB();
                break;
            default:
                return null;

        }
        return $product;
    }
}