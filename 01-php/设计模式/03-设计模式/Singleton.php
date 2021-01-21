<?php

/**
 * php 单例模式
 * @Author: yongze.chen 
 * @Date: 2021-01-21 10:23:05 
 * @Last Modified by:   sapphire.php@gmail.com 
 * 
 */

class Singleton
{
    private static $_instance;
    private function __construct()
    {
    }
    private function __clone()
    {
    }
    public static function getInstance()
    {
        if (self::$_instance instanceof Singleton) { //instanceof 判断一个实例是否是某个类的对象
            self::$_instance = new Singleton();
        }

        return self::$_instance;
    }
}


// $single = Singleton::getInstance();
// var_dump($single);