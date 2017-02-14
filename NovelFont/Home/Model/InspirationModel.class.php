<?php
namespace Home\Model;
use Think\Model;

class InspirationModel extends Model{
	
	public function findById($id){
		$where ['author3_id'] = $id;
		$insp = new Model ('inspiration');
		return $insp->where($where)->select();
	}
}