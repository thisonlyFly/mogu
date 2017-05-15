<?php


 /**
     * 生成树型菜单
     * @param  array $cat_list 所有分类列表信息
     * @return array           二维数组 array('cat_id'=>1,'parent_id'=>0,'sub_menu'=>array('cat_id'=>1,'parent_id'=>1))
     */
    // function tree_menu($cat_list='')
    // {
    //     $menu_a=array();
    //     foreach ($cat_list as $key => $value) {
    //         if ($value['parent_id']) {//二级菜单
    //             $menu_a[$value['parent_id']]['sub_menu'][]=$value;
    //         }else{
    //             $menu_a[$value['cat_id']]=$value;
    //         }
    //     }
    //     return $menu_a;
    // }

    /**
     * 获取商品分类列表
     * @return [type] [description]
     */
    function getCateList()
    {
        $menu_cache_Data=S('menu_Data'); //缓存机制
       
        if(!$menu_cache_Data){  //如果没有商品分类的缓存

        	$first_menus=M('Category')->order('cat_id asc')->select();//查询一级菜单

         	$menu_cache_Data=tree_menu($first_menus);

            S('menu_Data',$menu_cache_Data,3600);//缓存3600秒
            // echo '从数据库拿数据';
        }

        return $menu_cache_Data;

    }

    /**
     * 获取用户的购物车数量
     * @return int [description]
     */
    function getCartCount()
    {
        $cart_num=0;
        $uinfo=session('auth');
        // if ($uinfo['uid']) {
        //     // 把当前用户的购物车全部列出来
        //     $cart_num=M('carts')->where("user_id=".$uinfo['uid'])->count();

        // }

        return $cart_num;


    }

    /**
     * 获取订单的状态
     * @param  int $status 0,1,23
     * @return string         [订单状态]
     */
    function getOrderStatus($status)
    {
        if ($status==1) {
            return '运输中';
        }else if ($status==2) {
            return '待评论';
        }else if ($status==3) {
            return '已完成,售后';
        }else{
            return '出库中';
        }
    }

?>