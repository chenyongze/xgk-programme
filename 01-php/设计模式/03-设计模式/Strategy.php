<?php

/**
 *  PHP 策略模式 
 * @Author: yongze.chen 
 * @Date: 2021-01-21 10:44:34 
 * @Last Modified by:   sapphire.php@gmail.com 
 */

abstract class Strategy
{
    abstract function goSchool();
}

class Run extends Strategy
{
    public function goSchool()
    {
        // TODO: Implement goSchool() method.
    }
}

class Subway extends Strategy
{
    public function goSchool()
    {
        // TODO: Implement goSchool() method.
    }
}

class Bike extends Strategy
{
    public function goSchool()
    {
        // TODO: Implement goSchool() method.
    }
}

class Context
{
    protected $_stratege; //存储传过来的策略对象
    public function goSchool()
    {
        $this->_stratege->goSchool();
    }
}

//调用：
$contenx = new Context();
$avil_stratery = new Subway();
$contenx->goSchool($avil_stratery);
