<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0,
          maximum-scale=1.0, minimum-scale=1.0">
    <title>redman</title>
    <link rel="stylesheet" href="/mogu/Public/common/bootstrap-3.3.7/css/bootstrap.css">
    <link rel="stylesheet" href="/mogu/Public/common/Font-Awesome-master/css/font-awesome.min.css">
    <link rel="stylesheet" href="/mogu/Public/home/css/redman.css?1">
</head>
    <script type="text/javascript">
        var pub_path="/mogu/Public/";//这一个是ajax提交的修改地址
        var Redman_ajax_url="<?php echo U('Redman/ajax_get');?>";
        //alert(Redman_ajax_url);//    /mogu/index.php/home/Redman/ajax_get.html
        //这一个是ajax提交的修改地址
    </script>
<body>
<div id="body_wrap">
    <!--最上面的图片-->
    <div class="banner-wrap" style="background-color:#ffcbae;">
        <a class="banner" href="javascript:;" target="_self" style="cursor: default;">
            <img src="/mogu/Public/home/images/meinv.jpg"> </a></div>
    <!--中间的导航以及标题-->
    <div class="nav_warp">
        <p class="nav-title"><a href="http://www.mogujie.com">首页</a> &gt; 红人穿搭</p>

        <!--红人搭配布局-->
        <div class="bx-wrapper" >
            <div class="bx-viewport">
                <ul class="nav-list clearfix  nav nav-tabs" id="myTab" role="tablist">
                    <?php if(is_array($redman_parent)): $i = 0; $__LIST__ = $redman_parent;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$value): $mod = ($i % 2 );++$i;?><li class=" nav-item mr10 "><a href="#<?php echo ($value['redman_id']); ?>" role="tab" data-toggle="tab" ><?php echo ($value['redman_name']); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
                        <!-- 
                    <li class=" nav-item mr10 "><a href="#2" role="tab" data-toggle="tab">小个子专属</a></li>
                    <li class=" nav-item mr10 "><a href="#3" role="tab" data-toggle="tab" >T恤x半身裙</a></li>
                    <li class=" nav-item mr10 "><a href="#4" role="tab" data-toggle="tab" >高颜值衬衫</a></li>
                    <li class=" nav-item mr10 "><a href="#5" role="tab" data-toggle="tab" >学生党专属</a></li>
                    <li class=" nav-item mr10 "><a href="#6" role="tab" data-toggle="tab" >微胖巧搭</a></li>
                    <li class=" nav-item mr10 "><a href="#7" role="tab" data-toggle="tab" >一分钟出门装</a></li>
                    <li class=" nav-item mr10 "><a href="#8" role="tab" data-toggle="tab" >半身裙套装</a></li>
                    <li class=" nav-item mr10 "><a href="#9" role="tab" data-toggle="tab" >气质抢镜装</a></li>
                    <li class=" nav-item mr10 "><a href="#10" role="tab" data-toggle="tab">春夏薄外套</a></li>
                    <li class=" nav-item mr10 "><a href="#11" role="tab" data-toggle="tab">春日甜美装</a></li>
                    <li class=" nav-item mr10 "><a href="#12" role="tab" data-toggle="tab">周末约会装</a></li>
                    <li class=" nav-item mr10 "><a href="#13" role="tab" data-toggle="tab">长腿穿搭法</a></li>
                    <li class=" nav-item mr10 "><a href="#14" role="tab" data-toggle="tab">裙子套装</a></li>
                    <li class=" nav-item mr10 "><a href="#15" role="tab" data-toggle="tab">T恤怎么穿</a></li>
                    <li class=" nav-item mr10 "><a href="#16" role="tab" data-toggle="tab">省心套装</a></li>
                    <li class=" nav-item mr10 "><a href="#17" role="tab" data-toggle="tab">气质加分装</a></li>
                    <li class=" nav-item mr10 "><a href="#18" role="tab" data-toggle="tab">棒球外套</a></li>
                    <li class=" nav-item mr10 "><a href="#19" role="tab" data-toggle="tab">超火吊带裙</a></li>
                    <li class=" nav-item mr10 "><a href="#20" role="tab" data-toggle="tab">遮肉外套</a></li>
                    <li class=" nav-item mr10 "><a href="#21" role="tab" data-toggle="tab">显瘦春裤</a></li>
                    <li class=" nav-item mr10 "><a href="#22" role="tab" data-toggle="tab">出街短外套</a></li> -->
                </ul>
            </div>
            <div class="bx-controls bx-has-controls-direction">
                <div class="bx-controls-direction">
                    <a class="bx-prev disabled" href="javascript:;">
                        <img src="/mogu/Public/home/images/left.png" class="arrow">
                    </a>
                    <a class="bx-next" href="javascript:;">
                        <img src="/mogu/Public/home/images/right.png" class="arrow">
                    </a>
                </div>
            </div>
        </div>
        </div>
    <!--下面图片-->
    <div class="pool-wrap tab-content" id="myTabContent">
        <?php if(is_array($redman_parent)): $i = 0; $__LIST__ = $redman_parent;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><div class="tab-pane  w-wall-segment clearfix" id="<?php echo ($val['redman_id']); ?>">  
            </div><?php endforeach; endif; else: echo "" ;endif; ?>
    </div>
</div>
<script src="/mogu/Public/common/bootstrap-3.3.7/js/jquery-1.11.1.min.js"></script>
<script src="/mogu/Public/common/bootstrap-3.3.7/js/bootstrap.min.js"></script>
<script src="/mogu/Public/home/js/Redman.js?1"></script>
</body>
</html>