<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Shopping_Cart</title>
    <link href="/mogu/Public./common/bootstrap-3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="/mogu/Public./common/Font-Awesome-master/css/font-awesome.min.css" rel="stylesheet">
    <script>
        var ConfirmOrder="<?php echo U('ConfirmOrder/buy');?>";
    </script>
    <link href="/mogu/Public./home/css/Shopping_Cart.css" rel="stylesheet">
    <link href="/mogu/Public./home/css/tail.css" rel="stylesheet">
</head>

<body>
<!---------------------头部--------------------->
<div class="nav">
    <div class="nav-wap ">
        <a href="http://localhost/mogu/Home/page/index.html" class="nav-logo">蘑菇头首页</a>
        <ul class="nav-ul">
            <li class="s1 nav-khfw">
                <a href=""> 去那个地方看看 </a>
                <i class="nav-icon"></i>

                <!--二级菜单-->
                <ol class="khfw-tcc">
                    <li><a href="">个人设置</a></li>
                    <li><a href="">账号绑定</a></li>
                    <li><a href="">退出</a></li>
                </ol>
            </li>

            <li class="s1 ullia"><a href="" style="padding-left: 15px">消息</a></li>

            <li class="s1 ullia nav-khfw">
                <a href=""> 我的收藏 </a>
                <i class="nav-icon"></i>

                <!--二级菜单-->
                <ol class="khfw-tcc">
                    <li><a href="">收藏的商品</a></li>
                    <li><a href="">收藏的小店</a></li>
                    <li><a href="">浏览足迹</a></li>
                </ol>
            </li>

            <li class="s1 ullia nav-dd"><a href="http://localhost/mogu/Home/Order/Order.html" target="_blank">我的订单</a></li>

            <li class="s1 ullia nav-shopping">
                <a href=" "><span>购物车</span></a>

                <!--二级菜单-->
                <div class="sp-cart">
                    <ul class="sp_cart_ul">
                        <li class="sp_cart_li">
                            <a href="javascript:;" target="_blank" class="imgbox">
                                <img src="/mogu/Public/home/images/header_sp1.jpg">
                            </a>
                            <a href="javascript:;" target="_blank" class="sp_title">冬季2016新款呢子大衣女长款韩版茧型毛呢外套加厚宽松潮学生</a>
                            <span class="sp_info">颜色: 黑色  尺码: M  </span>
                            <span class="sp_price">¥137.99</span>
                            <span class="sp_del">删除</span>
                        </li>
                    </ul>
                    <div class="sp_foot">
                        <p class="sp__foot_info">购物车里还有<b class="sp_num">12</b>件商品</p>
                        <div class="sp_see_box"> <a href="javascript:;" target="_blank" class="sp_see">查看购物车</a> </div>
                    </div>
                </div>
            </li>

            <li class="s1 ullia nav-khfw">
                <a href="">客户服务</a>
                <i class="nav-icon"></i>

                <!--二级菜单-->
                <ol class="khfw-tcc">
                    <li><a href="">消费者服务</a></li>
                    <li><a href="">商家服务</a></li>
                    <li><a href="">规则中心</a></li>
                </ol>
            </li>

            <li class="s1 ullia nav-wdxd">
                <a href="">我的小店</a>
                <i class="nav-icon"></i>

                <!--二级菜单-->
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

<!----------------------身体部分-------------------->
<div id="s_c">
    <div class="s_c_header">
        <div class="s_c_wrap">
            <a href="http://localhost/mogu/Home/page/index.html"><div class="s_c_logo"></div></a>
            <div class="s_c_process">
                <div class="s_c_process_step">
                    <div class="s_c_process_lc2"></div>
                    <i class="s_c_process_i i1">1<span class="s_c_process_tip1">购物车</span></i>
                    <i class="s_c_process_i i2">2<span class="s_c_process_tip">确认订单</span></i>
                    <i class="s_c_process_i i3">3<span class="s_c_process_tip">完成</span></i>
                </div>
            </div>
        </div>
    </div>

    <div class="s_c_list">
        <ul class="s_c_list_ul">
            <li>
                <a href="javascript:;" class="s_c_list_a s_c_a s_c_cur"> 全部商品 <span class="s_c_num"></span></a>
            </li>
            <li>
                <a href="javascript:;" class="s_c_list_a s_c_a"> 优惠 <span class="s_c_num"></span></a>
            </li>
            <li>
                <a href="javascript:;" class="s_c_list_a s_c_a"> 库存紧张 <span class="s_c_num"></span></a>
            </li>
        </ul>

        <div class="s_c_menu">

            <table class="s_c_table">
                <thead>
                    <tr>
                        <th class="s_c_table_th ">
                            <input type="checkbox" name="s_all" class="s_all tr_checkmr" id="s_all_h">
                            <label for="s_all_h">全选</label>
                        </th>
                        <th class="s_c_table_goods"></th>
                        <th class="s_c_table_goodsinfo">商品信息</th>
                        <th>单价(元)</th>
                        <th class="s_c_table_goodsnum">数量</th>
                        <th class="s_c_table_goodssum">小计(元)</th>
                        <th class="s_c_table_goodsctrl">操作</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if(is_array($cart_list)): $i = 0; $__LIST__ = $cart_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cart_item): $mod = ($i % 2 );++$i;?><tr class="s_c_cart_mitem ">
                            <td class="s_c_vm "> <input type="checkbox" class="s_c_cart_thcheck qx">  </td>
                            <td class="s_c_table_goods">
                                <a class="s_c_cart_goods_img" href="<?php echo U('Goods/details',array('goods_id'=>$cart_item['goods_id']));?>">
                                    <div class="pic-img-s"><img src="/mogu/Public/<?php echo ($cart_item['goods_img']); ?>"></div>
                                    <!--鼠标经过图片，显示大的图片-->
                                    <div class="s_c_big_pic">
                                        <div class="pic-img-b"><img src="/mogu/Public/<?php echo ($cart_item['goods_img']); ?>"></div>
                                    </div>
                                    <!--end结束-->
                                </a>

                                <a class="s_c_cart_goods_text" href="<?php echo U('Goods/details',array('goods_id'=>$cart_item['goods_id']));?>"><?php echo ($cart_item['goods_title']); ?></a>
                            </td>
                            <td class="s_c_cart_alcenter">
                                <p class="s_c_cart_lh20">颜色：<?php echo ($cart_item['goods_color']); ?></p>
                                <p class="s_c_cart_lh20">尺码：<?php echo ($cart_item['goods_size']); ?></p>
                            </td>
                            <td class="s_c_cart_alcenter">
                                <p class="s_c_cart_lh20 cart_throughline "><?php echo ($cart_item['goods_oldprice']); ?></p>
                                <p class="s_c_cart_lh20 cart_bold "><?php echo ($cart_item['goods_price']); ?></p>
                            </td>
                            <td id="tab">
                                <div class="s_c_cart_num">
                                    <input type="text" class="s_c_cart_num_input " value="<?php echo ($cart_item['goods_number']); ?>">
                                    <a><span class="s_c_cart_num_add">+</span></a>
                                    <a><span class="s_c_cart_num_reduce disable">-</span></a>
                                </div>
                            </td>
                            <td class="s_c_cart_prices"><p class="total">
                            <?php echo $cur_price=$cart_item['goods_price']*$cart_item['goods_number']; $total_price+=$cur_price; ?></p></td>
                            <td class="s_c_cart_detele" onclick="deleteCart()"><a>删除</a></td>
                        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                </tbody>
            </table>

        </div>
        <!--底部结算部分-->
        <div class="s_c_cart_paybar s_c_paybar" id="cartPaybar">
            <div class="s_c_cart_paybar_vmbox">
                <input type="checkbox" name="s_all" class="s_c_all_slave cart_vm qx" id="s_all_f">
                <label for="s_all_f" class="mr10">全选</label>
                <a href="javascript:;" class="mr10 cart_hoverline" id="cartRC">删除</a>
                <a href="javascript:;" class="mr10 cart_hoverline" id="cartRU">清空失效商品</a>
                <a href="javascript:;" class="mr10 cart_hoverline" id="cartRTC">移入收藏夹</a>
            </div>
            <div class="s_c_paybar_fr">
                <div class="s_c_cart_paybar_info fr"> 共有
                    <span class="s_c_cart_deep_red goodsNum">0</span>
                    件商品，总计：
                </div>
                <div class="s_c_cart_paybar_info_cost cart_deep_red">¥ 0.00</div>

                <span class="s_c_cart_paybtn fr cart_paybtn_disable" id="payBtn" >去付款</span>
                <span class="s_c_cart_paybtn2 fr" id="payBtn2" style="display: none" onclick="buy()" href="http://localhost/mogu/Home/ConfirmOrder/index.html">去付款</span>
            </div>
        </div>
    </div>
</div>

<!----------------------底部-------------------->

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
	<script src="/mogu/Public/home/js/header.js"></script>
</body>
</html>

<script src="/mogu/Public/home/js/Shopping_Cart.js"></script>