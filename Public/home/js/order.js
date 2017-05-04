/*------------下拉菜单的出现于隐藏-------------------*/
var $ul=$(".mu_left_item");
for(var i=0;i<$ul.length;i++)
{
    $(".mu_titles").eq(i).on("click",function () {
        if($(this).next(".mu_left_item").is(":hidden")){  //判断 $(".mu_titles")下面的$(".mu_left_item")是否隐藏了
            $(this).next(".mu_left_item").show();
            $(this).css("background-position","72px -64px");
        }
        else{
            $(this).next(".mu_left_item").hide();
            $(this).css("background-position","72px -3px");
        }

    });

}

/*------------------提示-------------------*/
$(function () {
    $('[data-toggle="tooltip"]').tooltip();
});


/*---------------确认订单后的遮盖层-----------------*/
$(".order_btn").on("click",function () {
    $("#zg").show();
});
$(".zg_span").on("click",function () {
    $("#zg").hide();
});
$(".cancel").on("click",function () {
    $("#zg").hide();
});
$(".qr2").on("click",function () {
    $("#zg").hide();
    $(".qr1").html(" <a class='order_btn qr1' href='javascript:;'>已确认</a>")
});



