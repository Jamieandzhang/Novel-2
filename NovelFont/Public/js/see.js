var vm = new Vue({
    el:'#app', //监听的范围
    data:{
        novels:[]
    },
    filters:{

    },
    mounted:function() {
        this.searchNovel();
    },
    methods:{

        searchNovel:function (){
            var _this = this;
            this.$http.get('../Search/search').then(function(res){
                _this.novels = res.body;
            });
        }
    }
});
