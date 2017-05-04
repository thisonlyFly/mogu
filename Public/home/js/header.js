$(".input-text").click(function () {
    $(".header-lsjl").show();
}).blur(function () {
    $(".header-lsjl").hide();
});
$(".lisp").click(function () {
    $(".selected").text("搜商品");
});
$(".lidp").click(function () {
    $(".selected").text("搜店铺");
});

/*$(".input-two-text").click(function () {
    $(".header-two-lsjl").show();
}).blur(function () {
    $(".header-two-lsjl").hide();
});

$(document).ready(function () {
    $(window).scroll(function () {
        if($(window).scrollTop()>300){
            $(".header-two").show();
        }
        if($(window).scrollTop()<300){
            $(".header-two").hide();
        }
    });
});*/
