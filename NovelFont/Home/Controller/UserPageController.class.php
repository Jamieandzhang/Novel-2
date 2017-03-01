<?php
namespace Home\Controller;
use Think\Controller;
class UserPageController extends Controller {
	//登录页面
	public function login(){
		$this->display();
	}
	//注册页面
	public function regist() {
		$this->display();
	}
	
	//查看别人的主页
	public function otherMain(){
		$_SESSION['other'] = $_GET['other'];
		$this->display();
	}
}