<?php

// var_dump(__FILE__);

session_name("XGKID-REDIS-X");
ini_set('session.save_handler', 'redis');
// session_set_save_handler($handler,true);

var_dump(session_set_cookie_params(['lifetime' => 10]));
// var_dump(session_get_cookie_params());

// ini_set('session.save_path', 'tcp://127.0.0.1:6379');
session_save_path("tcp://127.0.0.1:6379");

// $lifeTime = 24 * 3600;
// session_set_cookie_params($lifeTime);

var_dump(session_get_cookie_params());

session_start();
$_SESSION['a'] = '111';
$_SESSION['b'] = 'bbb';
$_SESSION['c'] = 'ccc';

var_dump($_SESSION);
