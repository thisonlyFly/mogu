// 抢购时间
var nav_box = document.getElementsByClassName("nav-box")[0];
var tail = document.getElementsByClassName("tail")[0];
var narH = nav_box.offsetTop;//获取nav_box在网页的高度
var tailH = tail.offsetTop;//获取tail在网页的高度
var clrabox=$(".clearfix").offsetTop;
console.log(narH);
$(document).ready(function () {
    $(window).scroll(function () {
        //当滚动的距离大于本身的距离，增加fixd这个class
        if ($(window).scrollTop() > narH) {
            $(".nav-box").addClass("fixd");
        }
        //当滚动的距离小于本身的距离，删除fixd这个class
        if ($(window).scrollTop() < narH) {
            $(".nav-box").removeClass("fixd");
        }
    });
});
$(document).ready(function () {
    $(window).scroll(function () {
         if ($(window).scrollTop() <narH ) {
            $(".aside").removeClass("asidefixd");
        }
         if ($(window).scrollTop() > narH && $(window).scrollTop() < 1000) {
            $(".aside").addClass("asidefixd");
        }
          if ($(window).scrollTop() >1000 ) {
             $(".aside").addClass("fixddd");
         }
         if ($(window).scrollTop() > 1000 && $(window).scrollTop()<1100){
            $(".aside").removeClass("asidefixd");
        }
         if ($(window).scrollTop() < 1000) {
            $(".aside").removeClass("fixddd");
        }
    });
});
// 按左右键换内容
var off=true;
var off1=true;
var lr=$(".left_right");
var num = Math.floor($(".left_right").length/2);
var maxnum=$(".left_right").length;

function diaoyong(jjks_imdex) {
    $(".nav-list").css("left",-133*((jjks_imdex-4)-1));
    $(".left_right_children").eq(jjks_imdex-1).addClass("active").siblings().removeClass("active");
}

//向左向右滑动和点击哪个按钮
function zuoyou(jjks_imdex) {
    var index=jjks_imdex-1;
    for(var i=0;i<maxnum;i++){
        $(".first").eq(i).on("click",function () {
            index=$(this).index();
            $(".left_right_children").eq(index).addClass("active").siblings().removeClass("active");
        });
    }
    //向右滑动
    $(".you").on("click", function () {
        if(off){
            off=false;
            var left = $(".nav-list").offset().left - 74.5;
            if (left > -2527) {
                console.log(left);
                $(".zuo").css("display","block");
                $(".you").css("display","block");
                $(".nav-list").animate({"left": -133 + left + "px"},function () {
                    off=true;
                });
            }
            if(left < -2390){
                $(".you").css("display","none");
            }
            //下面的内容
            index++;
            if(index>=maxnum){
                index=maxnum-1;
            }
            $(".left_right_children")
            $(".left_right_children").eq(index).addClass("active").siblings().removeClass("active");
            // console.log(index);
        }
    });
    //向左滑动
    $(".zuo").on("click", function () {
        if(off1){
            off1=false;
            var left = $(".nav-list").offset().left - 74.5;
            if (left < 535) {
                console.log(left);
                $(".zuo").css("display","block");
                $(".you").css("display","block");
                $(".nav-list").animate({"left": 133 + left + "px"},function () {
                    off1=true;
                })
            }
            if(left > 269){
                $(".zuo").css("display","none");
            }
            if(index<=0){
                index=1;
            }
            index--;
            $(".left_right_children").eq(index).addClass("active").siblings().removeClass("active");
        }
    });
}
//点击导航条，导航条移动到点击的目标位置
$(function () {
    $(".nav-item").on("click", function () {
        var left = $(this).offset().left;
        var center = $(".center").offset().left;
        var juli = center - left;
        var data = $(".nav-list").offset().left;
        // console.log(data);
        if (juli > 0) {
            $(".nav-list").animate({"left": data + juli - 73 + "px"})
        } else {
            $(".nav-list").animate({"left": data + juli - 73 + "px"})
        }
    })
})


$(function () {
    //获取当天和明天九点和十点的时间
    var nowYear=new Date().getFullYear();
    var nowMouth=new Date().getMonth()+1;//这是从0开始的
    var nowDay=new Date().getDate();
    var nowDayadd=new Date().getDate()+1;
    var nowTime=nowYear+"-"+nowMouth+"-"+nowDay+"  ";
    var nowTimeadd=nowYear+"-"+nowMouth+"-"+nowDayadd+"  ";
    var json=[
        nowTime+"00:00:00",
        nowTime+"9:00:00",
        nowTime+"10:00:00",
        nowTime+"11:00:00",
        nowTime+"12:00:00",
        nowTime+"13:00:00",
        nowTime+"14:00:00",
        nowTime+"16:00:00",
        nowTime+"19:00:00",
        nowTime+"21:00:00",
        nowTime+"22:00:00",
        nowTime+"23:00:00",
        nowTime+"24:00:00",
        nowTimeadd+"9:00:00",
        nowTimeadd+"10:00:00"
        ];
    //循环有多少个时间点的倒计时
   for(var i=0;i<json.length;i++){
       var oneJson=json[i];
       timer(oneJson,i);
   }
   var jjkq=false;
    var  jjks_imdex;//即将开始的第一个
    function timer(oneJson,i) {
        setInterval(function () {
            var time1=new Date().getTime();//获取当天的毫秒数
            var time2=new Date(oneJson).getTime();//获取数组的毫秒数
            var go=time2-time1;//相差的毫秒数
            var hour=Math.floor(go/1000/60/60);
            var min=Math.floor(go/1000/60)%60;
            var sec=Math.floor(go/1000)%60;
            //个位数时在个位数钱加零
            if(hour<10){hour="0"+hour};
            if(min<10){min="0"+min};
            if(sec<10){sec="0"+sec};
            // 相差的毫秒数大于零的时候
            if(go>0){
                //即将开抢的每一个倒计时
                document.getElementsByClassName("h")[i].innerHTML=hour;
                document.getElementsByClassName("m")[i].innerHTML=min;
                document.getElementsByClassName("s")[i].innerHTML=sec;

                if(9+i==jjks_imdex){//只跟第一个即将开始的时间走
                    //快抢中的倒计时与第一个即将开抢的倒计时时间同步
                    $('.carousel-inner .contentt-body').eq(jjks_imdex-1).find('.h').html(hour);
                    $('.carousel-inner .contentt-body').eq(jjks_imdex-1).find('.m').html(min);
                    $('.carousel-inner .contentt-body').eq(jjks_imdex-1).find('.s').html(sec);
                }
                //开抢中
                if (!jjkq){
                    jjkq=true;
                    jjks_imdex=9+i;
                    $(".nav-tabs a").eq(9+i-1).find('.seckill-status').text('开抢中');
                    $(".huise").eq(i-1).text("距离结束还有");
                    diaoyong(jjks_imdex);
                    zuoyou(jjks_imdex)
                }
                //没到时间的赋值为即将开抢中
                var qiang="即将开抢";
                $(".seckill-status").eq(9+i).text(qiang);
                // 最后一个定时器显示
                $(".frr").eq(-1).show();
            }
            else{
                //隐藏过了时间的定时器
                $(".frr").eq(i-1).hide();
            }
        },1000);
    }
for(var i=0;i<$(".left-text").length;i++){
        var yiqiang=$(".status-bar-text").eq(i).text();
        var shengxia=$(".left-text").eq(i).text();
        var yiqiangnum= yiqiang.replace(/[^0-9]/ig,"");
        var shengxianum= shengxia.replace(/[^0-9]/ig,"");
    var sun=parseInt(yiqiangnum)+parseInt(shengxianum);
   var tiaokuan=yiqiangnum/sun*100;
    $(".status-bar-progress").eq(i).css("width",tiaokuan+"%");
}

})
