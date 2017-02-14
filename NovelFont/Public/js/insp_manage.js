var vm = new Vue({
    el:'#app', //监听的范围
    data:{
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
            this.$http.get('../Branch/insp_manage').then(function(res){
                _this.productList = res.body;
            });
        }
    }
});
Vue.filter();