
/*--------底部-----------*/
$(".bottom-nav-icon").eq(0).css("display","none");  //刚开始先让第一个的所有样式都显示
$(".pic-none").eq(0).css("display","block");
$(".bottom-nav-name").eq(0).addClass("cur");
for(var i=0;i<$(".bottom-nav-text").length;i++){
    $(".bottom-nav-text").eq(i).on("click",function () {
        for(var i=0;i<$(".bottom-nav-text").length;i++){
              $(".bottom-nav-icon").eq(i).css("display","block");
              $(".pic-none").eq(i).css("display","none");
              $(".bottom-nav-name").eq(i).removeClass("cur");
        }
         $(this).find($(".bottom-nav-icon")).css("display","none");
         $(this).find($(".pic-none")).css("display","block");
         $(this).find($(".bottom-nav-name")).addClass("cur");
    })
}

