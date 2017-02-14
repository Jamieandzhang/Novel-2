<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1">
	<title>增添新的章节</title>
	<link rel="stylesheet" href="/Novel/NovelFont/Public/css/bootstrap.css">
	<script src="/Novel/NovelFont/Public/js/jquery-3.1.1.js" type="text/javascript"></script>
	<script src="/Novel/NovelFont/Public/js/bootstrap.js" type="text/javascript"></script>
	<script src="/Novel/NovelFont/Public/ckeditor/ckeditor.js" type="text/javascript"></script>
	<style type="text/css" media="screen">
		body{padding: 70px;}
	</style>
</head>
<body>
	<div>
		<nav class="navbar navbar-default navbar-inverse navbar-fixed-top" role="navigation">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button> <a class="navbar-brand" href="/novel/index.php/Home/Index">小说接龙网</a>
			</div>
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li>
						<a href="/novel/index.php/Home/Index">首页</a>
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
			<!--左菜单-->	
			<div class="col-md-2 column" style="display: inline-block">	
				<a href="/novel/index.php/Home/Branch/branch_managePage" class="list-group-item  gap" title="New_Novel">作品管理</a>

                <a href="/novel/index.php/Home/Inspiration/ins_managePage" class="list-group-item  gap" title="Continue">灵感随笔</a>

				<a href="/novel/index.php/Home/NovelPage/continue_write" class="list-group-item  gap" title="Continue">灵感随笔</a>

				<a href="/novel/index.php/Home/NovelPage/" class="list-group-item  gap" title="By yourself">关注你的人</a>
				<a href="/novel/index.php/Home/NovelPage/" class="list-group-item  gap" title="By yourself">你关注的人</a>
			</div>



			<!-- 右侧章节创建表单 -->
			<div class="col-md-8 column">
				<h>
					由于网站暂时不完善，所以我们建议现将文本在您的计算机中编辑好，然后黏贴到编辑区
				</h>
				<form action="/novel/index.php/Home/Chapter/addChapter" method="post" class="form-horizontal" role="form">
						<div class="form-group">
							<div class="col-sm-10">
								<input type="text" class="form-control" placeholder="章节数：例如 10" name="chapterNum"/>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-10">
								<input type="text" class="form-control" placeholder="章节名称： 例如 猴王出世" name="chapterName" />
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-10">
								<textarea name="txt"></textarea>
							</div>
							<script>

							    CKEDITOR.replace('txt');

							    CKEDITOR.replace( 'txt' );

							</script>
						</div>
						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-10">
								 <button type="submit" class="btn btn-default">保存</button>
							</div>
						</div>
				</form>
			</div>
	</div>
		</div>
</body>
</html>