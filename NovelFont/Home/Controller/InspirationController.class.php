<?php
namespace Home\Controller;

use Think\Controller;
use Home\Model\InspirationModel;

class InspirationController extends Controller{
	//跳转到灵感新增页面
	public function toAddInsp(){
		$this->display();
	}
	public function ins_managePage(){
		$this->display();
	}
	/*查看自己写下的灵感*/
	public function ins_manage(){
		$insp = new InspirationModel();
		$result = $insp->findById ( $_SESSION ['user'] ['id'] );
		$this->ajaxReturn($result);
	}
}