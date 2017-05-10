<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>mogu</title>
    <link rel="stylesheet" href="/mogu/Public/common/bootstrap-3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="/mogu/Public/common/Font-Awesome-master/css/font-awesome.min.css">

    <link rel="stylesheet" href="/mogu/Public/home/css/twzt.css">
    <link rel="stylesheet" href="/mogu/Public/home/css/tail.css">
    <link rel="stylesheet" href="/mogu/Public/home/css/user.css">

</head>
<body>
<div class="user_page">
    <div class="user_logo" >
        <img src="/mogu/Public/home/images/user_logo.png" alt="">
    </div>
    <div class="user_banner" id="register">
        <!--注册页面-->
        <form onsubmit="return is_value('register');" method="post" action="<?php echo U('user/register');?>">
        <div class="user">
            <div class="rg_title user_padding register">
                <h3>新用户注册</h3>
            </div>
            <div class="user_padding">
                <div class="form_group">
                    <p class="error_tip error_username">请输入用户名</p>
                    <p class="error_tip error_pwd">请输入密码</p>
                    <p class="error_tip error_repwd">请输入确认密码</p>
                </div>
                <div class="form_group">
                    <lable class="lable_sty">用户名：</lable>
                    <div class="input_w"><input type="text" class="input_sty user_name" placeholder="用户名" name="user_name"></div>
                </div>
                <div class="form_group">
                    <lable  class="lable_sty">密码：</lable>
                    <div class="input_w"><input type="password" class="input_sty user_password"  placeholder="密码" name="user_password"></div>
                </div>
                <div class="form_group">
                    <lable  class="lable_sty">确认密码：</lable>
                    <div class="input_w"><input type="password" class="input_sty user_password" placeholder="确认密码" name="confirm_password" id="repwd"></div>
                <div class="form_group">
                    <input type="submit" value="立即注册" class="sub_sty ">
                </div>
                <div class="rg_footer form_group">
                    <input type="checkbox" checked="checked">
                    <span> 我已阅读并且同意《蘑菇街网络服务使用协议》</span>
                </div>
                <div class="rg_login form_group" >
                    <a href="<?php echo U('user/login');?>">< 已有账号登录</a>
                </div>
            </div>

        </div>
        </form>
    </div>
</div>
</body>

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
<script src="/mogu/Public/home/js/user.js"></script>