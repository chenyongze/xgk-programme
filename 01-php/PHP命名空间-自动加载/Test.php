<?php

spl_autoload_register('l_autoload');
// //将实现自动导入的函数，以字符串的形式传入该函数中，即可解决重复导入文件导致的错误问题。
Test1::test();
Test2::test();


function l_autoload($class)
{
    $dir  = __DIR__;
    $requireFile = $dir . "/" . $class . ".php";
    require $requireFile;
}



// function __autoload($class)
// {

//     require __DIR__ . '/' . $class . '.php';
// }
