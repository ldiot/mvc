<?php
namespace app\ctrl;
use core\lib\model;
class indexCtrl extends \core\imooc
{
	//所有留言
	public function index()
	{
         $data = 'Hello World';
         $this->assign('data',$data);
         $this->display('index.html');
	}

	public function test()
	{
		$data = 'test';
		$this->assign('data', $data);
		$this->display('test.html');
	}

}