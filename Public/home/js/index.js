$(".input-two-text").click(function () {
    $(".header-two-lsjl").show();
}).blur(function () {
    $(".header-two-lsjl").hide();
});
$(document).ready(function () {
    $(window).scroll(function () {
        if($(window).scrollTop()>300){
            $(".header-two").addClass("");
        }
        if($(window).scrollTop()<300){
            $(".header-two").hide();
        }
    });
});


// function page1_tcc() {
//     var p1_li=$(".page1-fl");
//     for(var i=0;i<p1_li.length;i++){
//         $(".page1-fl").eq(i).on("mouseover",function () {
//             $(".page1-dh-tcc").eq($(this).index()).addClass("page1-dh-tcc1").siblings().removeClass("page1-dh-tcc1");
//         });
//     }
// }
// page1_tcc();
$(".page1-dh").on("mouseleave",function () {
        $(".page1-dh-tcc").removeClass("page1-dh-tcc1");
 });
// 轮播
function pg2_auto() {


    $(".pg1-lb-ul").after("<ol class='pg1-lb-xd'></ol>");//创建ol
    $(".pg1-lb-ul li").each(function (i) {
        $(".pg1-lb-xd").append("<li class='pg1-lb-dot'></li>");
        $(".pg1-lb-xd li:first").addClass("pg1-lb-rotate");
    });
    var z=0;
    $(".pg1-lb-xd li").on("mouseenter",function () {
        z++;
        $(this).addClass("pg1-lb-rotate").siblings().removeClass("pg1-lb-rotate");
        $(".pg1-lb-ul li").eq($(this).index()).css({
            zIndex:z,
            left:"778px"
        }).animate({
            left:0
        },2000)
    });
var a=0;
var b=0;
var timer=null;
function changeImg(){
    a++;
    b++;
    if(a>$(".pg1-lb-ul li").length) {
        a = 0;
    }
    $(".pg1-lb-xd li").eq(a).addClass("pg1-lb-rotate").siblings().removeClass("pg1-lb-rotate");
    $(".pg1-lb-ul li").eq(a).css({
        zIndex:b,
        left:"778px"
    }).animate({
        left:0
    },2000);
}
timer=setInterval(changeImg,3000);
$(".page1-lb").mouseenter(function () {
    clearInterval(timer);
});
$(".page1-lb").mouseleave(function () {
    timer=setInterval(changeImg,3000);
});
}
pg2_auto();
// 首页第二个轮播部分
lunbo();
function lunbo() {
    var num=0;
    var off1=true;//定义一个开关 默认开
    var off=true;
    var off2=true;
    var timer=null;
    var timer1=null;
    var time=0;
    var tab=$(".selected-carousel");
    function numChange() {
        if(num<0){
            num=(tab.length-1);
        }else if(num>(tab.length-1)){
            num=0;
        }
    }
    //向右移动
    function rightMove() {
        if(off1){
            off1=false;
            $(".selected-carousel").eq(num).animate({left:-950},1000);
            num++;
            numChange();
            $(".pg4-lb-math").eq(num).addClass("pg4-lb-color").siblings().removeClass("pg4-lb-color");
            $(".selected-carousel").eq(num).css("left","950px").animate({left:0},1000,function () {
                off1=true;
            });
        }
    }
    //向左移动
    function leftMove() {
        if(off){
            off=false;
            $(".selected-carousel").eq(num).animate({left:950},1000);
            num--;
            numChange();
            $(".pg4-lb-math").eq(num).addClass("pg4-lb-color").siblings().removeClass("pg4-lb-color");
            $(".selected-carousel").eq(num).css("left","-950px").animate({left:0},1000,function () {
                off=true;
            });
        }
    }
    //左边按钮
    $(".pg4-lb-z").on("click",function () {
        leftMove();
    });
    //右边按钮
    $(".pg4-lb-y").on("click",function () {
        rightMove();
    });
    //自动轮播
    auto();
    function auto() {
        timer=setInterval(function () {
            $(".selected-carousel").eq(num).animate({left:-950},1000);
            num++;
            numChange();
            $(".pg4-lb-math").eq(num).addClass("pg4-lb-color").siblings().removeClass("pg4-lb-color");
            $(".selected-carousel").eq(num).css("left","950px").animate({left:0},1000);
        },4000);
    }
    $(".selected-top,.selected-bottom").on("mouseenter",function () {
        clearInterval(timer);
    });
    $(".selected-top,.selected-bottom").on("mouseleave",function () {
        auto();
    });

    //鼠标经过小圆点事件
    for(var i=0;i<tab.length;i++){
        $(".pg4-lb-math").eq(i).on("mouseover",function () {
            var numIndex=$(this).index();
            timer1=setInterval(function () {
                time++;
                if(time>2) {
                    time = 0;
                    if (off2) {
                        if (numIndex > num) {
                            off2 = false;
                            $(".selected-carousel").eq(num).css("left", "0").animate({left: -950}, 1000).siblings().css("left", "950px");
                            $(".pg4-lb-math").eq(numIndex).addClass("pg4-lb-color").siblings().removeClass("pg4-lb-color");
                            $(".selected-carousel").eq(numIndex).animate({left: 0}, 1000, function () {
                                num = numIndex;
                                off2 = true;
                            });
                        } else if (numIndex < num) {
                            off2 = false;
                            $(".selected-carousel").eq(num).css("left", "0").animate({left: 950}, 1000).siblings().css("left", "-950px");
                            $(".pg4-lb-math").eq(numIndex).addClass("pg4-lb-color").siblings().removeClass("pg4-lb-color");
                            $(".selected-carousel").eq(numIndex).animate({left: 0}, 1000, function () {
                                num = numIndex;
                                off2 = true;
                            });
                        }
                    }
                }
            },100);
        });
        $(".pg4-lb-math").eq(i).on("mouseout",function () {
            clearInterval(timer1);
        });
    }
}
// 滚轮代码
$(document).ready(function () {
    $(window).scroll(function () {
        var H=$(document).scrollTop();
        if (H >= $(".sysp").offset().top-90){
            $(".navigation-la").eq(12).addClass("navla").siblings().removeClass("navla");
        }
        else if(H >= $(".symy").offset().top-90){
            $(".navigation-la").eq(11).addClass("navla").siblings().removeClass("navla");
        }
        else if(H >= $(".syjj").offset().top-90){
            $(".navigation-la").eq(10).addClass("navla").siblings().removeClass("navla");
        }
        else if(H >= $(".symz").offset().top-90){
            $(".navigation-la").eq(9).addClass("navla").siblings().removeClass("navla");
        }
        else if(H >= $(".syyd").offset().top-90){
            $(".navigation-la").eq(8).addClass("navla").siblings().removeClass("navla");
        }
        else if(H >= $(".syps").offset().top-90){
            $(".navigation-la").eq(7).addClass("navla").siblings().removeClass("navla");
        }
        else if(H >= $(".syny").offset().top-90){
            $(".navigation-la").eq(6).addClass("navla").siblings().removeClass("navla");
        }
        else if(H >= $(".sybb").offset().top-90){
            $(".navigation-la").eq(5).addClass("navla").siblings().removeClass("navla");
        }
        else if(H >= $(".syboy").offset().top-90){
            $(".navigation-la").eq(4).addClass("navla").siblings().removeClass("navla");
        }
        else if(H >= $(".synx").offset().top-90){
            $(".navigation-la").eq(3).addClass("navla").siblings().removeClass("navla");
        }
        else if(H >= $(".synz").offset().top-90){
            $(".navigation-la").eq(2).addClass("navla").siblings().removeClass("navla");
        }
        else if(H >= $(".sypp").offset().top-90){
            $(".navigation-la").eq(1).addClass("navla").siblings().removeClass("navla");
        }
        else if(H >= $(".syyx").offset().top-90){
            $(".navigation-la").eq(0).addClass("navla").siblings().removeClass("navla");
        }

        if($(window).scrollTop()>$(".syyx").offset().top-90){
            $(".navigation-left").show();
        }
        else if($(window).scrollTop()<$(".syyx").offset().top-90){
            $(".navigation-left").hide();
        }
        if($(window).scrollTop()>600){
            $(".header-two").show();
        }
        if($(window).scrollTop()<600){
            $(".header-two").hide();
        }
        if($(window).scrollTop()>0){
            $(".navigation-bottom").show();
        }
        else {
            $(".navigation-bottom").hide();
        }
        $(".navigation-la").on("click",function(){
            var index=$(this).index();
            $("html,body").stop().animate({
                scrollTop:$(".plate-currency").eq(index).offset().top-70
            })
        });
        $(".navigation-bottom").on("click",function(){
            $("html,body").stop().animate({
                "scrollTop":0
            },600)
        });
    });
})
// function getmatrix(a,b,c,d){
//     var aa=Math.round(180*Math.asin(a)/ Math.PI);
//     var bb=Math.round(180*Math.acos(b)/ Math.PI);
//     var cc=Math.round(180*Math.asin(c)/ Math.PI);
//     var dd=Math.round(180*Math.acos(d)/ Math.PI);
//     var deg=0;
//     if(aa==bb||-aa==bb){
//         deg=dd;
//     }else if(-aa+bb==180){
//         deg=180+cc;
//     }else if(aa+bb==180){
//         deg=360-cc||360-dd;
//     }
//     return deg>=360?0:deg;
//     //return (aa+','+bb+','+cc+','+dd);  
// }
// function xzlb() {
//     setInterval(function () {
//         var a=$(".pg3-img-lb").length;
//         var num=Math.ceil(Math.random()*a);
//         var jiaodu=$(".pg3-img-lb .flipper").eq(num - 1).css('transform');
//         var returnJiaodu=getmatrix(jiaodu);
//         console.log(num);
//         console.log(jiaodu);
//         console.log(returnJiaodu);
//         // for(var i=0;i<$(".pg3-img-lb").length;i++){
//         if(returnJiaodu==180) {
//             $(".pg3-img-lb .flipper").eq(num - 1).css("transform", "rotateY(0deg)");
//         }else{
//             $(".pg3-img-lb .flipper").eq(num - 1).css("transform", "rotateY(180deg)");
//         }
//         // }
//     },2000)
// }
// xzlb();


//倒计时
$(function () {
    var current = (new Date()).getTime();
    var countdown = 1 * 3600;

    var countdownTimer = setInterval(function () {
        // 倒计时到零时，停止倒计时
        if (countdown <= 0)
            return clearInterval(countdownTimer);
        countdown -= 1;
        var rest = countdown;
        // 时
        var hours = parseInt(rest / 3600, 10);
        rest -= hours * 3600;
        // 分
        var minutes = parseInt(rest / 60, 10);
        rest -= minutes * 60;
        // 秒
        var seconds = parseInt(rest, 10);
        document.getElementsByClassName("h")[0].innerHTML=hours;
        document.getElementsByClassName("m")[0].innerHTML=minutes;
        document.getElementsByClassName("s")[0].innerHTML=seconds;
        document.getElementsByClassName("h")[1].innerHTML=hours;
        document.getElementsByClassName("m")[1].innerHTML=minutes;
        document.getElementsByClassName("s")[1].innerHTML=seconds;
    }, 1e3);
});