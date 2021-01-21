<?php
/**
 * PHP 观察者模式
 * 
 * @Author: yongze.chen 
 * @Date: 2021-01-21 10:51:05 
 * @Last Modified by:   sapphire.php@gmail.com 
 */

// 主题接口
interface Subject
{
    public function register(Observer $observer);
    public function notify();
}

// 观察者接口
interface Observer
{
    public function watch();
}

// 主题
class Action implements Subject
{
    public $_observers = [];
    public function register(Observer $observer)
    {
        $this->_observers[] = $observer;
    }

    public function notify()
    {
        foreach ($this->_observers as $observer) {
            $observer->watch();
        }
    }
}

// 观察者
class Cat1 implements Observer
{
    public function watch()
    {
        echo "Cat1 watches TV \n";
    }
}

class Dog1 implements Observer
{
    public function watch()
    {
        echo "Dog1 watches TV \n";
    }
}

class People implements Observer
{
    public function watch()
    {
        echo "People watches TV \n";
    }
}

// 调用实例
$action = new Action();
$action->register(new Cat1());
$action->register(new People());
$action->register(new Dog1());
$action->notify();
