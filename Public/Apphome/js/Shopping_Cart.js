
//构造函数
function Category() {
    this.num=0; //复选框的数量
    this.allnum=0; //商品的总数量
    this.allCateMoney=0; //显示商品数量框的总和
    this.maxNum=10;  //商品件数最大为10
    this.doms={
        allCheckbox:document.getElementById("shop-checkboxs"),  //底部全选按钮
        TopNum:document.getElementById("topNum"),  //购物车商品的数量
        SingChecked:document.getElementsByClassName("shop-checkbox"),  //单选按钮
        oneAllNum:document.getElementsByClassName("cgood-pc-count"),  //单件商品的数量
        Price:document.getElementsByClassName("cgood-pc-price-now"),  //单件商品折扣之后的价格
        bottomAllNum:document.getElementsByClassName("allnum"),  //商品总数量
        totalPrice:document.getElementById("all-total")  //商品总价格
    }
}

// 方法
Category.prototype={

    //复选框事件
    oneChecked:function () {
        for(var i=0;i<this.doms.SingChecked.length;i++){
            this.doms.SingChecked[i].index=i;
            var that=this;
            //全选的复选框的状态
            function TrueChecked() {
                that.doms.allCheckbox.checked=true;
            }
            function FalseChecked() {
                that.doms.allCheckbox.checked=false;
            }

            this.doms.SingChecked[i].onclick=function () {
                var thatIndex=this.index;
                 if(this.checked){
                     that.num++;
                     // that.allMoney();
                    if(that.num=that.doms.SingChecked.length){
                        TrueChecked();
                    }
                }
                else {
                    that.num--;
                    // that.allMoney();
                    FalseChecked();
                }
            }
        }
    },

    //复选框情况
    allCheckChlid:function (that){
        for(var i=0;i<this.doms.SingChecked.length;i++){
            if(that.checked){
                this.doms.SingChecked[i].checked=true;
            }
            else {
                this.doms.SingChecked[i].checked=false;
            }
        }
    },

    //全选事件
    allChecked:function () {
        var that=this;
        this.doms.allCheckbox.onclick = function () {
            that.allCheckChlid(this);
            // that.allMoney();
            if(this.checked){
                that.num=that.doms.SingChecked.length;
            }
            else {
                that.num=0;
            }
        }
    },

    Numchange:function () {
        var that=this;
        for(var i=0;i<this.doms.SingChecked.length;i++){
            function danji(t) {
                var danNum = that.doms.oneAllNum[t.index].innerText;
                var danPrice = that.doms.Price[t.index].innerText;
                that.doms.Price[t.index].innerText=(danNum*danPrice).toFixed(2);
            }
        }
    },

    //顶部的商品数量
    ShoppingNum:function () {
        for(var i=0;i<this.doms.SingChecked.length;i++){
            this.doms.TopNum.innerText = this.doms.SingChecked.length-1;
        }
    },

    allMoney:function () {
        for(var i=0;i<this.doms.SingChecked.length;i++){
            if(this.doms.SingChecked[i].checked){
                //获取数量
                this.allnum+=parseFloat(this.doms.oneAllNum[i].innerText);
                //获取总金额
                this.allCateMoney+=parseFloat(this.doms.Price[i].innerText);
            }
        }
        this.doms.bottomAllNum.innerText = this.allnum;
        this.doms.totalPrice.innerText="￥"+(this.allCateMoney).toFixed(2);
        this.allnum=0;
        this.allCateMoney=0;
    }


};

var cate=new Category();
cate.oneChecked();
cate.allChecked();
cate.Numchange();
cate.ShoppingNum();


