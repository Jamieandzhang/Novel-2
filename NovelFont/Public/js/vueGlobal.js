Vue.component('my-head', {
  template: 
    '<nav class="navbar navbar-default navbar-inverse navbar-fixed-top" role="navigation">'+
        '<div class="navbar-header">'+
            '<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button> <a class="navbar-brand" href="/Novel/index.php/Home/Index">小说接龙网</a>'+
       ' </div>'+
        '<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">'+
            '<ul class="nav navbar-nav">'+
                '<li>'+
                    '<a href="/Novel/index.php/Home/Index">首页</a>'+
                '</li>'+
                '<li class="dropdown">'+
                    '<a href="#" class="dropdown-toggle" data-toggle="dropdown">下载APP<strong class="caret"></strong></a>'+
                   ' <ul class="dropdown-menu">'+
                        '<li>'+
                           ' <a href="#">Android</a>'+
                        '</li>'+
                        '<li>'+
                           ' <a href="#">IPhone</a>'+
                       ' </li>'+
                    '</ul>'+
                '</li>'+
            '</ul>'+
            '<form method="get" action="/Novel/index.php/Home/Search/toSearchResultPage"  class="navbar-form navbar-left" role="search">'+
                '<label class="text-info" >小说名称</label><input type="radio" checked="checked" name="searchType" value="novelName"/>'+
                '<label class="text-info" >小说类型</label><input type="radio" name="searchType" value="novelType"/>'+
                '<label class="text-info" >小说作者</label><input type="radio" name="searchType" value="novelAuthor"/>'+

                 '<div class="form-group">'+
                    '<input type="text" name="kWord" class="form-control" placeholder="选择搜索类型" />'+
                '</div>'+
                '<button type="submit" class="btn btn-default">搜索</button>'+
            '</form>'+
            '<ul class="nav navbar-nav navbar-right">'+
              '<li>'+
                 '<a href="/Novel/index.php/Home/Branch/branch_managePage">个人中心</a>'+
              '</li>'+
          '</ul>'+
        '</div>'+
    '</nav>'
})


Vue.component('my-left',{
  template:
      '<div class="col-md-2 column">'+
      '<a href="/Novel/index.php/Home/Branch/branch_managePage" class="list-group-item  gap" title="New_Novel">作品管理</a>'+
      '<a href="/Novel/index.php/Home/Inspiration/ins_managePage" class="list-group-item  gap" title="Continue">灵感随笔</a>'+
      '<a href="/Novel/index.php/Home/NovelPage/" class="list-group-item  gap" title="By yourself">关注你的人</a>'+
      '<a href="/Novel/index.php/Home/NovelPage/" class="list-group-item  gap" title="By yourself">你关注的人</a>'+
      '</div>'
})