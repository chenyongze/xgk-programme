<?php

/**  
 * PHP 工厂模式
 * @Author: yongze.chen 
 * @Date: 2021-01-21 10:32:12 
 * @Last Modified by:   sapphire.php@gmail.com 
 */

//假设3个待实例化的类
class Aclass
{
}

class Bclass
{
}

class Cclass
{
}

class Factory
{
    //定义每个类的类名
    const ACLASS = 'Aclass';
    const BCLASS = 'Bclass';
    const CCLASS = 'Cclass';
    public static function getInstance($newclass)
    {
        $class = $newclass; //真实项目中这里常常是用来解析路由，加载文件。
        return new $class;
    }
}

//调用方法：
$p = Factory::getInstance(Factory::ACLASS);
var_dump($p);
