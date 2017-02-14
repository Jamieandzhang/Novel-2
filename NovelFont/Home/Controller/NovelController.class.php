<?php

namespace Home\Controller;

use Think\Controller;
use Home\Model\NovelModel;

class NovelController extends Controller {
	/*
	 * 小说对象控制器要实现一下功能：
	 * 1.增加新的小说
	 * 2.更新小说（修改文章，增加新的章节等等）
	 * 3.查看小说
	 */
	public function addNovel() {
		if ('' != str_replace ( " ", "", $_POST ['novelName'] )) {
			$data ['name'] = $_POST ['novelName'];
		}
		if ('' != str_replace ( " ", "", $_POST ['novelType'] )) {
			$data ['type'] = $_POST ['novelType'];
		}
		if ('' != str_replace ( " ", "", $_POST ['novelIntro'] )) {
			$data ['intro'] = $_POST ['novelIntro'];
		}
		if (3 == count ( $data )) { // 判断name type intro是否都已填充完毕
			$data ['author_id'] = $_SESSION ['user'] ['id'];
			$data ['id'] = mt_rand(0,9999999);
			//同时初始化主分支
			BranchController::initOne($data);
			$novel = new NovelModel ();
			$bool = $novel->add ( $data );
			if ($bool) {
				echo "恭喜您创建作品成功，已添加到作品管理中！！！";
			} else {
				echo "请检查您所填写的信息！！！";
			}
		} else {
			$this->display ( 'NovelPage/start' );
		}
		//
	}
	
	public function novel_manage() {
		$novel = new NovelModel ();
		$result = $novel->findById ( $_SESSION ['user'] ['id'] );
		$this->ajaxReturn($result);
	}
}