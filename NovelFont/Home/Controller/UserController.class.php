<?php

namespace Home\Controller;

use Think\Controller;
use Home\Model\UserModel;
use Home\Model\CommonService;

class UserController extends Controller {
	public function addUser() {
		$user = new UserModel ();
		if ($_POST ['passWord2'] == $_POST ['passWord']) {
			$data['name'] = $_POST ['userName'];
			$data['password'] = CommonService::strMake ( $_POST ['passWord'] );
			$user->add ($data);
			$this->display('UserPage/login');
		} else {
			$this->display ( "UserPage/regist" );
		}
	}
	public function delUser() {
	}
	public function updateUser() {
	}
	//用户登陆控制器
	public function login(){
		$user = new UserModel();
		//在数据库中查询是否存在此用户,$result是一个包含符合条件用户信息的二维数组
		$result = $user->findUser($_POST['userName'], CommonService::strMake($_POST['passWord']));
		//若不存在
		if(!$result){
			$this->display('UserPage/login');
		}else{ //若存在
			//将用户信息保存在session中
			$_SESSION['user'] = $result[0];
			$this->display("Branch/branch_managePage");
		}
	}
	//用户注销控制器
	public function logout(){
		//为了安全起见，先判断session中是否存有用户信息
		if ($_SESSION['user']) {
			session_unset();//将已登录的session置为空
			$this->display('Index/index');
		}else{
			$this->display('Index/index');
		}
	}
	//获取用户信息
	public function getUserInfo(){
		$user = new UserModel();
		$res = $user->getUserByName($_SESSION['other']);
		$this->ajaxReturn($res);
	}
}