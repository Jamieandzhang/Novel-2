<?php
namespace Home\Model;
class CommonService{
	public static function strMake($str){
		return md5(sha1($str));
	}
	public static function strGenerate(){
		
	}
	public static function str2file($txt){
		/**
		 * 将文字保存到txt文件中,放到硬盘上而后返回保存路径
		 */
		$path = CommonService::getFilePath();
		$filename = mktime();
		$filepath = $path.$filename;
		$handle = fopen($filepath, 'w');
		fwrite($handle, $txt);
		return $filepath;
	}
	
	private static function getFilePath(){
		$chr = chr(rand(97, 122));
		mkdir('wordfile/'.$chr);
		return 'wordfile/'.$chr.'/';
	} 
	public static function file2str($path){
		return file_get_contents($path);
	}
}