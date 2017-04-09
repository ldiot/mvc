<?php
namespace core;

class imooc
{
	public static $classMap = array();
	public $assign;

	static public function run()
	{
		\core\lib\log::init();
		//\core\lib\log::log($_SERVER, 'server');
		$route = new \core\lib\route();
		$ctrlClass = $route->ctrl;
		$action = $route->action;
		$ctrlfile = APP.'/ctrl/'.$ctrlClass.'Ctrl.php';
		$ctrlClass = '\\'.MODULE.'\ctrl\\'.$ctrlClass.'Ctrl';
		//p($ctrlClass);exit();
		if (is_file($ctrlfile)) {
			include $ctrlfile;
			$ctrl = new $ctrlClass();
			$ctrl->$action();
			//p($ctrlClass);
			\core\lib\log::log('ctrl:'.$ctrlClass.'              '.'action:'.$action);
		} else {
			throw new \Exception('找不到控制器'.$ctrlClass);
		}
	}

	static public function load($class)
	{
		//自动加载类库
		//new \core\route();
		//$class = '\core\route';
		//IMOOC.'/core/route.php';

		if (isset($classMap[$class])) {
			return true;
		} else {
			$class = str_replace('\\', '/', $class);//被替换的值   替换成的值
			$file = IMOOC.'/'.$class.'.php';
			if (is_file($file)) {
				include $file;
				self::$classMap['$class'] = $class;
			} else {
				return false;
			}
		}
	}

	public function assign($name,$value)
	{
		$this->assign[$name] = $value;
	}

	public function display($file)
	{
		$file = APP.'/views/'.$file;
		if (is_file($file)) {

			//\Twig_Autoloader::register();
			$loader = new \Twig_Loader_Filesystem(APP.'/views');
			$twig = new \Twig_Environment($loader, array(
				'cache' => IMOOC.'/path/to/compilation_cache',
				'debug' => DEBUG
				));
		}
		$template = $twig->loadTemplate('index.html');//加载模板文件
		$template->display($this->assign?$this->assign:'');
	}
}