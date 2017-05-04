
/*-------------//全部商品、优惠、库存紧张的切换------*/
for(var i=0;i<$(".s_c_list_a").length;i++){

    $(".s_c_list_a").eq(i).on("click",function () {

        for(var i=0;i<$(".s_c_list_a").length;i++){
            $(".s_c_list_a").eq(i).removeClass("s_c_cur");
        }
        $(this).addClass("s_c_cur");
    });
}


/*----------------------------开始------------------------------------*/

function Category() {   //构造函数
    this.num=0;//复选框选中的数量
    this.allNum=0;//商品的总数量
    this.allCateMoney=0;//显示商品数量框的总和
    this.maxNum=10;//
    this.doms={
        allCheckbox:document.getElementsByClassName("s_all")[0],
        //商品的数量
        // oneCheckboxNum:document.getElementsByClassName("goodsNum"),

        //单选的复选框事件
        oneCheckbox:document.getElementsByClassName("s_shopall"),
        oneCheckboxAfter:document.getElementsByClassName("s_c_cart_thcheck"),
        //上面的全选按钮
        topAllCheck:document.getElementById("s_all_h"),
        //下面的全选按钮
        bottomAllCheck:document.getElementById("s_all_f"),
        //增加商品数量的按钮
        addCategoryNum:document.getElementsByClassName("s_c_cart_num_add"),
        //减少商品数量的按钮
        reduceCategoryNum:document.getElementsByClassName("s_c_cart_num_reduce"),
        //显示商品数量的框
        showCategoryInput:document.getElementsByClassName("s_c_cart_num_input"),
        //商品折扣之后的价格
        lastPrice:document.getElementsByClassName("cart_bold"),
        //商品的小计
        oneCategoryAll:document.getElementsByClassName("total"),
        //删除按钮
        deleteCate:document.getElementsByClassName("s_c_cart_detele"),
        //总商品数量
        allCategoryNum:document.getElementsByClassName("goodsNum")[0],
        //总的金额
        allCategoryMoney:document.getElementsByClassName("s_c_cart_paybar_info_cost")[0],
        //去付款按钮的样式
        goBuy:document.getElementById("payBtn2"),
        goBuy1:document.getElementById("payBtn")
    }
}

//方法：
Category.prototype={
    oneCheck:function () {
        for(var i=0;i<this.doms.oneCheckbox.length;i++){
            this.doms.oneCheckbox[i].index=i;
            this.doms.oneCheckboxAfter[i].index=i;
            var that=this;
            //全选的复选框的状态
            function checkTrue() {
                that.doms.bottomAllCheck.checked=true;
                that.doms.topAllCheck.checked=true;
            }
            function checkFalse() {
                that.doms.bottomAllCheck.checked=false;
                that.doms.topAllCheck.checked=false;
            }
            //奇数复选框
            this.doms.oneCheckbox[i].onclick=function () {
                var thatIndex=this.index;
                if(this.checked){
                    that.num++;
                    that.doms.oneCheckboxAfter[thatIndex].checked=true;
                    that.allMoney();
                    that.goBuyNow();
                    if(that.num==that.doms.oneCheckbox.length){
                        checkTrue();
                    }
                }else{
                    that.num--;
                    that.doms.oneCheckboxAfter[thatIndex].checked=false;
                    that.allMoney();
                    that.goBuyNow();
                    checkFalse();
                }
            };
            //偶数的复选框
            this.doms.oneCheckboxAfter[i].onclick=function () {
                var thatIndex=this.index;
                if(this.checked){
                    that.num++;
                    that.doms.oneCheckbox[thatIndex].checked=true;
                    that.allMoney();
                    that.goBuyNow();
                    if(that.num==that.doms.oneCheckbox.length){
                        checkTrue();
                    }
                }else{
                    that.num--;
                    that.doms.oneCheckbox[thatIndex].checked=false;
                    that.allMoney();
                    that.goBuyNow();
                    checkFalse();
                }
            };
        }
    },
    allCheckChlid:function (that) {
        for(var i=0;i<this.doms.oneCheckbox.length;i++) {
            if (that.checked) {
                this.doms.oneCheckbox[i].checked = true;
                this.doms.oneCheckboxAfter[i].checked = true;
            } else {
                this.doms.oneCheckbox[i].checked = false;
                this.doms.oneCheckboxAfter[i].checked = false;
            }
        }
    },
    allCheck:function () {
        var that=this;
        this.doms.topAllCheck.onclick=function () {
            that.allCheckChlid(this);
            that.allMoney();
            if(this.checked){
                that.doms.bottomAllCheck.checked=true;
                that.num=that.doms.oneCheckbox.length;
                that.goBuyNow();
                $(".s_c_cart_mitem ").css("background","#fff8f3");
            }else{
                that.doms.bottomAllCheck.checked=false;
                that.num=0;
                that.goBuyNow();
                $(".s_c_cart_mitem ").css("background","");
            }
        };
        this.doms.bottomAllCheck.onclick=function () {
            that.allCheckChlid(this);
            that.allMoney();

            if(this.checked){
                that.doms.topAllCheck.checked=true;
                that.num=that.doms.oneCheckbox.length;
                that.goBuyNow();
                $(".s_c_cart_mitem ").css("background","#fff8f3");

            }else{
                that.doms.topAllCheck.checked=false;
                that.num=0;
                that.goBuyNow();
                $(".s_c_cart_mitem ").css("background","");
            }
        };
    },
    numChange:function () {
        var that=this;
        for(var i=0;i<this.doms.oneCheckbox.length;i++){
            this.doms.addCategoryNum[i].index=i;
            this.doms.reduceCategoryNum[i].index=i;
            //计算单项商品的小计
            function xiaoJi(t) {
                var lastNum=that.doms.showCategoryInput[t.index].value;
                var lastMoney=that.doms.lastPrice[t.index].innerText;
                that.doms.oneCategoryAll[t.index].innerText=(lastNum*lastMoney).toFixed(2);
            }
            this.doms.addCategoryNum[i].onclick=function () {
                var curNum=that.doms.showCategoryInput[this.index].value;
                if(curNum>=that.maxNum){
                    alert("库存不足，有需要的话可以直接联系卖家哦！");
                }else {
                    that.doms.showCategoryInput[this.index].value=++curNum;
                    xiaoJi(this);
                    that.allMoney();
                }
            };
            this.doms.reduceCategoryNum[i].onclick=function () {
                var curNum=that.doms.showCategoryInput[this.index].value;
                if(curNum<=1){
                    alert("商品不能少于一件哦！");
                }else {
                    that.doms.showCategoryInput[this.index].value=--curNum;
                    xiaoJi(this);
                    that.allMoney();
                }
            }
        }
    },
    deleteCategory:function () {
        var that=this;
        for(var i=0;i<this.doms.oneCheckbox.length;i++){
            this.doms.deleteCate[i].index=i;
            this.doms.deleteCate[i].onclick=function () {
                if(that.doms.oneCheckbox[this.index].checked){
                    //删除功能(还没实现)
                  var off = confirm("你确定要删除"+(this.index+1)+"号商品吗？");
                  if(!off)return;
                   //$(".s_c_cart_detele").parent().parent().splice(1);

                }
            }
        }
    },
    allMoney:function () {
        for(var i=0;i<this.doms.oneCheckbox.length;i++){
            if(this.doms.oneCheckbox[i].checked){
                //获取数量
                this.allNum+=parseFloat(this.doms.showCategoryInput[i].value);
                //获取总金额
                this.allCateMoney+=parseFloat(this.doms.oneCategoryAll[i].innerText);
            }
        }
        this.doms.allCategoryNum.innerText=this.allNum;
        this.doms.allCategoryMoney.innerText="￥"+(this.allCateMoney).toFixed(2);
        this.allNum=0;
        this.allCateMoney=0;
    },
    goBuyNow:function () {
        if(this.num>0){
            this.doms.goBuy.style.display="block";
            this.doms.goBuy1.style.display="none";
        }
        else {
            this.doms.goBuy.style.display="none";
            this.doms.goBuy1.style.display="block";
        }
    }
};
var cate=new Category();
cate.oneCheck();
cate.allCheck();
cate.numChange();
cate.deleteCategory();


/*------------结束---------------------*/


/*---------------------底部固定----------------------*/
$(function () {
    var num=$(".s_c_cart_mitem ").length;
     //获取s_c_cart_paybar距离顶部的距离
    $(window).scroll(function () {
        //获取s_c_cart_mitem的高度 + 它本身的高度 的总和
        var nav =$(".s_c_cart_mitem ").eq(num-1).offset().top+$(".s_c_cart_mitem").height();
        var windowheigh=$(window).height();      //获取window的高度
        var H=$(window).scrollTop();     //获取滚动条滚动的高度
        if(H>20){    //如果滚动条的高度大于20就添加一个固定样式
            $(".s_c_cart_paybar").addClass("s_c_cart_paybar_fiexd");
            if((nav-H+60)<windowheigh){
                $(".s_c_cart_paybar").removeClass("s_c_cart_paybar_fiexd");
            }
        }
        else {
            $(".s_c_cart_paybar").removeClass("s_c_cart_paybar_fiexd");
        }
    })
});




