var vm = new Vue({
    el:'#app', //监听的范围
    data:{
        chapterList:[]
    },
    filters:{

    },
    mounted:function() {
        this.showChaptersList();
    },
    methods:{
        showChaptersList:function (){
            var _this = this;
            this.$http.get('../Chapter/chapterList').then(function(res){
                _this.chapterList = res.body;
            });
        }
    }
});
Vue.filter();