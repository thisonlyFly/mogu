/**
 * Created by Administrator on 2017/4/18.
 */
$(function () {
    /*商品导航的左右滑动*/
    var $next = $(".bx-next");
    var $prev = $(".bx-prev");
    var $navlist = $(".nav-list");
    var x = 0;
    /*下一栏导航*/
    $next.click(function () {
        for (var i = 1; i <= 1; i++) {
            x = x - 1210;
            if (x <= 0) {
                $prev.removeClass("disabled")
            }
            if (x <= -2420) {
                $next.addClass("disabled")
            }
        }
        $navlist.css('transform', 'translate3d(' + x + 'px,0px,0px)');
    });
    /*上一栏导航*/
    $prev.click(function () {
        for (var i = 1; i <= 1; i++) {
            x = x + 1210;
            if (x <= -1210) {
                $prev.removeClass("disabled")
            }
            if (x >= -1210) {
                $next.removeClass("disabled")
            }
            if (x >= 0) {
                $prev.addClass("disabled")
            }
        }
        $navlist.css('transform', 'translate3d(' + x + 'px,0px,0px)');
    });


    /*点击更换图片*/
    var $navitem = $("#body_wrap .nav-item");
    var $tabpane=$(".pool-wrap .tab-pane")
    var $navitema = $("#body_wrap .nav-item a");
    var $poolwrap = $("#body_wrap .pool-wrap");
    // var list_html = ' <div class="pool-item">' +
    //     '<a href="http://pc.mogujie.com/society/lifestyle.html?iid=11l3ghc&amp" ' +
    //     'class="image-wrap J_dynamic_imagebox" data-ptp-cache-id="1.DqSff.0.0.4knfh">' +
    //     '<img class="J_dynamic_img fill_img" src="../pubile/images/1.1.jpg" alt="">' +
    //     '</a>' +
    //     '<div class="detail">' +
    //     '<a href="http://pc.mogujie.com/society/lifestyle.html?iid=11l3ghc&amp" >' +
    //     '<p class="content-title">蕾丝雪纺套装${num}</p>' +
    //     '</a>' +
    //     '<div class="user-wrap vertical-middle">' +
    //     '<img class="avatar" src="../pubile/images/1.2.jpg">' +
    //     '<span class="user-name">z_子晴</span>' +
    //     '</div>' +
    //     '</div>' +
    //     '</div>';
    var arr_html = '<div class="arrow-down"></div>';
    $navitem.first().addClass("active");
    $tabpane.first().addClass("active");
    $navitem.first().append(arr_html);
    // console.log($navitem.first());
    $navitema.on('click',function () {

        $(this).after(arr_html).parents().siblings().children().removeClass('arrow-down');
        cat_id=$(this).attr("href").replace(/[^0-9]/ig, "");
        getData(p,cat_id);
    });
    var p=1,lock=true,cat_id=1;
    // console.log(cat_id);
      getData(p,cat_id);
      function getData(p,cat_id) {
          var html='';
          var ajaxNum=$(".pool-item").length;
          //console.log(2222);
           $.get(Redman_ajax_url,{p,cat_id},function  (rtn_data) {
                for (var i = 0 ; i <  rtn_data.data.length; i++) {
                   //if(ajaxNum==0||ajaxNum<=i){
                     html+='<div class="pool-item">' + 
                            '<a href="http://pc.mogujie.com/society/lifestyle.html?iid=11l3ghc&amp" ' +
                            'class="image-wrap J_dynamic_imagebox" data-ptp-cache-id="1.DqSff.0.0.4knfh">' +
                            '<img class="J_dynamic_img fill_img" src="'+pub_path+'/'+rtn_data.data[i]['redman_path']+'" alt="">' +
                            '</a>' + 
                            '<div class="detail">' +
                            '<a href="http://pc.mogujie.com/society/lifestyle.html?iid=11l3ghc&amp" >' +
                            '<p class="content-title">'+rtn_data.data[i]['redman_name']+'</p>' +
                            '</a>' +
                            '<div class="user-wrap vertical-middle">' +
                            '<img class="avatar" src="'+pub_path+'/'+rtn_data.data[i]['redman_thumb']+'">' +
                            '<span class="user-name">'+rtn_data.data[i]['redman_author']+'</span>' +
                            '</div>' +
                            '</div>' +
                            '</div>';
                   //}
                }            
                if(rtn_data.data.length<=0){
                    lock=false;
                }
                else{
                    lock=true;
                    $poolwrap.find("#"+cat_id+"").append(html);
                }
                
            })
        };
        /*自动加载 瀑布流*/
        $(document).scroll( function() {
            $(window).scrollTop()       //这个方法是当前滚动条滚动的距离
            $(window).height()     //获取当前窗体的高度
            $(document).height()    //获取当前文档的高度
            var bot = 100;       //bot是底部距离的高度
            //当底部基本距离+滚动的高度〉=文档的高度-窗体的高度时；
            /* console.log((bot + $(window).scrollTop()) - ($(document).height() - $(window).height()));*/
            if ((bot + $(window).scrollTop()) >= ($(document).height() - $(window).height())) {
                // $poolwrap.find(".w-wall-segment").append(list_html);
                if(lock){
                    ++p;
                    getData(p,cat_id);
                }
                lock=false;
            }
        });
})