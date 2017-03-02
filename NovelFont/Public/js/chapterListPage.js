var vm = new Vue({
    el:'#app', //监听的范围
    data:{
        chapterList:[],
        branches:[]
    },
    filters:{

    },
    mounted:function() {
        this.showChaptersList();
        this.getBranches();
    },
    methods:{
        showChaptersList:function (){
            var _this = this;
            this.$http.get('../Chapter/chapterList').then(function(res){
                // for (i in res.body) {
                //      res.body[i]['txt']=res.body[i]['txt'].substring(0, 50);
                     
                // }
                _this.chapterList = res.body;
            });
        },
        getBranches:function() {
            var _this = this;
            this.$http.get('../Branch/sameNoveId').then(function(res){
                _this.branches = res.body;
            })
        }
    }
});
Vue.filter();