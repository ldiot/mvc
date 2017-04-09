<?php
namespace app\model;
use core\lib\model;

class cModel extends model
{
	public $table = 'c';

	public function lists()
	{
		$res = $this->select($this->table, '*');
		return $res;
	}

	public function getOne($idname)
	{
		$ret = $this->get($this->table, '*', array(
			'idname'=>$idname
			));
		return $ret;
	}

	public function setOne($idname, $sort)
	{
		return $this->update($this->table, $sort, array(
			'id' => $idname
			));
	}

	public function delOne($id)
	{
		return $this->delete($this->table, array(
			'id'=>$id
			));
	}

	public function getCookie($name, $value)
	{
		setrawcookie($name, $value, time()+360);
	}
}