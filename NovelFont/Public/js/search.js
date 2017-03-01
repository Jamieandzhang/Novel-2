// Vue.component('my-component', {
//   template: '<nav class="navbar navbar-default navbar-inverse navbar-fixed-top" role="navigation">'+
//         '<div class="navbar-header">'+
//             '<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button> <a class="navbar-brand" href="__APP__/Home/Index">小说接龙网</a>'+
//        ' </div>'+
//         '<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">'+
//             '<ul class="nav navbar-nav">'+
//                 '<li>'+
//                     '<a href="__APP__/Home/Index">首页</a>'+
//                 '</li>'+
//                 '<li class="dropdown">'+
//                     '<a href="#" class="dropdown-toggle" data-toggle="dropdown">下载APP<strong class="caret"></strong></a>'+
//                    ' <ul class="dropdown-menu">'+
//                         '<li>'+
//                            ' <a href="#">Android</a>'+
//                         '</li>'+
//                         '<li>'+
//                            ' <a href="#">IPhone</a>'+
//                        ' </li>'+
//                     '</ul>'+
//                 '</li>'+
//             '</ul>'+
//             '<form method="get" action="__APP__/Home/Search/toSearchResultPage"  class="navbar-form navbar-left" role="search">'+
//                 '<div class="form-group">'+
//                     '<input type="text" name="kWord" class="form-control" placeholder="作者/小说" />'+
//                 '</div>'+
//                 '<button type="submit" class="btn btn-default">搜索</button>'+
//             '</form>'+
//         '</div>'+
//     '</nav>'
// })

var vm = new Vue({
    el:'#app', //监听的范围
    data:{
        productList:[]
    },
    filters:{

    },
    mounted:function() {
        this.ins_manage();
    },
    methods:{
        ins_manage:function (){
            var _this = this;
            this.$http.get('../Inspiration/ins_manage').then(function(res){
                _this.productList = res.body;
            });
        }
    }
});
