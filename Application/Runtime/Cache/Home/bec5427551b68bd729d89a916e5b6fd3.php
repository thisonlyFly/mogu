<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Confirm_Order</title>
    <link href="/mogu/Public./common/bootstrap-3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="/mogu/Public./common/Font-Awesome-master/css/font-awesome.min.css" rel="stylesheet">

    <link rel="stylesheet" href="/mogu/Public/home/css/Shopping_Cart.css">
    <link rel="stylesheet" href="/mogu/Public/home/css/header.css">
    <link rel="stylesheet" href="/mogu/Public/home/css/Confirm_Order.css">


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
                <a href="http://localhost/mogu/Home/ShoppingCart/Shopping_Cart.html" target="_blank"><span>购物车</span></a>

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
                        <li class="sp_cart_li">
                            <a href="javascript:;" target="_blank" class="imgbox">
                                <img src="/mogu/Public/home/images/header_sp2.jpg">
                            </a>
                            <a href="javascript:;" target="_blank" class="sp_title">新款春夏季韩版t恤女学生宽松套头字母上衣连帽白色短袖外穿薄潮</a>
                            <span class="sp_info">颜色: 白色  尺码: M  </span>
                            <span class="sp_price">¥29.9</span>
                            <span class="sp_del">删除</span>
                        </li>
                        <li class="sp_cart_li">
                            <a href="javascript:;" target="_blank" class="imgbox">
                                <img src="/mogu/Public/home/images/header_sp3.jpg">
                            </a>
                            <a href="javascript:;" target="_blank" class="sp_title">半高领弹力修身打底针织衫</a>
                            <span class="sp_info">颜色: 黑色  尺码: 均码  </span>
                            <span class="sp_price">¥32.6</span>
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


<!----------------身体部分------------------>

<div id="s_c" class="Confirm-Order">
    <!--身体部分的头部-->
    <div class="s_c_header">
    <div class="s_c_wrap">
        <a href="http://localhost/mogu/Home/page/index.html"><div class="s_c_logo"></div></a>
        <div class="s_c_process">
            <div class="s_c_process_step">
                <div class="s_c_process_lc2 w247"></div>
                <i class="s_c_process_i i1">1<span class="s_c_process_tip1">购物车</span></i>
                <i class="s_c_process_i i2">2<span class="s_c_process_tip">确认订单</span></i>
                <i class="s_c_process_i i3">3<span class="s_c_process_tip">完成</span></i>
            </div>
        </div>
    </div>
</div>

    <!--正文部分-->
    <div class="pay_info">
        <div class="pay_info-warp">
            <div class="cart_wrap">
                <!-- 页面内容 -->
                <div class="cart_page_wrap pt0">
                    <h2 class="cart_stit">填写收货地址</h2>
                    <div class="receiving-address">
                        <dl class="address_pop">
                            <dt>省：</dt>
                            <dd class="pt_ie6hack">
                                <i class="needicon">*</i>
                                <input type="text" value="">
                                <label class="dt">市：</label>
                                <input type="text" value="">
                                <label class="dt">省（区）：</label>
                                <input type="text" value="">
                            </dd>

                            <dt>邮政编码：</dt>
                            <dd>
                                <i class="needicon">*</i>
                                <input type="text" value="">
                            </dd>

                            <dt>街道地址：</dt>
                            <dd>
                                <i class="needicon">*</i>
                                <textarea data-min="5" data-max="100" class="textarea" name="address" cols="30" rows="3"></textarea>
                                <span class="prompt">请填写街道地址，最少5个字，最多不能超过100个字</span>
                            </dd>

                            <dt>收货人姓名：</dt>
                            <dd>
                                <i class="needicon">*</i>
                                <input type="text" value="">
                            </dd>

                            <dt>手机：</dt>
                            <dd>
                                <i class="needicon">*</i>
                                <input type="text" value="">
                            </dd>
                        </dl>
                    </div>
                    <h2 class="cart_stit pt10">确认商品信息</h2>
                    <form>
                        <!-- 表格 -->
                        <table class="cart_table">
                            <thead>
                                <tr>
                                    <th class="cart_table_goods_wrap cart_alcenter">商品</th>
                                    <th class="cart_table_goodsinfo_wrap cart_alcenter">商品信息</th>
                                    <th style="width:80px; text-align: center" >单价(元)</th>
                                    <th style="width:80px; text-align: center" >数量</th>
                                    <th class="cart_table_goodscut_wrap">优惠</th>
                                    <th class="cart_table_goodsctrl_wrap cart_alcenter">小计(元)</th>
                                </tr>
                            </thead>
                            <!--商品遍历-->
                            <tbody>
                                <tr class="tr_checked">
                                    <td class="cart_table_goods_wrap">
                                        <a class="cart_goods_img"><img src="/mogu/Public/home/images/s_c_100x100.jpg"></a>
                                        <a class="cart_goods_t">新品衬衫女长袖BF性感宽松白衬衫居家服</a>
                                    </td>
                                    <td class="cart_alcenter">
                                        <p class="cart_lh20">颜色：白色</p>
                                        <p class="cart_lh20">尺码：M</p>
                                    </td>
                                    <td class="cart_alcenter"><!-- 单价 -->
                                        <p class="cart_bold">70.00</p>
                                    </td>
                                    <td class="cart_alcenter"><p class="cart_itemNum">1</p></td>
                                    <td class="cart_alcenter">
                                        <span class="cart_alcenter">7折:</span>
                                        <span class="s_disScreen">省21.00元</span>
                                    </td>
                                    <td class="cart_alcenter"><p class="cart_font16" data-price="49.00">49.00</p></td>
                                </tr>
                                <tr class="tr_checked">
                                    <td class="cart_table_goods_wrap">
                                        <a class="cart_goods_img"><img src="/mogu/Public/home/images/s_c_100x100.jpg"></a>
                                        <a class="cart_goods_t">新品衬衫女长袖BF性感宽松白衬衫居家服</a>
                                    </td>
                                    <td class="cart_alcenter">
                                        <p class="cart_lh20">颜色：白色</p>
                                        <p class="cart_lh20">尺码：M</p>
                                    </td>
                                    <td class="cart_alcenter"><!-- 单价 -->
                                        <p class="cart_bold">70.00</p>
                                    </td>
                                    <td class="cart_alcenter"><p class="cart_itemNum">1</p></td>
                                    <td class="cart_alcenter">
                                        <span class="cart_alcenter">7折:</span>
                                        <span class="s_disScreen">省21.00元</span>
                                    </td>
                                    <td class="cart_alcenter"><p class="cart_font16" data-price="49.00">49.00</p></td>
                                </tr>

                                <tr class="tr_checked">
                                    <td class="pl10 cart_largepding" colspan="3">
                                        <label>备注：</label>
                                        <input type="text" class="beizhu-cart_text" placeholder="补充填写其他信息，如有快递不到也请留言备注">
                                    </td>
                                    <td colspan="3" class="pr15 cart_largepding">
                                        <div class="cart_table_discount pt5 pr10 ">
                                            <label>快递公司：</label>
                                            <select class="postage-cart_vm">
                                                <option>全国包邮</option>
                                            </select>
                                            <span class="ml20 fr">快递运费：
                                                <b>¥ 0.00</b>
                                            </span>
                                        </div>
                                    </td>
                                </tr>
                                <!--合计-->
                                <tr class="tr_checked">
                                    <td class="pl10 pr20 cart_largepding" colspan="6" >
                                        <div class="cart_table_disduce fr">
                                            合计：
                                            <span class="cart_red">49.00</span>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="modou-info">
                                    <td class="pr20" colspan="6" style="border: none;">
                                        <div class="modou-wrapper fr">
                                            <div class="modou-box fl">
                                                <input type="checkbox" class="modou-checkbox">
                                                <label>蘑豆抵现<span class="modou-left">（可用2粒）</span></label>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </form>
                </div>
            </div>

            <!-- footer显示价格 -->
            <div>
                <div class="cart_paybar">
                    <a href="http://localhost/mogu/Home/ShoppingCart/Shopping_Cart.html" target="_blank" class="cart_back">
                        <i class="fa fa-hand-o-left" aria-hidden="true"></i>
                        返回购物车
                    </a>
                    <a href="javascript:;" class="cart_surebtn fr">确认并付款 &gt;</a>
                    <span class="cart_paybar_info_cost cart_red fr">¥49.00</span>
                    <div class="cart_paybar_info fr">
                        共有
                        <span class="cart_red goodsNum">1</span>
                        件商品，总计：
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-------------------底部------------------------->
<div class="g-footer">
    <p>
        <a>蘑菇头</a>  |
        <a>加入开放平台</a>
        © 2016 Mogujie.com,All Rights Reserved.
    </p>
</div>

</body>
</html>