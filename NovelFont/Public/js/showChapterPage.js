var vm = new Vue({
    el:'#app', //监听的范围
    data:{
        chapter:[]
    },
    filters:{

    },
    mounted:function() {
        this.showChapter();
    },
    methods:{
        showChapter:function (){
            var _this = this;
            this.$http.get('../Chapter/showChapter').then(function(res){
                _this.chapter = res.body;
            });
        }
    }
});
Vue.filter();