<?php
namespace Home\Controller;
use Think\Controller;
class NovelPageController extends Controller {
	//
	public function continue_write(){
		$this->show();
	}
	//
	public function novel_manage(){
		if ($_SESSION['user']){
			$this->display("Novel/novel_manage");
		}else {
			$this->display('UserPage/login');
		}
	}
	//跳转到作品新增页面
	public function novel_add(){
		if ($_SESSION['user']){
			$this->display();
		}else {
			$this->display('UserPage/login');
		}
	}
}