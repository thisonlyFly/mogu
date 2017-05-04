

 $(document).ready(function () {
     $(".brand_show_more").on("click",function () {
         $(this).css("display","none");
         $(".brand_show_up").css("display","block");
         $(".brand_pic_box").css("height","600px");
     });
     $(".brand_show_up").on("click",function () {
         $(this).css("display","none");
         $(".brand_show_more").css("display","block");
         $(".brand_pic_box").css("height","360px");
     });

 });

 $(function () {
     $(".brand_beauty_show_more").on("click",function () {
         $(this).css("display","none");
         $(".brand_beauty_show_up").css("display","block");
         $(".brand_beauty_pic_box").css("height","600px");
     });
     $(".brand_beauty_show_up").on("click",function () {
         $(this).css("display","none");
         $(".brand_beauty_show_more").css("display","block");
         $(".brand_beauty_pic_box").css("height","360px");
     });

 });

 $(function () {
     $(".brand_bag_show_more").on("click",function () {
         $(this).css("display","none");
         $(".brand_bag_show_up").css("display","block");
         $(".brand_bag_pic_box").css("height","600px");
     });
     $(".brand_bag_show_up").on("click",function () {
         $(this).css("display","none");
         $(".brand_bag_show_more").css("display","block");
         $(".brand_bag_pic_box").css("height","360px");
     });

 });


 /*--------brand_more_goods_nav鼠标单击时添加背景色-----------*/
 for(var i=0;i<$(".brand_more_goods_li").length;i++){
     $(".brand_more_goods_li").eq(i).on("click",function () {
         for(var i=0;i<$(".brand_more_goods_li").length;i++){
            $(".brand_more_goods_li").eq(i).removeClass("brand_more_goods_li_cur");
         }
         $(this).addClass("brand_more_goods_li_cur");
     })
 }


 /*-----------------固定的导航栏----------------*/
$(document).ready(function () {
     //获取brand_more_goods_nav距离顶部的距离
     var navOffset=$(".brand_more_goods_nav").offset().top;
     $(window).scroll(function () {
         //获取滚动条滚动的高度
         var H=$(window).scrollTop();
         if(H > navOffset){
             $(".brand_more_goods_nav").addClass("brand_more_goods_fixed");
         }
         else {
             $(".brand_more_goods_nav").removeClass("brand_more_goods_fixed");
         }
     })
 });
