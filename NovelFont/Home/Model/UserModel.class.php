<?php
namespace Home\Model;
use Think\Model;

class UserModel extends Model{
	
	public function findUser($username,$password){
		$where['name'] = $username;
		$where['password'] = $password;
		$user = M("user");
		return $user->where($where)->select();
	}
}