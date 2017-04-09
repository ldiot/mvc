<?php
namespace core\lib;

class conf
{
	static public $conf = array();

	static public function get($name, $file)//加载配置文件中的单个配置
	{
		//1.判断配置文件是否存在
		//2.判断配置是否存在
		//3.缓存配置                       
		if (isset(self::$conf[$file])) {
			return self::$conf[$file][$name]; 
		} else {    
		    //p(1);                                
			$path = IMOOC.'/core/config/'.$file.'.php';
			// p($file);exit();
			if (is_file($path)) {
				$conf = include $path;
				if (isset($conf[$name])) {
					self::$conf[$file] = $conf;
					return $conf[$name];
				} else {
					throw new \Exception('没有这个配置项'.$name);
				}
			} else {
				throw new \Exception('找不到配置文件'.$file);
			}
		}
	}

	static public function all($file)//引入整个配置文件
	{
		if (isset(self::$conf[$file])) {
			return self::$conf[$file]; 
		} else {    
		    //p(1);                                
			$path = IMOOC.'/core/config/'.$file.'.php';
			//p($path);
			// p($file);exit();
			if (is_file($path)) {
				$conf = include $path;
				self::$conf[$file] = $conf;
				return $conf;
			} else {
				throw new \Exception('找不到配置文件'.$file);
			}
		}
	}
}