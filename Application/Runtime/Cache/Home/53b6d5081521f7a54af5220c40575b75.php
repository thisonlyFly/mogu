<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="/mogu/Public/common/bootstrap-3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="/mogu/Public/home/css/timefast.css">
    <link rel="stylesheet" href="/mogu/Public/home/css/twzt.css">

</head>
<body>
<div class="nav">
    <div class="nav-wap ">
        <a href="http://localhost/mogu/Home/page/index.html" class="nav-logo">蘑菇头首页</a>
        <ul class="nav-ul">
            <li class="s1"><a href="http://localhost/mogu/Home/User/login.html" target="_blank">登录</a></li>
            <li class="s1"><a href="http://localhost/mogu/Home/User/register.html" target="_blank">注册</a></li>
            <li class="s1 ullia nav-dd"><a href="http://localhost/mogu/Home/Order/Order.html" target="_blank">我的订单</a></li>
            <li class="s1 ullia nav-shopping">
                <a href="http://localhost/mogu/Home/ShoppingCart/Shopping_Cart.html" target="_blank"><span>购物车</span></a>
                <div class="sp-cart">
                    购物车里没有商品！
                </div>
            </li>
            <li class="s1 ullia nav-khfw">
                <a href="">客户服务</a>
                <i class="nav-icon"></i>
                <ol class="khfw-tcc">
                    <li><a href="">消费者服务</a></li>
                    <li><a href="">商家服务</a></li>
                    <li><a href="">规则中心</a></li>
                </ol>
            </li>
            <li class="s1 ullia nav-wdxd">
                <a href="">我的小店</a>
                <i class="nav-icon"></i>
                <ol class="khfw-tcc">
                    <li><a href="">管理后台</a></li>
                    <li><a href="">商家社区</a></li>
                    <li><a href="">商家培训</a></li>
                    <li><a href="">市场入驻</a></li>
                </ol>
            </li>
        </ul>
    </div>
</div>
<div id="fastbuy-header">
    <div class="content">
        <img src="/mogu/Public/home/images/qianggouandfenlei/mogulogo.png" class="mogulogo">
        <div class="fastbuy-menu">
            <a href="#" class="shouye"> 首页</a>
            <a href="#">即将售罄</a>
        </div>
        <div class="service-lists">
            <ul>
                <li class="quanguo">
                    <i></i>
                    <span>全国包邮</span>
                </li>
                <li class="zhengpin">
                    <i></i>
                    <span>正品保证</span>
                </li>
                <li class="cheap">
                    <i></i>
                    <span>超值低价</span>
                </li>
            </ul>
        </div>
    </div>
</div>
<div id="body-wrap" class="content">
    <div class="header">
        <div class="top-banner">
            <div class="left-top-banner fl">
                <div id="slideimg">
                    <!-- 放幻灯片的容器 -->
                    <div id="slidershow" class="carousel slide" data-ride="carousel" style="position: relative">

                        <!-- 幻灯片的内容容器：   每一个幻灯片需加上：item  -->
                        <div class="carousel-inner pic">
                            <img class="item active" src="/mogu/Public/home/images/qianggouandfenlei/lunbo1.png" alt="">
                            <img class="item" src="/mogu/Public/home/images/qianggouandfenlei/lunbo2.png" alt="">
                        </div>

                        <!-- 显示幻灯片数量的容器 -->
                        <ul class="carousel-indicators red">
                            <li class="active li" data-slide-to="0" data-target="#slidershow"></li>
                            <li data-slide-to="1" class="li" data-target="#slidershow"></li>
                        </ul>

                        <!-- 左右按钮 -->
                        <div class="carousel-control left prev" href="#slidershow" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left btn prev2"></span>
                        </div>
                        <div class="carousel-control right next" href="#slidershow" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right btn next2"></span>
                        </div>

                    </div>
                </div>
            </div>
            <div class="right-top-banner fr">
                <a href="#" class="banner-item">
                    <img src="/mogu/Public/home/images/qianggouandfenlei/rounen.png">
                </a>
                <a href="#" class="banner-item">
                    <img src="/mogu/Public/home/images/qianggouandfenlei/lingshi.png">
                </a>
            </div>
        </div>
    </div>
    <div class="main content">
        <div class="nav-box">
            <div class="active-arrow">
                <div class="center"></div>
            </div>
            <div class="controller">
                <div class="prev ctrl-item zuo"></div>
                <div class="next ctrl-item you"></div>
            </div>
            <div class="nav-box-wrapper">
                <div class="nav-list nav-tabs" role="tablist" style="width: 4147px;">
                    <a href="#one" class="nav-item left_right left_right first active" data-toggle="tab" role="tab">
                        <p class="seckill-time" data-time="2017-4-27 12:00:00">昨日<span class="span">12</span>:00</p>
                        <p class="seckill-status">已开抢</p>
                    </a>
                    <a href="#two" class="nav-item left_right first" data-toggle="tab" role="tab">
                        <p class="seckill-time">昨日13:00</p>
                        <p class="seckill-status">已开抢</p>
                    </a>
                    <a href="#three" class="nav-item left_right first" data-toggle="tab" role="tab">
                        <p class="seckill-time">昨日14:00</p>
                        <p class="seckill-status">已开抢</p>
                    </a>
                    <a href="#four" class="nav-item left_right first" data-toggle="tab" role="tab">
                        <p class="seckill-time">昨日15:00</p>
                        <p class="seckill-status">已开抢</p>
                    </a>
                    <a href="#five" class="nav-item left_right first" data-toggle="tab" role="tab">
                        <p class="seckill-time">昨日16:00</p>
                        <p class="seckill-status">已开抢</p>
                    </a>
                    <a href="#six" class="nav-item left_right first" data-toggle="tab" role="tab">
                        <p class="seckill-time">昨日19:00</p>
                        <p class="seckill-status">已开抢</p>
                    </a>
                    <a href="#seven" class="nav-item left_right first" data-toggle="tab" role="tab">
                        <p class="seckill-time">昨日21:00</p>
                        <p class="seckill-status">已开抢</p>
                    </a>
                    <a href="#eight" class="nav-item left_right first" data-toggle="tab" role="tab">
                        <p class="seckill-time">昨日22:00</p>
                        <p class="seckill-status">已开抢</p>
                    </a>
                    <a href="#nine" class="nav-item left_right first" data-toggle="tab" role="tab">
                        <p class="seckill-time">昨日23:00</p>
                        <p class="seckill-status">已开抢</p>
                    </a>
                    <a href="#ten" class="nav-item left_right first" data-toggle="tab" role="tab">
                        <p class="seckill-time">今天00:00</p>
                        <p class="seckill-status">已开抢</p>
                    </a>
                    <a href="#eleven" class="nav-item left_right first" data-toggle="tab" role="tab">
                        <p class="seckill-time">今天9:00</p>
                        <p class="seckill-status">已开抢</p>
                    </a>
                    <a href="#tweve" class="nav-item left_right first" data-toggle="tab" role="tab">
                        <p class="seckill-time">今天10:00</p>
                        <p class="seckill-status">已开抢</p>
                    </a>
                    <a href="#thirteen" class="nav-item left_right first" data-toggle="tab" role="tab">
                        <p class="seckill-time">今天11:00</p>
                        <p class="seckill-status">已开抢</p>
                    </a>
                    <a href="#fourteen" class="nav-item left_right first" data-toggle="tab" role="tab">
                        <p class="seckill-time">今天12:00</p>
                        <p class="seckill-status">已开抢</p>
                    </a>
                    <a href="#fifteen" class="nav-item left_right first" data-toggle="tab" role="tab">
                        <p class="seckill-time">今天13:00</p>
                        <p class="seckill-status">已开抢</p>
                    </a>
                    <a href="#sixteen" class="nav-item left_right first" data-toggle="tab" role="tab">
                        <p class="seckill-time">今天14:00</p>
                        <p class="seckill-status">已开抢</p>
                    </a>
                    <a href="#seventeen" class="nav-item left_right first" data-toggle="tab" role="tab">
                        <p class="seckill-time">今天16:00</p>
                        <p class="seckill-status">已开抢</p>
                    </a>
                    <a href="#eighteen" class="nav-item left_right first" data-toggle="tab" role="tab">
                        <p class="seckill-time">今天19:00</p>
                        <p class="seckill-status">已开抢</p>
                    </a>
                    <a href="#nineteen" class="nav-item left_right first" data-toggle="tab" role="tab">
                        <p class="seckill-time">今天21:00</p>
                        <p class="seckill-status">已开抢</p>
                    </a>
                    <a href="#twenty" class="nav-item left_right first" data-toggle="tab" role="tab">
                        <p class="seckill-time">今天22:00</p>
                        <p class="seckill-status">已开抢</p>
                    </a>
                    <a href="#twenty-one" class="nav-item left_right first" data-toggle="tab" role="tab">
                        <p class="seckill-time">今天23:00</p>
                        <p class="seckill-status">已开抢</p>
                    </a>
                    <a href="#twenty-two" class="nav-item left_right first" data-toggle="tab" role="tab">
                        <p class="seckill-time">明日00:00</p>
                        <p class="seckill-status">已开抢</p>
                    </a>
                    <a href="#twenty-three" class="nav-item left_right first" data-toggle="tab" role="tab">
                        <p class="seckill-time">明日9:00</p>
                        <p class="seckill-status">已开抢</p>
                    </a>
                    <a href="#twenty-four" class="nav-item left_right first" data-toggle="tab" role="tab">
                        <p class="seckill-time">明日10:00</p>
                        <p class="seckill-status">已开抢</p>
                    </a>
                </div>
            </div>
        </div>
        <div class="clearfix" style="position: relative;">
            <div class="aside fr">
                <div class="banner">
                    <img src="/mogu/Public/home/images/qianggouandfenlei/kuaiqiang.png" alt="">
                </div>
                <ul>
                    <li class="fl">即将售罄</li>
                    <li class="fl">一分钱抽奖</li>
                    <li class="fl">女装</li>
                    <li class="fl">美妆</li>
                    <li class="fl">个护</li>
                    <li class="fl">女鞋</li>
                    <li class="fl">百货</li>
                    <li class="fl">食品</li>
                    <li class="fl">包配</li>
                    <li class="fl">运动</li>
                    <li class="fl">男友</li>
                    <li class="fl">母婴</li>
                </ul>

                <div class="qr-code-box">
                    <img src="/mogu/Public/home/images/qianggouandfenlei/kuanqiangerweima.png" class="qr-code">
                    <div class="qr-text">手机快抢，快人一步</div>
                </div>
            </div>
            <div class="contentt fl">
                <!--左边的内容-->
                <div class="tab-content">
                    <div class="carousel-inner" style="overflow: visible;">
                        <div class="contentt-body active item tab-pane left_right_children" id="one">
                        <div class="contentt-header">
                            <div class="connt">
                                <span class="fl">限时限量 底价疯抢</span>

                            </div>
                        </div>
                            <div class="item-list">
                                <!--内容实例-->
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq1.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">50片独立包装 一次性口罩</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥11.90</span></span>
                                            <del class="old">￥22.58</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢264件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩116件</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq2.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">送面膜补水仪充电宝二合一</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥48.60</span></span>
                                            <del class="old">￥84.29</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢22件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩178件</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq3.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">桌面梳妆台化妆品收纳盒</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥13.60</span></span>
                                            <del class="old">￥19.88</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢275件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩222件</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq4.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">美丽枫叶加厚黑胶晴雨伞</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥22.80</span></span>
                                            <del class="old">￥36.89</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢39件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩111件</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq5.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">洁柔3层30卷无芯卷纸</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥28.00</span></span>
                                            <del class="old">￥29.99</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢80件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩420件</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq6.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">手机通用麦克风K歌耳机</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥17.60</span></span>
                                            <del class="old">￥28.29</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢182件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩318件</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq7.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">【双层大容量】时尚化妆包</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥29.90</span></span>
                                            <del class="old">￥50.00</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢29件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩151件</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq8.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">夹子台式摇头小风扇</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥27.60</span></span>
                                            <del class="old">￥48.72</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢17件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩183件</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="contentt-body item tab-pane left_right_children" id="two">
                            <div class="contentt-header">
                                <div class="connt">
                                    <span class="fl">限时限量 底价疯抢</span>

                        </span>
                                </div>
                            </div>
                            <div class="item-list">
                                <!--内容实例-->
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq9.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">杨幂同款人气笑脸小白鞋</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥39.90</span></span>
                                            <del class="old">￥18.58</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢90件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩179件</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq10.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">春夏新款绒面粗跟单鞋</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥40.00</span></span>
                                            <del class="old">￥98.57</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢42件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩67件</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq11.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">韩版女士流苏休闲大包包</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥49.00</span></span>
                                            <del class="old">￥85.00</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢9件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩81件</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq12.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">金属扣方头复古高跟鞋</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥49.00</span></span>
                                            <del class="old">￥85.00</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢9件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩41件</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq13.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">韩版水洗皮书包软皮小背包</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥49.00</span></span>
                                            <del class="old">￥85.00</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢9件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩41件</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq14.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">韩版水洗皮书包软皮小背包</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥59.00</span></span>
                                            <del class="old">￥113.00</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢5件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩95件</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq15.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">blings贵妇级早晚眼霜2瓶！</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥77.77</span></span>
                                            <del class="old">￥257.00</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢57件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩13件</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq16.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">韩版法式系带针织连衣裙</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥59.00</span></span>
                                            <del class="old">￥98.59</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢35件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩165件</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="contentt-body item tab-pane left_right_children" id="three">
                            <div class="contentt-header">
                                <div class="connt">
                                    <span class="fl">限时限量 底价疯抢</span>

                                </div>
                            </div>
                            <div class="item-list">
                                <!--内容实例-->
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq17.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">百搭帆布鞋 送后跟贴</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥35.00</span></span>
                                            <del class="old">￥95.00</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢94件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩21件</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq18.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">复古风方头搭扣粗跟凉鞋</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥45.00</span></span>
                                            <del class="old">￥98.26</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢43件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩183件</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq19.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">送袜子，林允儿同款帆布鞋</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥39.90</span></span>
                                            <del class="old">￥70.00</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢92件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩38件</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq20.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">迷你子母圆环包链条斜挎包</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥35.00</span></span>
                                            <del class="old">￥70.00</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢54件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩36件</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq21.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">可改色码 个性链条凉拖鞋</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥39.90</span></span>
                                            <del class="old">￥99.00</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢26件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩98件</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq22.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">透明果冻包（备注可调色）</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥38.00</span></span>
                                            <del class="old">￥71.00</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢68件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩7件</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq23.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">柔色漆光唇露7支礼盒装</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥49.00</span></span>
                                            <del class="old">￥118.00</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢106件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩24件</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq24.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">爱丽小屋双头高光修容棒</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥32.00</span></span>
                                            <del class="old">￥112.50</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢18件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩251件</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="contentt-body item tab-pane left_right_children" id="four">
                            <div class="contentt-header">
                                <div class="connt">
                                    <span class="fl">限时限量 底价疯抢</span>

                        </span>
                                </div>
                            </div>
                            <div class="item-list">
                                <!--内容实例-->
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq25.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">春季舒适厚底休闲运动鞋</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥45.00</span></span>
                                            <del class="old">￥114.15</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢24件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩73件</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq26.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">秒杀夏日链条亮皮小方包</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥39.00</span></span>
                                            <del class="old">￥85.58</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢48件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩52件</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq27.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">【平底绑带罗马凉鞋】</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥39.90</span></span>
                                            <del class="old">￥99.00</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢101件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩98件</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq28.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">人气仙女鞋 送潮搭鞋带</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥45.00</span></span>
                                            <del class="old">￥118.00</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢22件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩93件</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq29.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">春季新款女包手提单肩百搭</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥39.90</span></span>
                                            <del class="old">￥84.28</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢32件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩38件</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq30.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">淡化黑眼圈眼袋细纹护理</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥39.00</span></span>
                                            <del class="old">￥115.00</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢67件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩68件</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq31.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">淡化黑眼圈眼袋细纹护理</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥29.90</span></span>
                                            <del class="old">￥99.67</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢18件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩152件</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq32.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">高腰磨破毛边破洞牛仔短裤</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥35.00</span></span>
                                            <del class="old">￥55.72</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢131件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩69件</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="contentt-body item tab-pane left_right_children" id="five">
                            <div class="contentt-header">
                                <div class="connt">
                                    <span class="fl">限时限量 底价疯抢</span>
                                </div>
                            </div>
                            <div class="item-list">
                                <!--内容实例-->
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq33.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">【热销】WIS去黑头套装</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥69.00</span></span>
                                            <del class="old">￥196.00</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢30件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩50件</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq34.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">印花字母T恤裙可改码换色</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥49.00</span></span>
                                            <del class="old">￥84.29</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢5件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩55件</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq35.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">中长款刺绣格子衬衫外套女</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥39.60</span></span>
                                            <del class="old">￥71.29</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢67件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩223件</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq36.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">男士纯棉短裤可改颜色尺码</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥39.00</span></span>
                                            <del class="old">￥83.00</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢160件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩52件</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq37.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">狐狸猫咪松糕厚底凉拖鞋</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥39.00</span></span>
                                            <del class="old">￥82.29</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢93件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩7件</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq38.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">可拆洗-卡通熊猫枕头</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥28.60</span></span>
                                            <del class="old">￥50.00</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢76件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩24件</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq39.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">运动三件套学生女泳衣</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥68.00</span></span>
                                            <del class="old">￥120.00</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢42件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩38件</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq40.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">休闲运动阔腿裤防晒套装</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥69.00</span></span>
                                            <del class="old">￥113.72</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢65件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩35件</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="contentt-body item tab-pane left_right_children" id="six">
                            <div class="contentt-header">
                                <div class="connt">
                                    <span class="fl">限时限量 底价疯抢</span>

                                </div>
                            </div>
                            <div class="item-list">
                                <!--内容实例-->
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq41.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">甜美荷叶边蕾丝连衣裙</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥45.00</span></span>
                                            <del class="old">￥84.29</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢39件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩231件</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq42.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">纯色带胸垫镂空露背抹胸</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥12.90</span></span>
                                            <del class="old">￥28.43</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢183件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩67件</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq43.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">珀薇补水收缩毛孔面膜22片</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥49.00</span></span>
                                            <del class="old">￥138.00</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢56件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩24件</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq44.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">个性字母交叉圆领短袖T恤</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥38.00</span></span>
                                            <del class="old">￥70.00</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢19件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩181件</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq45.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">七彩灯LED发光防水凉鞋</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥69.00</span></span>
                                            <del class="old">￥125.00</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢44件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩161件</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq46.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">水密码气垫体验版送卸妆水</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥39.90</span></span>
                                            <del class="old">￥118.00</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢44件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩81件</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq47.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">遮盖黑眼圈斑点遮瑕膏8g</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥19.60</span></span>
                                            <del class="old">￥78.00</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢141件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩39件</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq48.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">超值春夏新款复古小方包</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥39.00</span></span>
                                            <del class="old">￥85.58</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢10件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩90件</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="contentt-body item tab-pane left_right_children" id="seven">
                            <div class="contentt-header">
                                <div class="connt">
                                    <span class="fl">限时限量 底价疯抢</span>

                                </div>
                            </div>
                            <div class="item-list">
                                <!--内容实例-->
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq49.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">配品牌镜盒太阳镜防紫外线</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥29.90</span></span>
                                            <del class="old">￥70.00</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢61件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩139件</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq50.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">两用空调被可折叠三合一</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥19.90</span></span>
                                            <del class="old">￥37.00</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢209件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩31件</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq51.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">透视荷叶边七分阔腿裤女</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥39.00</span></span>
                                            <del class="old">￥85.00</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢24件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩136件</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq52.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">新款流苏一脚蹬单鞋</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥39.90</span></span>
                                            <del class="old">￥99.00</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢55件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩45件</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq53.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">解决99%T区黑头白头鼻膜膏</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥29.00</span></span>
                                            <del class="old">￥78.00</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢62件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩106件</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq54.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">3支装√约会必备√亮泽口红</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥39.00</span></span>
                                            <del class="old">￥98.00</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢106件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩24件</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq55.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">韩版春季小白鞋系带韩版</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥39.90</span></span>
                                            <del class="old">￥85.00</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢52件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩144件</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq56.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">植护抽纸24包整箱装</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥29.60</span></span>
                                            <del class="old">￥44.15</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢222件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩8件</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="contentt-body item tab-pane left_right_children" id="eight">
                            <div class="contentt-header">
                                <div class="connt">
                                    <span class="fl">限时限量 底价疯抢</span>

                                </div>
                            </div>
                            <div class="item-list">
                                <!--内容实例-->
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq57.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">三袋经典香辣型柳州螺蛳粉</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥19.90</span></span>
                                            <del class="old">￥39.72</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢120件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩100件</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq58.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">蕾丝衫荷叶边半身裙套装</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥63.00</span></span>
                                            <del class="old">￥99.00</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢16件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩74件</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq59.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">短袖T恤+松紧腰长裤两件套</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥56.00</span></span>
                                            <del class="old">￥90.00</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢2件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩25件</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq60.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">时尚分格内衣收纳盒</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥9.90</span></span>
                                            <del class="old">￥23.80</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢300件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩0件</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq61.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">送面膜 自然堂超值礼盒</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥99.00</span></span>
                                            <del class="old">￥320.00</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢18件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩61件</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq62.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">送喷瓶！薏仁爽肤水日本版</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥35.00</span></span>
                                            <del class="old">￥98.00</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢118件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩25件</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq63.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">爆款双肩包刺绣胸包</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥63.60</span></span>
                                            <del class="old">￥263</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢56件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩78件</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq64.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">卡通棉麻衬衫休闲裤套装夏</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥62.00</span></span>
                                            <del class="old">￥100.00</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢9件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩46件</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="contentt-body item tab-pane left_right_children" id="nine">
                            <div class="contentt-header">
                                <div class="connt">
                                    <span class="fl">限时限量 底价疯抢</span>

                                </div>
                            </div>
                            <div class="item-list">
                                <!--内容实例-->
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq65.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">迷你掌上制冷空调USB风扇</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥29.90</span></span>
                                            <del class="old">￥50.00</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢81件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩45件</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq66.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">太阳能充电宝2万毫安 送灯</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥39.90</span></span>
                                            <del class="old">￥64.30</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢78件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩72件</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq67.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">韩版蕾丝小清新短袖连衣裙</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥59.90</span></span>
                                            <del class="old">￥98.98</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢74件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩251件</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq68.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">2017卡通短袖T恤</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥199.90</span></span>
                                            <del class="old">￥597.80</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢44件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩6件</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq69.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">夏季短袖翻领POLO衫</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥9.99</span></span>
                                            <del class="old">￥28.29</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢136件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩141件</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq70.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">新款宽松显瘦双层短袖T恤</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥35.60</span></span>
                                            <del class="old">￥55.00</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢147件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩251件</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq71.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">V领雪纺衫灯笼裤两件套</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥39.60</span></span>
                                            <del class="old">￥88.88</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢91件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩144件</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq72.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">可换码刺绣牛仔裤九分裤女</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥37.60</span></span>
                                            <del class="old">￥70.00</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢99件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩201件</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="contentt-body item tab-pane left_right_children" id="ten">
                            <div class="contentt-header">
                                <div class="connt">
                                    <span class="fl">限时限量 底价疯抢</span>
                                    <span class="fr frr"><span class="huise">距离开始还有
                            </span><span class="timer">
                                <span class="h">00</span>
                                :
                                  <span class="m">00</span>
                                :
                                  <span class="s">00</span>
                            </span>
                        </span>
                                </div>
                            </div>
                            <div class="item-list">
                                <!--内容实例-->
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq73.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">巧迪尚惠初学者彩妆9件套</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥49.60</span></span>
                                            <del class="old">￥158.00</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢75件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩45件</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq74.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">买1送5】明星同款水光BB霜</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥59.00</span></span>
                                            <del class="old">￥198.00</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢20件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩80件</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq75.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">约43包！子弹肠鸭翅辣脖</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥28.80</span></span>
                                            <del class="old">￥47.00</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢122件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩77件</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq76.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">新款纯棉T恤可改颜色码数</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥39.90</span></span>
                                            <del class="old">￥70.00</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢78件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩111件</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq77.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">骚粉厚底小白鞋</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥39.90</span></span>
                                            <del class="old">￥78.56</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢64件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩97件</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq78.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">夏款坡跟厚底一字扣凉鞋</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥69.00</span></span>
                                            <del class="old">￥128.00</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢16件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩128件</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq79.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">林珊珊一字领灯笼袖雪纺衫</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥49.60</span></span>
                                            <del class="old">￥98.44</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢43件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩457件</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq80.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">撕掉99%黑头粉刺 收敛毛孔</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥29.60</span></span>
                                            <del class="old">￥79.80</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢119件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩1件</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="contentt-body item tab-pane left_right_children" id="eleven">
                            <div class="contentt-header">
                                <div class="connt">
                                    <span class="fl">限时限量 底价疯抢</span>
                                    <span class="fr frr"><span class="huise">距离开始还有
                            </span><span class="timer">
                                <span class="h">00</span>
                                :
                                  <span class="m">00</span>
                                :
                                  <span class="s">00</span>
                            </span>
                        </span>
                                </div>
                            </div>
                            <div class="item-list">
                                <!--内容实例-->
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq81.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">甜美波浪花边粗跟单鞋</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥43.90</span></span>
                                            <del class="old">￥79.92</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢70件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩80件</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq82.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">【10条装】内裤女纯棉大码</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥30.60</span></span>
                                            <del class="old">￥44.29</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢32件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩45件</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq83.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">送眼线笔 气垫BB口红套组</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥45.60</span></span>
                                            <del class="old">￥182.29</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢62件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩38件</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq84.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">金属防水128gu盘</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥29.60</span></span>
                                            <del class="old">￥57.29</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢589件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩4865件</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq85.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">2-12岁女童镂空珍珠凉鞋</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥65.60</span></span>
                                            <del class="old">￥124.29</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢98件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩78件</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq86.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">上衣+吊带+阔腿裤三件套装</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥98.60</span></span>
                                            <del class="old">￥111.29</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢18件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩251件</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq87.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">升级版K歌带月光话筒耳机</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥187.60</span></span>
                                            <del class="old">￥256.44</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢19件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩48件</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq88.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">小童夏款纯棉两件套</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥45.56</span></span>
                                            <del class="old">￥88.88</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢89件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩789件</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="contentt-body item tab-pane left_right_children" id="tweve">
                            <div class="contentt-header">
                                <div class="connt">
                                    <span class="fl">限时限量 底价疯抢</span>
                                    <span class="fr frr"><span class="huise">距离开始还有
                            </span><span class="timer">
                                <span class="h">00</span>
                                :
                                  <span class="m">00</span>
                                :
                                  <span class="s">00</span>
                            </span>
                        </span>
                                </div>
                            </div>
                            <div class="item-list">
                                <!--内容实例-->
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq89.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">夏季露肩镂空旅游沙滩裙</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥66.60</span></span>
                                            <del class="old">￥70.29</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢68件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩487件</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq90.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">去黑头粉刺收缩毛孔套装</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥29.00</span></span>
                                            <del class="old">￥78.29</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢98件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩32件</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq91.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">时尚运动两件套可换尺码</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥72.60</span></span>
                                            <del class="old">￥88.29</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢48件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩44件</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq92.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">[祛痘清洁去黑头]绿豆面膜</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥22.3</span></span>
                                            <del class="old">￥48.00</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢596件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩46件</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq93.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">邦妮小方包宽肩带斜挎包</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥45.60</span></span>
                                            <del class="old">￥49.29</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢58件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩91件</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq94.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">得鲜丝滑遮瑕液/棒</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥27.60</span></span>
                                            <del class="old">￥36.29</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢25件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩15件</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq95.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">字母T恤+休闲裤两件套女</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥145.60</span></span>
                                            <del class="old">￥150.29</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢54件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩251件</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq96.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">可改码 睡公主纯棉睡衣</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥45.60</span></span>
                                            <del class="old">￥50.29</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢45件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩65件</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="contentt-body item tab-pane left_right_children" id="thirteen">
                            <div class="contentt-header">
                                <div class="connt">
                                    <span class="fl">限时限量 底价疯抢</span>
                                    <span class="fr frr"><span class="huise">距离开始还有
                            </span><span class="timer">
                                <span class="h">00</span>
                                :
                                  <span class="m">00</span>
                                :
                                  <span class="s">00</span>
                            </span>
                        </span>
                                </div>
                            </div>
                            <div class="item-list">
                                <!--内容实例-->
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq97.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">卡迪兔hello子母双肩包</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥36.60</span></span>
                                            <del class="old">￥48.29</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢458件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩56件</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq98.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">字母吊带上衣+时尚短裤</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥47.60</span></span>
                                            <del class="old">￥68.29</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢56件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩111件</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq99.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">宾兽韩版男士运动潮鞋</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥69.60</span></span>
                                            <del class="old">￥228.29</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢89件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩23件</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq100.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">创意时尚水晶羽毛台灯</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥77.60</span></span>
                                            <del class="old">￥100.29</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢89件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩46件</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq101.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">幸福狐狸同款聚拢调整文胸</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥17.60</span></span>
                                            <del class="old">￥28.29</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢16件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩91件</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq102.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">字母人物贴布七分袖T恤</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥89.60</span></span>
                                            <del class="old">￥100.29</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢9件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩29件</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq103.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">赠送大礼包刘海直板夹</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥25.60</span></span>
                                            <del class="old">￥30.29</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢48件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩59件</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq104.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">二次元少女趣味印花手提包</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥56.60</span></span>
                                            <del class="old">￥99.29</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢128件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩31件</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="contentt-body item tab-pane left_right_children" id="fourteen">
                            <div class="contentt-header">
                                <div class="connt">
                                    <span class="fl">限时限量 底价疯抢</span>
                                    <span class="fr frr"><span class="huise">距离开始还有
                            </span><span class="timer">
                                <span class="h">00</span>
                                :
                                  <span class="m">00</span>
                                :
                                  <span class="s">00</span>
                            </span>
                        </span>
                                </div>
                            </div>
                            <div class="item-list">
                                <!--内容实例-->
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq105.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">洗护发四种送380ml沐浴露</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥36.60</span></span>
                                            <del class="old">￥40.29</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢23件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩21件</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq106.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">买一送一 品牌情侣皮表</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥98.60</span></span>
                                            <del class="old">￥120.29</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢156件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩56件</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq107.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">韩版花朵刺绣花牛仔A字裙</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥126.60</span></span>
                                            <del class="old">￥130.29</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢5件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩10件</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq108.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">夏季开叉高腰西装阔腿裤</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥56.60</span></span>
                                            <del class="old">￥68.29</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢89件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩89件</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq109.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">【买一送一】750g+500g乳酪</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥30.60</span></span>
                                            <del class="old">￥33.29</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢89件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩61件</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq110.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">时尚套装针织外套+连衣裙</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥97.60</span></span>
                                            <del class="old">￥118.29</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢69件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩471件</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq111.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">【瘦身减肥】冬瓜荷叶茶2送1</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥23.60</span></span>
                                            <del class="old">￥28.29</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢89件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩461件</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq112.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">3瓶装540克水果茶果粒茶</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥27.60</span></span>
                                            <del class="old">￥30.29</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢23件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩45件</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="contentt-body item tab-pane left_right_children" id="fifteen">
                            <div class="contentt-header">
                                <div class="connt">
                                    <span class="fl">限时限量 底价疯抢</span>
                                    <span class="fr frr"><span class="huise">距离开始还有
                            </span><span class="timer">
                                <span class="h">00</span>
                                :
                                  <span class="m">00</span>
                                :
                                  <span class="s">00</span>
                            </span>
                        </span>
                                </div>
                            </div>
                            <div class="item-list">
                                <!--内容实例-->
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq113.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">仅5.62元/袋 8大袋足1096g</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥17.60</span></span>
                                            <del class="old">￥28.29</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢18件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩251件</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq114.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">买一送一共40包蛋黄夹心卷</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥13.60</span></span>
                                            <del class="old">￥24.29</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢54件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩91件</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq115.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">【强效减肥瘦身套餐】买送杯</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥10.60</span></span>
                                            <del class="old">￥20.29</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢18件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩251件</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq116.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">咪咪虾条18g*42包仅售13.7</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥13.70</span></span>
                                            <del class="old">￥20.29</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢89件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩74件</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq117.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">【强效丰胸美容组合】买3送1</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥47.60</span></span>
                                            <del class="old">￥96.29</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢45件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩15件</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq118.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">6大袋1068g 仅4.79元/袋</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥27.60</span></span>
                                            <del class="old">￥48.29</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢45件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩85件</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq119.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">0添加山楂条280g*2袋</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥14.60</span></span>
                                            <del class="old">￥32.29</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢54件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩22件</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq120.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">口碑刮油!荷叶玫瑰大肚茶</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥17.60</span></span>
                                            <del class="old">￥23.29</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢12件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩21件</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="contentt-body item tab-pane left_right_children" id="sixteen">
                            <div class="contentt-header">
                                <div class="connt">
                                    <span class="fl">限时限量 底价疯抢</span>
                                    <span class="fr frr"><span class="huise">距离开始还有
                            </span><span class="timer">
                                <span class="h">00</span>
                                :
                                  <span class="m">00</span>
                                :
                                  <span class="s">00</span>
                            </span>
                        </span>
                                </div>
                            </div>
                            <div class="item-list">
                                <!--内容实例-->
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq121.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">100包30种口味零食大礼包</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥17.60</span></span>
                                            <del class="old">￥28.29</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢18件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩61件</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq122.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">仅3.73元/袋 4大袋大颗粒</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥3.73</span></span>
                                            <del class="old">￥10.29</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢55件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩94件</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq123.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">【瘦身减肥】果蔬代餐粉 2盒</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥30.60</span></span>
                                            <del class="old">￥48.29</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢485件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩51件</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq124.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">送冰糖钢勺！爆款水果麦片！</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥20.60</span></span>
                                            <del class="old">￥30.29</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢145件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩25件</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq125.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">康恩贝 维生素E软胶囊</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥39.60</span></span>
                                            <del class="old">￥78.29</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢25件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩41件</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq126.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">【送杯勺】柚子茶柠檬茶2瓶</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥65.60</span></span>
                                            <del class="old">￥98.29</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢45件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩155件</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq127.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">小王子黑米蒸蛋糕800g</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥23.60</span></span>
                                            <del class="old">￥32.29</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢12件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩26件</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq128.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">青汁25杯碱性排毒清肠</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥19.60</span></span>
                                            <del class="old">￥29.29</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢15件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩151件</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="contentt-body item tab-pane left_right_children" id="seventeen">
                            <div class="contentt-header">
                                <div class="connt">
                                    <span class="fl">限时限量 底价疯抢</span>
                                    <span class="fr frr"><span class="huise">距离开始还有
                            </span><span class="timer">
                                <span class="h">00</span>
                                :
                                  <span class="m">00</span>
                                :
                                  <span class="s">00</span>
                            </span>
                        </span>
                                </div>
                            </div>
                            <div class="item-list">
                                <!--内容实例-->
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq129.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">阿胶糕36片滋补养颜送礼袋</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥17.60</span></span>
                                            <del class="old">￥28.29</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢18件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩61件</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq130.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">4大袋！兰花豆4口味任选</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥3.73</span></span>
                                            <del class="old">￥10.29</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢55件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩94件</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq131.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">疯抢5千份 劲仔小鱼20包</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥30.60</span></span>
                                            <del class="old">￥48.29</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢485件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩51件</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq132.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">仅3.6元/袋 10大袋组1643g</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥3.6</span></span>
                                            <del class="old">￥10.29</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢145件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩25件</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq133.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">12瓶 小洋人乳酸菌饮料</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥39.60</span></span>
                                            <del class="old">￥78.29</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢25件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩41件</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq134.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">9大袋1506g 仅5.1元/袋</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥65.60</span></span>
                                            <del class="old">￥98.29</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢45件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩155件</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq135.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">300g滋补养颜补血养气</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥23.60</span></span>
                                            <del class="old">￥32.29</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢12件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩26件</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq136.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">[必败款]紫薯+牛奶燕麦片</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥19.60</span></span>
                                            <del class="old">￥29.29</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢15件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩151件</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="contentt-body item tab-pane left_right_children" id="eighteen">
                            <div class="contentt-header">
                                <div class="connt">
                                    <span class="fl">限时限量 底价疯抢</span>
                                    <span class="fr frr"><span class="huise">距离开始还有
                            </span><span class="timer">
                                <span class="h">00</span>
                                :
                                  <span class="m">00</span>
                                :
                                  <span class="s">00</span>
                            </span>
                        </span>
                                </div>
                            </div>
                            <div class="item-list">
                                <!--内容实例-->
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq137.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">约114小包！宇仔大刀肉辣条</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥12.60</span></span>
                                            <del class="old">￥28.29</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢65件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩15件</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq138.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">80包20种零食大礼包</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥39.60</span></span>
                                            <del class="old">￥62.29</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢3件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩97件</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq139.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">送咖啡杯 多口味咖啡4罐装</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥23.60</span></span>
                                            <del class="old">￥30.29</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢8件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩91件</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq140.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">膳食纤维无糖燕麦片3斤</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥17.60</span></span>
                                            <del class="old">￥28.29</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢18件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩251件</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq141.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">早餐！百草味-糕点720g</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥27.60</span></span>
                                            <del class="old">￥36.29</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢89件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩485件</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq142.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">营养代餐水果多多即食免煮</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥19.60</span></span>
                                            <del class="old">￥33.29</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢98件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩56件</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq143.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">3.6元/袋 杂面面 送明信片</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥3.60</span></span>
                                            <del class="old">￥8.29</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢56件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩52件</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq144.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">买1送1枸杞菊花茶护眼明目</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥18.60</span></span>
                                            <del class="old">￥36.29</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢24件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩138件</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="contentt-body item tab-pane left_right_children" id="nineteen">
                            <div class="contentt-header">
                                <div class="connt">
                                    <span class="fl">限时限量 底价疯抢</span>
                                    <span class="fr frr"><span class="huise">距离开始还有
                            </span><span class="timer">
                                <span class="h">00</span>
                                :
                                  <span class="m">00</span>
                                :
                                  <span class="s">00</span>
                            </span>
                        </span>
                                </div>
                            </div>
                            <div class="item-list">
                                <!--内容实例-->
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq145.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">买一份送黄金豆130g</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥25.60</span></span>
                                            <del class="old">￥36.29</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢45件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩565件</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq146.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">足足一斤！口水娃瓜子仁</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥9.60</span></span>
                                            <del class="old">￥13.29</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢65件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩256件</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq147.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">祛湿美白 红豆薏米粉600g</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥19.60</span></span>
                                            <del class="old">￥28.29</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢21件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩45件</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq148.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">足足一斤！口水娃青豌豆</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥9.60</span></span>
                                            <del class="old">￥18.29</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢58件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩25件</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq149.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">【丰胸+减肥不减胸+代餐】</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥19.60</span></span>
                                            <del class="old">￥55.29</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢26件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩325件</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq150.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">无穷烤鸡小腿整盒 20个</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥38.60</span></span>
                                            <del class="old">￥61.29</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢39件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩69件</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq151.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">排毒青汁2盒60杯清肠刮油</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥29.60</span></span>
                                            <del class="old">￥78.29</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢25件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩22件</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq152.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">慕滋青柠三明治面包1000g</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥17.60</span></span>
                                            <del class="old">￥28.29</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢26件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩61件</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="contentt-body item tab-pane left_right_children" id="twenty">
                            <div class="contentt-header">
                                <div class="connt">
                                    <span class="fl">限时限量 底价疯抢</span>
                                    <span class="fr frr"><span class="huise">距离开始还有
                            </span><span class="timer">
                                <span class="h">00</span>
                                :
                                  <span class="m">00</span>
                                :
                                  <span class="s">00</span>
                            </span>
                        </span>
                                </div>
                            </div>
                            <div class="item-list">
                                <!--内容实例-->
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq153.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">德芙巧克力252g碗装</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥29.60</span></span>
                                            <del class="old">￥45.29</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢233件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩251件</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq154.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">周黑鸭 脖锁掌685g套餐</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥59.60</span></span>
                                            <del class="old">￥139.29</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢23件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩81件</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq155.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">良品铺子芒果干108g*3袋</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥25.90</span></span>
                                            <del class="old">￥42.29</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢12件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩254件</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq156.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">【美颜排毒】果蔬酵素买1送1</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥39.60</span></span>
                                            <del class="old">￥59.29</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢56件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩48件</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq157.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">买送杯！70g高端冻干柠檬</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥29.60</span></span>
                                            <del class="old">￥86.29</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢15件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩545件</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq158.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">糖水黄桃罐头425g*4罐</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥32.60</span></span>
                                            <del class="old">￥63.29</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢15件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩22件</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq159.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">超值58包卫龙辣条大礼包</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥26.60</span></span>
                                            <del class="old">￥66.29</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢25件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩455件</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq160.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">超值66包休闲零食大礼包</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥22.60</span></span>
                                            <del class="old">￥55.29</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢158件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩261件</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="contentt-body item tab-pane left_right_children" id="twenty-one">
                            <div class="contentt-header">
                                <div class="connt">
                                    <span class="fl">限时限量 底价疯抢</span>
                                    <span class="fr frr"><span class="huise">距离开始还有
                            </span><span class="timer">
                                <span class="h">00</span>
                                :
                                  <span class="m">00</span>
                                :
                                  <span class="s">00</span>
                            </span>
                        </span>
                                </div>
                            </div>
                            <div class="item-list">
                                <!--内容实例-->
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq161.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">雪玲妃500ml卸妆水送妆棉</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥32.60</span></span>
                                            <del class="old">￥128.29</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢34件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩29件</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq162.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">oppo/X9苹果挂绳手机壳</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥15.60</span></span>
                                            <del class="old">￥28.29</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢37件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩171件</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq163.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">拍画眉神器！3秒画好眉</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥17.60</span></span>
                                            <del class="old">￥28.29</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢57件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩23件</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq164.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">荷叶边泳衣好货直降31元</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥88.60</span></span>
                                            <del class="old">￥188.29</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢18件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩23件</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq165.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">蝶恋花蕾丝黑胶三折晴雨伞</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥27.60</span></span>
                                            <del class="old">￥32.29</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢54件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩43件</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq166.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">买一送一共40包紫薯夹心卷</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥23.60</span></span>
                                            <del class="old">￥32.29</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢8件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩51件</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq167.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">创意DIY定制抱枕</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥27.60</span></span>
                                            <del class="old">￥38.29</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢18件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩21件</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq168.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">两色喇叭袖上衣+喇叭裤</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥62.60</span></span>
                                            <del class="old">￥128.29</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢27件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩93件</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="contentt-body  item tab-pane left_right_children" id="twenty-two">
                            <div class="contentt-header">
                                <div class="connt">
                                    <span class="fl">限时限量 底价疯抢</span>
                                    <span class="fr frr"><span class="huise">距离开始还有
                            </span><span class="timer">
                                <span class="h">00</span>
                                :
                                  <span class="m">00</span>
                                :
                                  <span class="s">00</span>
                            </span>
                        </span>
                                </div>
                            </div>
                            <div class="item-list">
                                <!--内容实例-->
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq169.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">文艺清新小碎花连衣裙</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥58.60</span></span>
                                            <del class="old">￥128.29</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢19件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩45件</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq170.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">30片送3片！婴儿蚕丝面膜</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥37.60</span></span>
                                            <del class="old">￥98.29</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢196件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩64件</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq171.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">【套装】喇叭袖上衣+半身裙</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥67.60</span></span>
                                            <del class="old">￥128.29</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢38件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩251件</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq172.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">0-4岁 套装 纯棉新品 限量</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥47.60</span></span>
                                            <del class="old">￥188.29</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢8件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩98件</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq173.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">纯棉不起球纯色短袖T恤</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥47.60</span></span>
                                            <del class="old">￥68.29</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢74件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩44件</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq174.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">清凉一夏！必抢品时尚套装</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥87.60</span></span>
                                            <del class="old">￥158.29</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢88件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩21件</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq175.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">橘子美衣波西米亚连衣裙</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥47.60</span></span>
                                            <del class="old">￥81.29</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢82件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩83件</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq176.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">高腰磨破牛仔短裤毛边热裤</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥37.60</span></span>
                                            <del class="old">￥78.29</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢84件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩98件</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="contentt-body item tab-pane left_right_children" id="twenty-three">
                            <div class="contentt-header">
                                <div class="connt">
                                    <span class="fl">限时限量 底价疯抢</span>
                                    <span class="fr frr"><span class="huise">距离开始还有
                            </span><span class="timer">
                                <span class="h">00</span>
                                :
                                  <span class="m">00</span>
                                :
                                  <span class="s">00</span>
                            </span>
                        </span>
                                </div>
                            </div>
                            <div class="item-list">
                                <!--内容实例-->
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq177.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">V领喇叭袖荷叶边雪纺衬衫</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥43.60</span></span>
                                            <del class="old">￥54.29</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢6件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩51件</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq178.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">夏季防晒补水保湿喷雾</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥47.60</span></span>
                                            <del class="old">￥58.29</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢6件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩25件</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq179.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">【显脚瘦】气质名媛高跟凉鞋</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥67.60</span></span>
                                            <del class="old">￥76.29</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢84件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩47件</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq180.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">韩版短款小钱包女三折搭扣</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥27.60</span></span>
                                            <del class="old">￥38.29</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢64件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩43件</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq181.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">欧美粗跟包头凉拖鞋</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥57.60</span></span>
                                            <del class="old">￥68.29</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢48件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩51件</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq182.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">田园斜挎包（备注可调色）</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥32.60</span></span>
                                            <del class="old">￥68.29</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢32件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩58件</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq183.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">泰国Q10牛奶洗面奶嫩白</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥35.60</span></span>
                                            <del class="old">￥58.29</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢69件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩43件</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq184.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">爱茉莉西柚色南瓜色眼影盘</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥47.60</span></span>
                                            <del class="old">￥58.29</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢56件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩38件</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="contentt-body item tab-pane left_right_children" id="twenty-four">
                            <div class="contentt-header">
                                <div class="connt">
                                    <span class="fl">限时限量 底价疯抢</span>
                                    <span class="fr frr"><span class="huise">距离开始还有
                            </span><span class="timer">
                                <span class="h">00</span>
                                :
                                  <span class="m">00</span>
                                :
                                  <span class="s">00</span>
                            </span>
                        </span>
                                </div>
                            </div>
                            <div class="item-list">
                                <!--内容实例-->
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq185.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">买一送一】12夹防风晾衣架</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥17.60</span></span>
                                            <del class="old">￥28.29</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢16件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩21件</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq186.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">香口糖8包清口气约会必备</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥7.60</span></span>
                                            <del class="old">￥8.29</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢158件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩51件</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq187.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">【高品质】假两件纯棉T恤</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥87.60</span></span>
                                            <del class="old">￥128.29</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢148件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩21件</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq188.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">小王子酸奶蒸蛋糕800g</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥27.60</span></span>
                                            <del class="old">￥58.29</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢46件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩81件</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq189.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">夏季新款情侣五分裤套装</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥57.60</span></span>
                                            <del class="old">￥111.29</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢48件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩41件</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq190.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">拍夏季草编男士休闲鞋</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥347.60</span></span>
                                            <del class="old">428.29</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢18件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩71件</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq191.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">韩版条纹字母刺绣情侣T恤</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥47.60</span></span>
                                            <del class="old">￥58.29</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢63件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩64件</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="item fl">
                                    <a href="#" class="item-image fl">
                                        <img src="/mogu/Public/home/images/qianggouandfenlei/kq192.webp" alt="">
                                    </a>
                                    <a href="#" class="item-detail fl">
                                        <div class="title yahei">纯棉蕾丝花边公主裙睡裙</div>
                                        <div class="price">
                                            <span>快抢价<span class="cur">￥47.60</span></span>
                                            <del class="old">￥84.29</del>
                                        </div>
                                        <div class="status-bar-box">
                                            <div class="status-bar-text">已抢54件</div>
                                            <div class="status-bar">
                                                <div class="status-bar-progress"></div>
                                            </div>
                                        </div>
                                        <div class="buy-btn-box">
                                            <span class="buy-btn">立即抢购</span>
                                            <span class="left-text">仅剩98件</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="contentt-footer">
                    <a href="#" class="contentt-btn prev">上一张</a>
                    <a href="#" class="contentt-btn next">下一张</a>
                </div>
            </div>
        </div>
    </div>
</div>


<!--尾部-->

<div class="tail">
	<div class="tail-nav">
		<div class="tail-one">
			<div class="tail-oblock">
				<div class="tail-title">
					<h4 class="tail-h4">- 新手帮助 -</h4>
				</div>
				<ul>
					<li class="tail-oblock-li"><a href="">常见问题</a></li>
					<li class="tail-oblock-li"><a href="">自助服务</a></li>
					<li class="tail-oblock-li"><a href="">联系客服</a></li>
					<li class="tail-oblock-li"><a href="">意见反馈</a></li>
				</ul>
			</div>
			<div class="tail-oblock">
				<div class="tail-title">
					<h4 class="tail-h4">- 权益保障 -</h4>
				</div>
				<ul>
					<li class="tail-oblock-li"><a href="">全国包邮</a></li>
					<li class="tail-oblock-li"><a href="">7天无理由退货</a></li>
					<li class="tail-oblock-li"><a href="">退货运费补贴</a></li>
					<li class="tail-oblock-li"><a href="">限时发货</a></li>
				</ul>
			</div>
			<div class="tail-oblock">
				<div class="tail-title">
					<h4 class="tail-h4">- 支付方式 -</h4>
				</div>
				<ul>
					<li class="tail-oblock-li"><a href="">-微信支付</a></li>
					<li class="tail-oblock-li"><a href="">支付宝</a></li>
					<li class="tail-oblock-li"><a href="">白付美支付</a></li>
				</ul>
			</div>
			<div class="tail-oblock">
				<div class="tail-title">
					<h4 class="tail-h4">- 移动客户端下载 -</h4>
				</div>
				<ul>
					<li class="tail-oblock-li tail-oblock-ewm">
						<div class="tail-ewm">
							蘑菇街
						</div>
						<img src="/mogu/Public/home/images/tewm1.png" alt="" class="tail-ewm-img">
					</li>
					<li class="tail-oblock-li tail-oblock-ewm">
						<div class="tail-ewm">
							美丽说
						</div>
						<img src="/mogu/Public/home/images/ewm2.png" alt="" class="tail-ewm-img">
					</li>
					<li class="tail-oblock-li tail-oblock-ewm">
						<div class="tail-ewm">
							uni引力
						</div>
						<img src="/mogu/Public/home/images/ewm3.png" alt="" class="tail-ewm-img">
					</li>
				</ul>
			</div>
		</div>
		<div class="tail-two">
             <span class="tail-ts">
                 <a href="" class="tail-ta">美丽说</a>
                 <b class="tail-tb">|</b>
                 <a href="" class="tail-ta">蘑菇街游戏</a>
                 <b class="tail-tb">|</b>
                 <a href="" class="tail-ta">淘粉吧</a>
                 <b class="tail-tb">|</b>
                 <a href="" class="tail-ta">穿衣搭配</a>
                 <b class="tail-tb">|</b>
                 <a href="" class="tail-ta">秋季女装新款</a>
                 <b class="tail-tb">|</b>
                 <a href="" class="tail-ta">秋季连衣裙长袖</a>
                 <b class="tail-tb">|</b>
                 <a href="" class="tail-ta">秋季孕妇装</a>
                 <b class="tail-tb">|</b>
                 <a href="" class="tail-ta">QQ钱包</a>
                 <b class="tail-tb">|</b>
                 <a href="" class="tail-ta">时尚品牌网</a>
                 <b class="tail-tb">|</b>
                 <a href="" class="tail-ta">装修</a>
                 <b class="tail-tb">|</b>
                 <a href="" class="tail-ta">背带裤搭配</a>
                 <b class="tail-tb">|</b>
                 <a href="" class="tail-ta">衣联网</a>
                 <b class="tail-tb">|</b>
                 <a href="" class="tail-ta">美丽说</a>
                 <b class="tail-tb">|</b>
                 <a href="" class="tail-ta">播视网视频</a>
                 <b class="tail-tb">|</b>
                 <a href="" class="tail-ta">慧聪网</a>
                 <b class="tail-tb">|</b>
                 <a href="" class="tail-ta">衬衫搭配</a>
                 <b class="tail-tb">|</b>
                 <a href="" class="tail-ta">冬装时尚搭配</a>
                 <b class="tail-tb">|</b>
                 <a href="" class="tail-ta">针织衫搭配</a>
                 <b class="tail-tb">|</b>
                 <a href="" class="tail-ta">牛仔衣搭配</a>
                 <b class="tail-tb">|</b>
                 <a href="" class="tail-ta">风衣搭配</a>
                 <b class="tail-tb">|</b>
                 <a href="" class="tail-ta">补水面膜排行榜</a>
                 <b class="tail-tb">|</b>
                 <a href="" class="tail-ta">爱蘑菇街</a>
                 <b class="tail-tb">|</b>
             </span>
		</div>
		<div class="tail-three">
			<ul>
				<li class="tail-oblock-li"><a href="">关于我们</a></li>
				<li class="tail-oblock-li"><a href="">招聘信息</a></li>
				<li class="tail-oblock-li"><a href="">联系我们</a></li>
				<li class="tail-oblock-li"><a href="">商家后台</a></li>
				<li class="tail-oblock-li"><a href="">蘑菇商学院</a></li>
				<li class="tail-oblock-li"><a href="">商家社区</a></li>
			</ul>
			<p class="tail-tp">©2017 Mogujie.com 杭州卷瓜网络有限公司</p>
		</div>
		<div class="tail-four">
			<p class="tail-tp">
				<span class="tail-ts">营业执照注册号：</span>
				<a href="">330106000129004</a>
				<b class="tail-tb">|</b>
				<span  class="tail-ts">网络文化经营许可证：</span>
				<a href="">浙网文（2016）0349-219号</a>
				<b class="tail-tb">|</b>
				<span  class="tail-ts">增值电信业务经营许可证：</span>
				<a href="">浙B2-20110349</a>
				<b class="tail-tb">|</b>
				<a href="">安全责任书</a>
				<b class="tail-tb">|</b>
				<a href="">浙公网安备 33010602002329号</a>
				<b class="tail-tb">|</b>
			</p>
		</div>
	</div>
</div>

	<script src="/mogu/Public/common/bootstrap-3.3.7/js/jquery-1.11.1.min.js"></script>
	<script src="/mogu/Public/common/bootstrap-3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
<script src="/mogu/Public/home/js/timefast.js"></script>