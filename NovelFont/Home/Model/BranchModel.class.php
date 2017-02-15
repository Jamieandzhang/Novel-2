<?php
namespace Home\Model;

use Think\Model;

class BranchModel extends Model{
	public function findById($author2_id){
		$where ['author2_id'] = $author2_id;
		$branch = new Model ('branch');
		return $branch->where($where)->select();
	}
}