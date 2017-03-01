<?php

namespace Home\Model;

use Think\Model;

class NovelModel extends Model {
	public function findById($id) {
		$where ['author_id'] = $id;
		$novel = new Model ('novel');
		return $novel->where($where)->select();
	}
	
}