<?php
namespace Home\Controller;

use Think\Controller;

class NewController extends Controller{
	public function index(){
		$arr =file_get_contents("wordfile/n/1488466027");
// 		$arr = file("wordfile/h/1488467060");
		var_dump($arr);
	}
}