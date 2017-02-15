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
Vue.filter();