<?php

namespace Home\Controller;

use Think\Controller;

class IndexController extends Controller {
	public function index() {
    	//先判断用户有没有登录
    	if($_SESSION['user']){//若已经登录这显示已登录的网页
			$this->display (index_logined);
		}else{//若未登录，这显示有登陆按钮的页面
			$this->display();
		}
	}
}