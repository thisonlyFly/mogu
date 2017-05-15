
/*--------------form表单的验证代码------------------*/
$().ready(function () {
    // 在键盘按下并释放及提交后验证提交表单
    $("#signupForm").validate({
        rules:{
        yb:{
            number:true,
            minlength: 6,
            maxlength:6
        },
        jddz:{
            required:true,
            minlength: 5
        },
        username:{
            required: true,
            minlength: 2,
            maxlength:20
        },
        phone:{
            number: true,
            minlength:11,
            maxlength:11
        },
            agree: "required"
        },
        messages:{
            yb:{
                number:"请输入邮政编码",
                minlength:"请输入六位数的邮政编码",
                maxlength:"请输入六位数的邮政编码"
            },

            jddz:{
                required:"请输入地址",
                minlength:"请输入收货地址，不能少于5个字"
            },
            username:{
                required:"请输入用户名",
                minlength:"用户名必需大于2个字符",
                maxlength:"用户名不能超过20个字符"
            },
            phone:{
                number:"请输入正确的手机号",
                minlength:"请输入11位数的电话号码",
                maxlength:"请输入11位数的电话号码"
            }
        }
    });

    aa();
    function aa() {
        // $("#signupForm").on("submit",function () {
        //     form_yz();
        // });
        $(".cart_surebtn").on("click",function () {
            var bool=form_yz();
            if(bool){
                // window.location.href="http://localhost/mogu/Home/Order/orderList.html";
            }
        })
    }

    //表单验证
    function form_yz() {
        var youbian=$("#yb").val();  //邮编
        var address=$("#jddz").val();  //地址
        var name=$("#username").val();  //用户名
        var phone=$("#phone").val();  //手机号
        var myreg = /^(((13[0-9]{1})|(15[0-9]{1})|(18[0-9]{1}))+\d{8})$/;  //手机号的正则
        var tel = /^[0-9]{6}$/;  //邮编的正则
        if(name!=""){
            if(myreg.test(phone)){
                if(address!=""){
                    if(tel.test(youbian)){
                        return true;
                    }else{
                        alert("请输入正确的邮编格式！");
                    }
                }else{
                    alert("请输入地址！");
                }
            }else{
                alert("请输入正确的手机号码！");
            }
        }else{
            alert("请输入用户名！");
        }
    }
});


/*-------------------商品价格的计算代码----------------*/

//1、构造函数
function Category() {
    this.allNum=0; //商品的总数量
    this.allCateMoney=0; //显示商品数量框的总价
    this.doms={
        goodsList:document.getElementsByClassName("cart_goods_img"),  //商品数量
        goodsNum:document.getElementsByClassName("cart_itemNum"),  //商品数量
        goodsPrice:document.getElementsByClassName("cart_font16"),  //商品折扣后的小计
        goodsTotal:document.getElementsByClassName("goods_total")[0],  //上面的合计
        goodsAllNum:document.getElementsByClassName("goodsNum")[0],  //商品总数
        goodsAllTotal:document.getElementsByClassName("allTotal")[0]  //商品总价格
    }
}

//2、方法
Category.prototype={
    //上面的合计
    GoodsTotal:function () {
        for (var i=0;i<this.doms.goodsList.length;i++){
            //计算商品总数
            this.allNum+=parseInt(this.doms.goodsNum[i].innerText);
            //计算商品总价格
            this.allCateMoney+=parseFloat(this.doms.goodsPrice[i].innerText);
        }
        this.doms.goodsAllNum.innerText=this.allNum;
        //alert(this.allCateMoney);
        this.doms.goodsTotal.innerText=this.allCateMoney.toFixed(2);
        this.doms.goodsAllTotal.innerText=this.allCateMoney.toFixed(2);

    }
};

//3、调用
var cate = new Category();
cate.GoodsTotal();

function submit(){
    var name=$("#username").val(),
    phone=$("#phone").val(),
    address=$(".textarea").val(),
    zipcode=$("#yb").val();
    goods_total=$(".allTotal").text();
    $('#submit_btn').click();
}
