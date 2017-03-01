<?php

namespace Home\Controller;

use Think\Controller;
use Home\Model\BranchModel;

class BranchController extends Controller {
	/*跳转到Branch管理页面*/
	public function branch_managePage(){
		if ($_SESSION['user']){
			$this->display();
		}else {
			$this->display('UserPage/login');
		}
	}
	/*
	 * 增加Branch有一下集中情况:
	 * 1.刚创建novel是初始化的main branch;
	 * 2.平时创建的分支
	 */
	
	/*
	 * 1.初始化主分支，main=1
	 * 2.需要的得到的参数有：
	 * (1).name
	 * (2).novel_id
	 * (3).author_id
	 * (4).introl
	 */
	public static function initOne($data) { // $data中包含1,2,3,4
		$branch ['name'] = $data ['name'];
		$branch ['type'] = $data ['type'];
		$branch ['novel_id'] = $data ['id'];
		$branch ['author2_id'] = $data ['author_id'];
		$branch ['intro'] = $data ['intro'];
		$branch ['main'] = 1;
		$branchModel = new BranchModel();
		$branchModel->add ($branch);
	}
	// 2创建平时分支，main=0
	public function forkOne() {
		
	}
	/* 作者查看自己的作品 :查看自己所创建的所有分支*/
	public function branch_manage(){
		$branch = new BranchModel();
		$result = $branch->findById ( $_SESSION ['user'] ['id'] );
		$this->ajaxReturn($result);
	}
	/*根据作者名字关键字搜索作品*/
	public function findByAuthor(){
		$branchModel = new BranchModel();
		$res = $branchModel->findByAuthor($_SESSION['other']);
		$this->ajaxReturn($res);
	}
	
}