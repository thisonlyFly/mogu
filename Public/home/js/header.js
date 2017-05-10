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