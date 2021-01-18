
<?php
/*
 * @Author: yongze.chen 
 * @Date: 2021-01-17 21:19:08 
 * @Last Modified by: yongze.chen
 * @Last Modified time: 2021-01-17 21:24:41
 */

/**
 * 测试   Seaslog
 */

//  定义路径
SeasLog::setBasePath('./');
// ini_set('seaslog.default_basepath','./');


// 写入日志
var_dump(SeasLog::alert('log message'));
