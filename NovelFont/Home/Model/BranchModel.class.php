<?php
namespace Home\Model;

use Think\Model;

class BranchModel extends Model{
	public function findById($author2_id){
		$where ['author2_id'] = $author2_id;
		$branch = new Model ('branch');
		return $branch->where($where)->select();
	}
	//根据作品名字查找作品
	public function findByName($name){
		$branch = new Model ('branch');
		return $branch->query("select n.name as mainbranch, u.name as author,b.* from novel as n, user as u,branch as b where b.name like'%".$name."%'and u.id=b.author2_id and n.id=b.novel_id");
	}
	//根据作品类型查找作品
	public function findByType($type){
		$branch = new Model ('branch');
		return $branch->query("select n.name as mainbranch, u.name as author,b.* from novel as n, user as u,branch as b where b.type like'%".$type."%'and u.id=b.author2_id and n.id=b.novel_id");
	}
	//根据作品作者查找作品
	public function findByAuthor($author){
		$branch = new Model('branch');
		return $branch->query("select n.name as mainbranch, u.name as author,b.* from novel as n, user as u,branch as b where u.name like'%".$author."%'and u.id=b.author2_id and n.id=b.novel_id");
	}
	//查找作品所属的novel
	public function findNovel($id){
		$branch = new Model();
		$nid = $branch->query("select novel_id from branch where id=".$id);
		return $branch->query('select name,id from branch where novel_id='.$nid[0]["novel_id"]);
	}
}