/*-----------------商店的据图介绍弹出框------------------------*/
$(function () {
    $(".commodity_details_shop-score").on("mouseover",function () {
        $(".commodity_details_header_left").css("background","#f6f6f6");
        $(".commodity_details_shop_info").css("display","block");
    });
    $(".commodity_details_shop-score").on("mouseout",function () {
        $(".commodity_details_header_left").css("background","");
        $(".commodity_details_shop_info").css("display","none");
    });


    /*---------------------点击输入你要的商品后弹出的框--------------------*/
    $(".commodity_details_text").on("click",function () {
        $(".commodity_details_top_search_hint").css("display","block")
    });
    $(".commodity_details_text").blur(function () {
        $(".commodity_details_top_search_hint").css("display","none")
    });


    /*--------------------------身体部分的导航条------------------------*/
    for(var i=0;i<$(".commodity_details_li_cur").length;i++){
        $(".commodity_details_li_cur").eq(i).on("mouseover",function () {
            for(var i=0;i<$(".commodity_details_li_cur").length;i++){
                $(".commodity_details_li_cur").eq(i).removeClass("subMenu")
            }
            $(this).addClass("subMenu")
        });
    }
    /*------------------------图片切换------------------------------*/
    var oBig = document.getElementById("big_images");
    function fn1(obj,url) {
        var oBtn = document.getElementById(obj);
        oBtn.onmouseover = function () {
            oBig.src=url;
        }    
    }
    /*-------------------点击添加件数和减少件数----------------------------*/
    var num=1;
    $(".goods_sku_num_add ").on("click",function () {
        num++;
        if(num>10){
            alert("库存不足，有需要的话可以直接联系卖家哦！");
        }
        else {
            $(".goods_sku_num_input").val(num);
        }
    });

    $(".goods_sku_num_reduce").on("click",function () {
        num--;
        if(num<1){
            alert("商品不能少于一件哦！");
        }
        else {
            $(".goods_sku_num_input").val(num);
        }
    });




    /*----------------选中图片后有小勾勾出现------------------*/
    function colcur(){
        for(var i=0;i<$(".span").length;i++){
            $(".span").eq(i).on("click",function () {
                for(var i=0;i<$(".span").length;i++){
                    $(".span").eq(i).removeClass("b_cur");
                }
                $(this).addClass("b_cur");
                cart_col=$(".b_cur").text();
            })
        }

        for(var i=0;i<$(".goods_sku_xz_small_pic").length;i++){
            $(".goods_sku_xz_small_pic").eq(i).on("click",function () {
                for(var i=0;i<$(".goods_sku_xz_small_pic").length;i++){
                    $(".goods_sku_xz_small_pic").next("b").eq(i).removeClass("b_cur");
                }
                $(this).next("b").addClass("b_cur");
            })
        };

        for(var i=0;i<$(".goods_sku_mashu").length;i++){
            $(".goods_sku_mashu").eq(i).on("click",function () {
                for(var i=0;i<$(".goods_sku_mashu").length;i++){
                    $(".goods_sku_mashu").eq(i).removeClass("c")
                }
                $(this).addClass("c");
                cart_size=$(".goods_sku_mashu.c").text();
            })
        }
    }


    /*------------------套餐部分的弹出框的显示和隐藏-------------------*/
    $(".pannel_close").on("click",function () {
        $(".dapei_sku_body_tck").css("display","none");
    });

    $(".dapei_sku_tck_sure_btn").on("click",function () {
        $(".dapei_sku_body_tck").css("display","none");
    });

    /*---------------点击弹出来-（套餐下面那里的）----------------------*/
    for(var i=0;i<$(".dapei_sku_select").length;i++){
        $(".dapei_sku_select").eq(i).on("click",function () {
            for(var  i=0;i<$(".dapei_sku_select").length;i++){
                $(".dapei_sku_body_tck").eq(i).css("display","none");
            }
            $(this).next(".dapei_sku_body_tck").css("display","block");
        })
    }


    /*--------------------右边的扩展栏----------------------------*/
for (var i=0;i<$(".extranav_list_li").length;i++){
    $(".extranav_list_li").eq(i).on("mouseover",function () {
        for(var i=0;i<$(".extranav_list_li").length;i++){
            $(".extranav_list_li").eq(i).removeClass("cur");
            $(".aa").eq(i).removeClass("li_a");
        }
        $(this).addClass("cur");
        $(this).find($(".aa")).addClass("li_a");
    })
}

/*----------------点击添加背景颜色（商品详情部分）--------------------*/
for(var i=0;i<$(".ul_li").length;i++ ){
    $(".ul_li").eq(i).on("click",function () {
        for(var i=0;i<$(".ul_li").length;i++ ){
            $(".ul_li").eq(i).removeClass("selected");
        }
        $(this).addClass("selected");
    })
}

    /*-----------------固定的导航栏（商品详情部分）----------------*/
    $(document).ready(function () {
        //获取tabbar_box距离顶部的距离
        var navOffset=$(".tabbar_box").offset().top;
        $(window).scroll(function () {
            //获取滚动条滚动的高度
            var H=$(window).scrollTop();
            if(H > navOffset){
                $(".tabbar_box").addClass("fixed");
                $(".ui_hd_left").addClass("fixed");
                $(".ui_hd_left").css("width","219px");
                $(".module_extranav").addClass("fixed");
            }
            else {
                $(".tabbar_box").removeClass("fixed");
                $(".ui_hd_left").removeClass("fixed");
                $(".ui_hd_left").css("width","198px");
                $(".module_extranav").removeClass("fixed");
            }
        })
    });
    var lock=true;
    function getData(){
        var sizehtml='',colhtml='';
        $.post(Details_ajax_url+"/ajax_get",{},function(rtn_data){
            img1=rtn_data.data['goods_img1'];
            img2=rtn_data.data['goods_img2'];
            img3=rtn_data.data['goods_img3'];
            col=rtn_data.data['goods_color'];
            size=rtn_data.data['goods_size'];
            if(size){
                var sizeArr=size.split(',');
                sizehtmlt='<dl class="goods_sku_xz_size">'+
                                    '<dt>尺码：</dt>'+
                                    '<dd>'+
                                        '<ol id="size" class="goods_sku_xz_sizeList goods_sku_xz_style_list">'+
                                        '</ol>'+
                                    '</dd>'+
                                '</dl>';
                $(".goods_sku_xz_content").prepend(sizehtmlt);
                for (var i = 0; i < sizeArr.length; i++) {
                    sizehtml+='<li class="goods_sku_mashu">'+sizeArr[i]+'</li>';
                }
            }
            if(col){
                var colArr=col.split(',');
                colhtmlt='<dl class="goods_sku_xz_content_ys">'+
                                    '<dt>颜色：</dt>'+
                                    '<dd>'+
                                        '<ol class="goods_sku_xz_style_list" id="col">'+
                                        '</ol>'+
                                    '</dd>'+
                                '</dl>';
                $(".goods_sku_xz_content").prepend(colhtmlt);
                for (var i = 0; i < colArr.length; i++) {
                    colhtml+='<li class="goods_sku_xz_style_list_img">'+
                                '<span class="span">'+colArr[i]+'</span>'+
                             '</li>';
                }
            }
            if(!rtn_data.data){
                lock=false;
            }
            else{
                lock=true;
                $("#col").prepend(colhtml);
                $("#size").prepend(sizehtml);
            }
            if(img2){
                fn1("btn1","../Public/"+img1);
                fn1("btn2","../Public/"+img2);
            }
            else if(img3){
                fn1("btn3","../Public/"+img3);
            }  
            colcur();     
        })
    }; 
    getData();
});
var cart_col="";
var cart_size="";
function addCart(){
    var cart_num=$(".goods_sku_num_input").val();
    var goods_id=$("#goods_id").val();
    $.post(shopping_Addcart,{cart_num,goods_id,cart_col,cart_size},function  (rtn_data) {
        alert(rtn_data.message);
    })
}
function buy(){
    var cart_num=$(".goods_sku_num_input").val();
    var goods_id=$("#goods_id").val();   
    $.post(order,{cart_num,goods_id,cart_col,cart_size},function  (rtn_data) {
        
    })
}