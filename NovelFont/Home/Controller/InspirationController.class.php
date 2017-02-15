<?php
namespace Home\Controller;

use Think\Controller;
use Home\Model\InspirationModel;

class InspirationController extends Controller{
	//跳转到灵感新增页面
	public function toAddInsp(){
		$this->display();
	}
	//添加Inspiration
	public function addInsp(){
		//先判断字段填写完整否
		if ('' != str_replace ( " ", "", $_POST ['insName'] )) {
			$data ['name'] = $_POST ['insName'];
		}
		if ('' != str_replace ( " ", "", $_POST ['txt'] )) {
			$data ['txt'] = $_POST ['txt'];
		}
		$data ['author3_id'] = $_SESSION ['user'] ['id'];
		if (3 == count ( $data )){
			$insp = new InspirationModel();
			$bool = $insp->add($data);
			if ($bool) {
				echo "感谢您将您的思想保存在我们这里！！！";
			} else {
				echo "请检查您所填写的信息！！！";
			}
		}
	}
	//跳转到Inspiration管理页面
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