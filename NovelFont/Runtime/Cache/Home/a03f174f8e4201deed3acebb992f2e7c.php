<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1">
	<title>作品管理</title>
	<link rel="stylesheet" href="/Novel/NovelFont/Public/css/bootstrap.css">
	<script src="/Novel/NovelFont/Public/js/jquery-3.1.1.js" type="text/javascript"></script>
	<script src="/Novel/NovelFont/Public/js/bootstrap.js" type="text/javascript"></script>
	<style type="text/css" media="screen">
		body{padding: 70px;}
	</style>
</head>
<body>
<div id="app">
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
	<!-- 头部结束 -->
	
	<div class="row clearfix">
		<div class="col-md-2 column" style="display: inline-block">
			<!--左菜单-->
			<a href="/Novel/index.php/Home/Branch/branch_managePage" class="list-group-item  gap" title="New_Novel">作品管理</a>
			<a href="/Novel/index.php/Home/Inspiration/ins_managePage" class="list-group-item  gap" title="Continue">灵感随笔</a>
			<a href="/Novel/index.php/Home/NovelPage/" class="list-group-item  gap" title="By yourself">关注你的人</a>
			<a href="/Novel/index.php/Home/NovelPage/" class="list-group-item  gap" title="By yourself">你关注的人</a>
		</div>

		<div class="col-md-8 column">
			<ul class="nav navbar-right">
				<a href="/Novel/index.php/Home/Inspiration/toAddInsp">灵感来了</a>
			</ul>
			<table class="table table-condensed">
				<thead>
				<tr>
					<!--<th>作品ID</th>-->
					<th>灵感名称</th>
					<th>操作<th>
				</tr>
				</thead>
				<tbody>
				<tr  v-for="item in productList">
					<!--<td>{{item.id}}</td>-->
					<!--<input type="text"  />-->
					<td><a href="#">{{item.name}}</a></td>
					<td><a v-bind:href="'/Novel/index.php/Home/Chapter/toAddPage?branch_id='+item.id">修改</a><td>
				</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>
<script src="/Novel/NovelFont/Public/js/vue.js"></script>
<script src="/Novel/NovelFont/Public/js/vue-resource.js"></script>
<script src="/Novel/NovelFont/Public/js/ins_manage.js"></script>
</body>
</html>