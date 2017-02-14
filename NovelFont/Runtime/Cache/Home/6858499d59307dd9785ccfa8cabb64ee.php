<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>写下你的想法</title>
	<link rel="stylesheet" href="/Novel/NovelFont/Public/css/bootstrap.css">
	<script src="/Novel/NovelFont/Public/js/jquery-3.1.1.js" type="text/javascript"></script>
	<script src="/Novel/NovelFont/Public/js/bootstrap.js" type="text/javascript"></script>
	<script src="/Novel/NovelFont/Public/ckeditor/ckeditor.js" type="text/javascript"></script>
	<style type="text/css" media="screen">
		body{padding: 70px;}
	</style>
</head>
<body>
			<!--导航-->
			<nav class="navbar navbar-default navbar-inverse navbar-fixed-top" role="navigation">
				<div class="navbar-header">
					 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button> <a class="navbar-brand" href="/Novel/index.php/Home/Index">小说接龙网</a>
				</div>
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li>
							 <a href="/Novel/index.php/Home/Index">首页</a>
						</li>
						<li class="dropdown">
							 <a href="#" class="dropdown-toggle" data-toggle="dropdown">下载APP<strong class="caret"></strong></a>
							<ul class="dropdown-menu">
								<li>
									 <a href="#">Android</a>
								</li>
								<li>
									 <a href="#">IPhone</a>
								</li>
							</ul>
						</li>
					</ul>
					<form class="navbar-form navbar-left" role="search">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="作者/小说" />
						</div> <button type="submit" class="btn btn-default">搜索</button>
					</form>
				</div>
			</nav>
			
			<div class="row clearfix">
				<div class="col-md-2 column">
					<!--左菜单-->
					<a href="/Novel/index.php/Home/Branch/branch_managePage" class="list-group-item  gap" title="New_Novel">作品管理</a>
					<a href="/Novel/index.php/Home/NovelPage/continue_write" class="list-group-item  gap" title="Continue">灵感随笔</a>
					<a href="/Novel/index.php/Home/NovelPage/" class="list-group-item  gap" title="By yourself">关注你的人</a>
					<a href="/Novel/index.php/Home/NovelPage/" class="list-group-item  gap" title="By yourself">你关注的人</a>
				</div>
				<form role="form" action="/Novel/index.php/Home/Novel/addNovel" method="post">
					<div class="col-md-8 column">
						<div class="form-group">
						    <label for="input">你打算的小说的名称</label>
			      			<input type="text" name="novelName" class="form-control" placeholder="小说名">
						</div>
						<div class="form-group">
						    <label for="input">你打算写的小说的类型：如玄幻、科幻、言情等</label>
			      			<input type="text" name="novelType" class="form-control" placeholder="小说类型">
						</div>
						<div class="form-group">
						    <label for="input">小说简介</label>
			      			<input type="text" name="novelIntro" class="form-control" placeholder="小说简介">
						</div>
						<div class="form-group">
				            <button type="submit" class="btn btn-default">开始旅程</button>
				    	</div>
					</div>
				</form>	
			</div>
</body>
</html>