var vm = new Vue({
    el:'#app', //监听的范围
    data:{
        title:'Hello Vue',
        productList:[]
    },
    filters:{

    },
    mounted:function() {
        this.cartView();
    },
    methods:{
        cartView:function (){
            var _this = this;
            this.$http.get('../Branch/branch_manage').then(function(res){
                _this.productList = res.body;
            });
        }
    }
});
Vue.filter();