<?php
	
	session_save_path("tmp/");
	session_start();
	
	define('APP_DEBUG', true);
	
    define('APP_NAME', 'Novel');
    define('APP_PATH', './NovelFont/');
    require './ThinkPHP/ThinkPHP.php';
    