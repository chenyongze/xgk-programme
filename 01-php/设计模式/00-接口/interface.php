<?php
/*
 * @Author: yongze.chen 
 * @Date: 2021-01-19 21:13:52 
 * @Last Modified by:   sapphire.php@gmail.com 
 * 
 * 
 * 
 */


interface Demo
{
    const NAME = 'C语言中文网';
    const URL = 'http://c.biancheng.net/php/';
    function fun1();
    function fun2();
}
echo Demo::NAME . "\n";
echo Demo::URL . "\n";


class A implements Demo
{
    public function fun1()
    {
    }
    public function fun2()
    {
    }
}

$a = new A;
echo $a::NAME;
