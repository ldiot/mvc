<?php
//入口文件
//1.定义常量
//2.加载函数库
//3.启动框架
define('IMOOC', realpath('./'));//根目录
define('CORE', IMOOC.'/core');//框架的核心文件所处的目录
define('APP', IMOOC.'/app');//项目文件目录，包括控制器，模型等等
define('MODULE', 'app');
define('DEBUG', true);//开启调试模式
include "vendor/autoload.php";

date_default_timezone_set('UTC');
if (DEBUG) {//错误显示的快关打开
	$whoops = new \Whoops\Run;
	$errorTitle = '框架出错了';
	$option = new \Whoops\Handler\PrettyPageHandler();
	$option->setPageTitle($errorTitle);
	$whoops ->pushHandler($option);
	$whoops->register();
	ini_set('display_error', 'On');
} else {
	ini_set('dispaly_error', 'Off');
}
//dump($_SERVER);exit();
include CORE.'/common/function.php';
include CORE.'/imooc.php';
spl_autoload_register('\core\imooc::load');//当使用一个类不存在时，会触发这个方法
\core\imooc::run();