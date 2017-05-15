<?php

namespace Home\Controller;
use Think\Controller;

class ConfirmOrderController extends Controller
{
    public function index(){
        // if(count($_POST['cart_ids'])){
            $cart_ids=implode(",", I('cart_ids'));
            $cart_list=M('shoppingcart')->where('cart_id in('.$cart_ids.')')->select();
            // $cart_list=M('shoppingcart')->select();
            $this->assign('cart_ids',$cart_ids);
            $this->assign('cart_list',$cart_list);
            $this->display();
        // } 	
    }
    public function buy()
    {
    	$num=I('cart_num');
 		$goods_id=I('goods_id');
        $col=I('cart_col');
        $size=I('cart_size');
        $cart_ids=I('cart_ids');
        print_r($cart_ids);exit();
 		if($goods_id<0){
            $this->ajaxReturn(array('status'=>0,'message'=>'购买失败！'));
 		}
		if($num<=0){
            $this->ajaxReturn(array('status'=>0,'message'=>'数量不能为空！'));
 		}
 		$goods_info=M('Goods')->field('goods_title,goods_oldprice,goods_price,goods_img1')->where("goods_id=$goods_id")->find();
 		if(empty($goods_info['goods_title'])){
            $this->ajaxReturn(array('status'=>0,'message'=>'该商品库存不足！'));
 		}
 		M('shoppingcart')->add(
		 	array(
		 		'user_id'=>$uinfo['uid'],
		 		'goods_id'=>$goods_id,
		 		'goods_title'=>$goods_info['goods_title'],
		 		'goods_img'=>$goods_info['goods_img1'],
	        	'goods_oldprice'=>$goods_info['goods_oldprice'],
		 		'goods_price'=>$goods_info['goods_price'],
		 		'goods_number'=>$num,
	        	'goods_color'=>$col,
	        	'goods_size'=>$size)
	 	);
    }
    public function now_buy()
    {
        $num=I('cart_num');
        $goods_id=I('goods_id');
        $col=I('cart_col');
        $size=I('cart_size');
        $cart_ids=I('goods_id');
        if($goods_id<0){
            $this->ajaxReturn(array('status'=>0,'message'=>'购买失败！'));
        }
        if($num<=0){
            $this->ajaxReturn(array('status'=>0,'message'=>'数量不能为空！'));
        }
        $goods_info=M('Goods')->field('goods_title,goods_oldprice,goods_price,goods_img1')->where("goods_id=$goods_id")->find();
        if(empty($goods_info['goods_title'])){
            $this->ajaxReturn(array('status'=>0,'message'=>'该商品库存不足！'));
        }
        M('shoppingcart')->add(
            array(
                'user_id'=>$uinfo['uid'],
                'goods_id'=>$goods_id,
                'goods_title'=>$goods_info['goods_title'],
                'goods_img'=>$goods_info['goods_img1'],
                'goods_oldprice'=>$goods_info['goods_oldprice'],
                'goods_price'=>$goods_info['goods_price'],
                'goods_number'=>$num,
                'goods_color'=>$col,
                'goods_size'=>$size)
        );
    }
}