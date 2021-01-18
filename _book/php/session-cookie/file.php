<?php

/**
 * session 设置参数  
 * 
 * 必须要在 session_start() 之前
 * 
 */

var_dump(__FILE__);

session_name("XGKID");
session_save_path('0;' . dirname(__FILE__) . '/session_path');
// var_dump(session_status());
// var_dump(session_id());

$lifetime = 40;
session_set_cookie_params($lifetime);

// 设置cookie数据  并添加有效时间  当前时间戳+过期时间秒
// setcookie("abc_cookie_a", "1234567", time() + 10);

session_start();
var_dump(session_id());

// var_dump(session_status());
var_dump($_COOKIE['abc_cookie_a']);
var_dump($_COOKIE['XGKID']);



// 设置session 数据

// $_SESSION['PHPSESSID_NEW'] = md5(time());
// $_SESSION['abc'] = md5(time());
// $_SESSION['hh'] = md5(time());

var_dump($_SESSION);
