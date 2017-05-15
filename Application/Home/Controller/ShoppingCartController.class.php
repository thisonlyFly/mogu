<?php

namespace Home\Controller;

use Think\Controller;
class ShoppingCartController extends Controller
{
    public function index(){
        $uinfo=session('auth');
        if ($uinfo['uid']) {
            // 把当前用户的购物车全部列出来
            $cart_list=M('shoppingcart')->where("user_id=".$uinfo['uid'])->select();
        }

        // $cart_list=M('shoppingcart')->select();
        $this->assign('cart_list',$cart_list);
 		$this->display();
    }
 	public function addCart()
 	{
 		$num=I('cart_num');
 		$goods_id=I('goods_id');
        $col=I('cart_col');
        $size=I('cart_size');
 		if($goods_id<0){
            $this->ajaxReturn(array('status'=>0,'message'=>'加入购物车失败！'));
 		}
		if($num<=0){
            $this->ajaxReturn(array('status'=>0,'message'=>'数量不能为空！'));
 		}
 		$goods_info=M('Goods')->field('goods_title,goods_oldprice,goods_price,goods_img1')->where("goods_id=$goods_id")->find();
 		if(empty($goods_info['goods_title'])){
            $this->ajaxReturn(array('status'=>0,'message'=>'该商品库存不足！'));
 		}

 		$uinfo=session('auth');

 		// 判断当前用户到底有没有加入过这一个商品
 		$has_cart_info=M('shoppingcart')->where("user_id=".$uinfo['uid']." and goods_id=$goods_id" and "goods_color=$col" and "goods_size=$size")->find();
        // $has_cart_info=M('carts')->where("user_id=".$uinfo['uid']." and goods_id=$goods_id")->find();

 		if (empty($has_cart_info)) {
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
         else{
 			M('shoppingcart')->where('goods_id='.$has_cart_info['id'])->setInc('goods_number',$num);//是给购物车的数量加上用户新加入的数量
 		}
        $this->ajaxReturn(array('status'=>1,'message'=>'加入购物车成功！请继续挑选心仪的商品'));
 	}
}