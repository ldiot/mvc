<?php
namespace app\model;

use core\lib\model;

class dModel extends model
{
	public $table = 'a';

    public function getOne($userid)
    {
    	return $this->select($this->table, '*', array(
    		'userid' => $userid
    		));
    }

	public function setSession($username, $userid) {
		session_start();//启动session的初始化
		$array = $this->getOne($userid);
		if ($array['username'] = $username) {
		return $_SESSION['username'] = $username;//注册session变量，赋值为一个用户的名称
		return $_SESSION['userid'] = $userid;//注册session变量，赋值为一个用户id
		}
	}

	public function unsetSession()
	{
		session_destroy();
	}
}
}