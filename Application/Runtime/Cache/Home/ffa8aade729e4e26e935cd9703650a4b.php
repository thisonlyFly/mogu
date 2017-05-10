<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
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


<link rel="stylesheet" type="text/css" href="/mogu/Public/home/css/ShoppingCart.css">
<!--//导航说明-->
<div class="breadcrumb">
	<div class="container">
		<a href="#"> <i class="fa fa-home"></i>
			Home
		</a>
		/  &nbsp;
		<span>Your shopping cart</span>
		<h5>
			SHOPPING-CART SUMMARY
			<span style="font-size: 12px;float: right">Your shopping cart containsouem:1</em>
			Products
		</span>
	</h5>
</div>
</div>

<!--内容-->
<div class="container bg_white_color">
<div class="center_column">
	<div class="row">
		<!-- /*购物流程*/-->
		<div class="cart-top">
			<ul class="">
				<li >
					<span>01. Summary</span>
				</li>
				<li>
					<span>02. Sign in</span>
				</li>
				<li class="current">
					<span>03. Address</span>
				</li>
				<li>
					<span>04. Shipping</span>
				</li>
				<li>
					<span>05. Payment</span>
				</li>
			</ul>
		</div>
		<!--列表表单-->
		<div class="list">
			<form method="post" action="<?php echo U('Order/submit');?>">
				<h2>请输入收货地址：</h2>
				<div class="form-group">
					<label >收货人：</label>
					<input type="text" class="form-control" name="consignee"></div>

				<div class="form-group">
					<label >手机号码：</label>
					<input type="text" class="form-control" name="mobile"></div>
				<div class="form-group">
					<label >收货地址：</label>
					<input type="text" class="form-control" name="address"></div>
				<div class="form-group">
					<label >邮编：</label>
					<input type="text" class="form-control" name="zipcode"></div>
				<h2 style="border-top: 1px solid #eee;padding-top: 20px;margin-top: 36px;">购买的商品信息</h2>
				<div style="background-color:#eee">
					<table>
						<thead>
							<tr>
								<td class="center">图片</td>
								<td>商品名称</td>
								<td class="center">价格</td>
								<td class="center">数量</td>
								<td class="center">总计</td>
							</tr>
						</thead>
						<tbody>
									<?php $total_price=0; ?>

							<?php if(is_array($cart_list)): $i = 0; $__LIST__ = $cart_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cart_item): $mod = ($i % 2 );++$i;?><tr>

									<td class="cart_Product">
										<a href="<?php echo U('Goods/detailed',array('id'=> $cart_item['goods_id']));?>">
											<img width="100px" src="/mogu/Public/<?php echo ($cart_item['goods_thumb']); ?>" alt=""></a>
									</td>
									<td class="cart_Description">
										<a href="<?php echo U('Goods/detailed',array('id'=> $cart_item['goods_id']));?>">
											<p><?php echo ($cart_item['goods_name']); ?></p>
										</a>

									</td>
									<td class="cart_Unit">
										<span class="price color_red">
											￥ <em><?php echo ($cart_item['goods_price']); ?></em>
										</span>
									</td>
									<td class="td_num center "> <b><?php echo ($cart_item['goods_number']); ?></b>
									</td>
									<td class="cart_Total">
										<span class="price color_red">￥<?php echo $cur_price=$cart_item['goods_price']*$cart_item['goods_number']; $total_price+=$cur_price; ?></span>
									</td>
								</tr><?php endforeach; endif; else: echo "" ;endif; ?>
						</table>
				</div>
				<div  style="float:right;margin-right:28px">
					<h3>金额：￥<?php echo $total_price; ?></h3>
					<h3>邮费：￥0.00</h3>
					<h3 style="color:red">总金额：￥<?php echo $total_price; ?></h3>
				</div>
				<div  style="float:right;margin-right:28px;width: 118px;clear: both;margin-top: 20px;">
				<input type="hidden" name="goods_amount" value="<?php echo $total_price; ?>">
				<input type="hidden" name="cart_ids" value="<?php echo ($cart_ids); ?>">
				<input type="hidden" name="shipping_fee" value="0.00">
				<input type="hidden" name="order_amount" value="<?php echo $total_price; ?>">
					<input type="submit" value="提交订单" class="btn  btn-block btn-larg">

				</div>
			</div>
		</div>

		</form>
	</div>

	
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