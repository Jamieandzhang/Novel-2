var vm = new Vue({
    el:'#app', //监听的范围
    data:{
        userInfo:[],
        products:[]
    },
    filters:{

    },
    mounted:function() {
        this.getUserInfo();
        this.getTheProducts();
    },
    methods:{
        getUserInfo:function (){
            var _this = this;
            this.$http.get('../User/getUserInfo').then(function(res){
                _this.userInfo = res.body;
            });
        },
        getTheProducts:function() {
            var _this = this;
            this.$http.get('../Branch/findByAuthor').then(function(res){
                _this.products = res.body;
            });
        }
    }
})