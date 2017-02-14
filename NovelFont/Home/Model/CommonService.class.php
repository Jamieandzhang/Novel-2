<?php
namespace Home\Model;
class CommonService{
	public static function strMake($str){
		return md5(sha1($str));
	}
	public static function strGenerate(){
		
	}
}