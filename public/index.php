<?php
/**
 * 入口文件
 * 1.定义常量
 * 2.加载函数库
 * 3.启动框架
 */

define('IM',realpath('../'));//定义框架所在的根目录
define('CORE',IM.'/core');//定义框架核心文件
define('APP',IM.'/app');//定义框架项目文件
define('MODULE','\app');

define('DEBUG',true);//调试模式
include IM.'/vendor/autoload.php';
if(DEBUG){
    $whoops = new \Whoops\Run;
    $whoops->prependHandler(new \Whoops\Handler\PrettyPageHandler);
    $whoops->register();
	ini_set('display_error', 'On');
}else{
	ini_set('display_error', 'Off');
}

// 加载函数库
include CORE.'/common/function.php';
// 核心文件
include CORE.'/IM.php';

// new一个类时，如果类不存在就触发这个方法
spl_autoload_register('\core\im::load');

core\im::run();
?>