<?php
namespace Home\Model;

use Think\Model;

class BranchModel extends Model{
	public function findById($id){
		$where ['author2_id'] = $id;
		$branch = new Model ('branch');
		return $branch->where($where)->select();
	}
}