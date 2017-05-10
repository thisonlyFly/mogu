<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>mogu</title>
	<link rel="stylesheet" href="/mogu/Public/common/bootstrap-3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="/mogu/Public/common/Font-Awesome-master/css/font-awesome.min.css">

	<link rel="stylesheet" href="/mogu/Public/home/css/header.css">
	<link rel="stylesheet" href="/mogu/Public/home/css/twzt.css">
	<link rel="stylesheet" href="/mogu/Public/home/css/tail.css">

</head>
<body>
<!--头部1-->
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
<!--头部2-->
<div class="header header-bottom">
	<div class="nav-wap">
		<a href="http://localhost/mogu/Home/page/index.html" class="logo"></a>
		<div class="header-ssk">
			<div class="header-srk">
				<div class="header-ssp">
					<span class="selected" id="sl">搜商品</span>
					<ol class="ssp-ol">
						<li class="lisp"><a href="javascript:;">商品</a></li>
						<li class="lidp"><a href="javascript:;">店铺</a></li>
					</ol>
				</div>
				<div class="header-text">
					<input type="text" placeholder="套装新版韩装" class="input-text">
					<div class="header-lsjl"><span style="padding: 10px">历史记录</span></div>
					<input type="submit" value="搜索" class="input-btn">
				</div>
			</div>
			<div class="header-tj">
				<a href="">春季套装</a>
				<a href="">卫衣</a>
				<a href="">牛仔裤</a>
				<a href="">打底衫</a>
				<a href="">单鞋</a>
				<a href="">斜挎包</a>
				<a href="">男士外套</a>
				<a href="">棒球服</a>
				<a href="">连衣裙</a>
			</div>
		</div>
		<div class="header-ewm">
			<img src="/mogu/Public/home/images/ewm1.png" alt="">
		</div>
	</div>
</div>

    <link rel="stylesheet" href="/mogu/Public/home/css/jinxuan.css">
    <link href="/mogu/Public/home/css/share.css" rel="stylesheet">
<style>
    #body_wrap #hover:hover{
    display: block;
}</style>


<!------------------中间内容-------------------------->
<div id="body_wrap" style="background-color: rgb(245,245,245);">

    <div class="social-layout">
        <div class="social-wrap" style="color:#333333">
            <a style="color:#333333" href="http://www.mogujie.com/">首页</a> &gt; 专题 &gt; 精选专题
        </div>
    </div>

<!--精选专题文字-->
    <div class="social-lay">
        <div class="container">
            <!--<div class="front-image frame"></div>-->
            <h2 id="PageTitle_H2" class="title_h2">
                变瘦!变高!变时髦! 高腰裤满足你</h2>
            <div class=" frame">

                <p>天气回暖，终于又到了可以小秀蛮腰的季节。高一截的高腰裤还在强劲的流行着，
                    除了可以让你小秀身材，也可调节身体比例，实在是小个子们的显高神器！<br>
                    <br>
                    而且无论是贴身的、宽松的高腰裤，都是姑娘们的救星，瞬间拉长你的身材比例，
                    而且高腰裤还能很好的掩饰肚腩上的小赘肉，绝对是搭配利器，穿一件简单的短上衣，
                    脚上搭配一双复古球鞋或者布洛克鞋，就能瞬间时髦感超强!</p>
            </div>
            <!-- <div class="back-image frame"></div>-->
        </div>

        <!--右边微博-->
        <div class="user-info" style="display: block;">
            <div class="User_Wrap">
                <div class="topic_user">
                    <div class="lifestyle_topic_user_avatar_wrap">
                        <img class="avatar" src="/mogu/Public/home/images/jingxuan/xiaolujiejie.jpg" alt="">
                    </div>
                    <h4 class="user_name">小鹿姐姐LH7</h4>
                    <p class="user_intro">每周五的微博你们都有关注吗？</p>
                </div>
            </div>
        </div>
    </div>
<!--推荐单品-->
    <div class=" clearfix ">
        <h3 class="top-title">推荐单品</h3>
        <div class="lazyData ">
            <div class="goods cube-acm-node " href="http://shop.mogujie.com/detail/1k7hoja">
                <div class="goods-image J_dynamic_imagebox ">
                    <img class="J_dynamic_img fill_img" src="/mogu/Public/home/images/jingxuan/tuijiankuzi01.jpg" alt="">
                </div>
                <div class="goods-info">
                    <p class="noicon title">九分长度刚刚好露出细细的脚踝，显瘦没得说</p>
                    <div class="price">
                        <span class="price-box"><i>¥</i><strong class="price-num">59.50</strong></span>
                        <span class="fr like">1755<img src="/mogu/Public/home/images/jingxuan/start.png" alt=""></span>
                    </div>
                </div>
            </div>
            <a class="goods cube-acm-node " href="http://shop.mogujie.com/detail/1k7hoja">
                <div class="goods-image J_dynamic_imagebox ">
                    <img class="J_dynamic_img fill_img" src="/mogu/Public/home/images/jingxuan/tuijiankuzi01.jpg" alt="">
                </div>
                <div class="goods-info">
                    <p class="noicon title">九分长度刚刚好露出细细的脚踝，显瘦没得说</p>
                    <div class="price">
                        <span class="price-box"><i>¥</i><strong class="price-num">59.50</strong></span>
                        <span class="fr like">1755<img src="/mogu/Public/home/images/jingxuan/start.png" alt=""></span>
                    </div>
                </div>
            </a>
            <a class="goods cube-acm-node " href="http://shop.mogujie.com/detail/1k7hoja">
                <div class="goods-image J_dynamic_imagebox ">
                    <img class="J_dynamic_img fill_img" src="/mogu/Public/home/images/jingxuan/tuijiankuzi01.jpg" alt="">
                </div>
                <div class="goods-info">
                    <p class="noicon title">九分长度刚刚好露出细细的脚踝，显瘦没得说</p>
                    <div class="price">
                        <span class="price-box"><i>¥</i><strong class="price-num">59.50</strong></span>
                        <span class="fr like">1755<img src="/mogu/Public/home/images/jingxuan/start.png" alt=""></span>
                    </div>
                </div>
            </a>
            <a class="goods cube-acm-node " href="http://shop.mogujie.com/detail/1k7hoja">
                <div class="goods-image J_dynamic_imagebox ">
                    <img class="J_dynamic_img fill_img" src="/mogu/Public/home/images/jingxuan/tuijiankuzi01.jpg" alt="">
                </div>
                <div class="goods-info">
                    <p class="noicon title">九分长度刚刚好露出细细的脚踝，显瘦没得说</p>
                    <div class="price">
                        <span class="price-box"><i>¥</i><strong class="price-num">59.50</strong></span>
                        <span class="fr like">1755<img src="/mogu/Public/home/images/jingxuan/start.png" alt=""></span>
                    </div>
                </div>
            </a>
        </div>
        <div class="lazyData">
            <a class="goods cube-acm-node " href="http://shop.mogujie.com/detail/1k7hoja">
                <div class="goods-image J_dynamic_imagebox ">
                    <img class="J_dynamic_img fill_img" src="/mogu/Public/home/images/jingxuan/tuijiankuzi01.jpg" alt="">
                </div>
                <div class="goods-info">
                    <p class="noicon title">九分长度刚刚好露出细细的脚踝，显瘦没得说</p>
                    <div class="price">
                        <span class="price-box"><i>¥</i><strong class="price-num">59.50</strong></span>
                        <span class="fr like">1755<img src="/mogu/Public/home/images/jingxuan/start.png" alt=""></span>
                    </div>
                </div>
            </a>
            <a class="goods cube-acm-node " href="http://shop.mogujie.com/detail/1k7hoja">
                <div class="goods-image J_dynamic_imagebox ">
                    <img class="J_dynamic_img fill_img" src="/mogu/Public/home/images/jingxuan/tuijiankuzi01.jpg" alt="">
                </div>
                <div class="goods-info">
                    <p class="noicon title">九分长度刚刚好露出细细的脚踝，显瘦没得说</p>
                    <div class="price">
                        <span class="price-box"><i>¥</i><strong class="price-num">59.50</strong></span>
                        <span class="fr like">1755<img src="/mogu/Public/home/images/jingxuan/start.png" alt=""></span>
                    </div>
                </div>
            </a>
            <a class="goods cube-acm-node " href="http://shop.mogujie.com/detail/1k7hoja">
                <div class="goods-image J_dynamic_imagebox ">
                    <img class="J_dynamic_img fill_img" src="/mogu/Public/home/images/jingxuan/tuijiankuzi01.jpg" alt="">
                </div>
                <div class="goods-info">
                    <p class="noicon title">九分长度刚刚好露出细细的脚踝，显瘦没得说</p>
                    <div class="price">
                        <span class="price-box"><i>¥</i><strong class="price-num">59.50</strong></span>
                        <span class="fr like">1755<img src="/mogu/Public/home/images/jingxuan/start.png" alt=""></span>
                    </div>
                </div>
            </a>
            <a class="goods cube-acm-node " href="http://shop.mogujie.com/detail/1k7hoja">
                <div class="goods-image J_dynamic_imagebox ">
                    <img class="J_dynamic_img fill_img" src="/mogu/Public/home/images/jingxuan/tuijiankuzi01.jpg" alt="">
                </div>
                <div class="goods-info">
                    <p class="noicon title">九分长度刚刚好露出细细的脚踝，显瘦没得说</p>
                    <div class="price">
                        <span class="price-box"><i>¥</i><strong class="price-num">59.50</strong></span>
                        <span class="fr like">1755<img src="/mogu/Public/home/images/jingxuan/start.png" alt=""></span>
                    </div>
                </div>
            </a>
        </div>
    </div>
<!--大家都在看-->
    <div class=" clearfix b1">
        <h3 class="top-title">大家都在看</h3>
        <div class="lazyData">
            <div class="goods red height" href="http://shop.mogujie.com/detail/1k7hoja">
                <div class="goods-image J_dynamic_imagebox ">
                    <img class="J_dynamic_img fill_img" src="/mogu/Public/home/images/jingxuan/dajiaduzaikan01.jpg" alt="">
                    <a class="likeLink yahei">找相似</a>
                </div>
                <div class="goods-info">
                    <p class="noicon title">2017春上新韩版宽松显瘦高腰裤BF风大码牛仔裤女小脚哈伦裤</p>
                    <div class="price">
                        <span class="price-box"><i>¥</i><strong class="price-num">59.50</strong></span>
                        <p class="org_price fl yahei" style="float: left;font-size: 14px;color: #666; margin: 0 0 0 8px;text-decoration:line-through;">
                            ¥&nbsp;<span>84</span></p>
                        <span class="fr like">1755<img src="/mogu/Public/home/images/jingxuan/start.png" alt=""></span>
                    </div>
                </div>
            </div>
            <div class="goods red height" href="http://shop.mogujie.com/detail/1k7hoja">

                <div class="goods-image J_dynamic_imagebox ">
                    <img class="J_dynamic_img fill_img" src="/mogu/Public/home/images/jingxuan/dajiaduzaikan02.jpg" alt="">
                    <a class="likeLink yahei">找相似</a>
                </div>
                <div class="goods-info">
                    <p class="noicon title">2017春上新韩版宽松显瘦高腰裤BF风大码牛仔裤女小脚哈伦裤</p>
                    <div class="price">
                        <span class="price-box"><i>¥</i><strong class="price-num">59.50</strong></span>
                        <p class="org_price fl yahei" style="float: left;font-size: 14px;color: #666; margin: 0 0 0 8px;text-decoration:line-through;">
                            ¥&nbsp;<span>84</span></p>
                        <span class="fr like">1755<img src="/mogu/Public/home/images/jingxuan/start.png" alt=""></span>
                    </div>
                </div>
            </div>
            <div class="goods red height" href="http://shop.mogujie.com/detail/1k7hoja">

                <div class="goods-image J_dynamic_imagebox ">
                    <img class="J_dynamic_img fill_img" src="/mogu/Public/home/images/jingxuan/dajiaduzaikan01.jpg" alt="">
                    <a class="likeLink yahei">找相似</a>
                </div>
                <div class="goods-info">
                    <p class="noicon title">2017春上新韩版宽松显瘦高腰裤BF风大码牛仔裤女小脚哈伦裤</p>
                    <div class="price">
                        <span class="price-box"><i>¥</i><strong class="price-num">59.50</strong></span>
                        <p class="org_price fl yahei" style="float: left;font-size: 14px;color: #666; margin: 0 0 0 8px;text-decoration:line-through;">
                            ¥&nbsp;<span>84</span></p>
                        <span class="fr like">1755<img src="/mogu/Public/home/images/jingxuan/start.png" alt=""></span>
                    </div>
                </div>
            </div>
            <div class="goods red height" href="http://shop.mogujie.com/detail/1k7hoja">
                <div class="goods-image J_dynamic_imagebox ">
                    <img class="J_dynamic_img fill_img" src="/mogu/Public/home/images/jingxuan/dajiaduzaikan02.jpg" alt="">
                    <a class="likeLink yahei">找相似</a>
                </div>
                <div class="goods-info">
                    <p class="noicon title">2017春上新韩版宽松显瘦高腰裤BF风大码牛仔裤女小脚哈伦裤</p>
                    <div class="price">
                        <span class="price-box"><i>¥</i><strong class="price-num">59.50</strong></span>
                        <p class="org_price fl yahei" style="float: left;font-size: 14px;color: #666; margin: 0 0 0 8px;text-decoration:line-through;">
                            ¥&nbsp;<span>84</span></p>
                        <span class="fr like">1755<img src="/mogu/Public/home/images/jingxuan/start.png" alt=""></span>
                    </div>
                </div>
            </div>
            <div class="goods red height" href="http://shop.mogujie.com/detail/1k7hoja">
                <div class="goods-image J_dynamic_imagebox ">
                    <img class="J_dynamic_img fill_img" src="/mogu/Public/home/images/jingxuan/dajiaduzaikan01.jpg" alt="">
                    <a class="likeLink yahei">找相似</a>
                </div>
                <div class="goods-info">
                    <p class="noicon title">2017春上新韩版宽松显瘦高腰裤BF风大码牛仔裤女小脚哈伦裤</p>
                    <div class="price">
                        <span class="price-box"><i>¥</i><strong class="price-num">59.50</strong></span>
                        <p class="org_price fl yahei" style="float: left;font-size: 14px;color: #666; margin: 0 0 0 8px;text-decoration:line-through;">
                            ¥&nbsp;<span>84</span></p>
                        <span class="fr like">1755<img src="/mogu/Public/home/images/jingxuan/start.png" alt=""></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!----------------------底部------------------------->

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
<script src="/mogu/Public/home/js/jinxuan.js"></script>