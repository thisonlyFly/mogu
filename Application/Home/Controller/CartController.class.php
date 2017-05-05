<?php
namespace Home\Controller;  
use Think\Controller;   

class CartController extends Controller {
    public function index(){
 
 		$uinfo=session('auth');
        if ($uinfo['uid']) {
            // 把当前用户的购物车全部列出来
            $cart_list=M('carts')->where("user_id=".$uinfo['uid'])->select();

            $this->assign('cart_list',$cart_list);
        }
    
 		$this->display();
       
    }
 	
 	public function detailed()
 	{
 	 

 		$this->display();
 	}


 	public function addCart()
 	{
 		$num=I('cart_num');
 		$goods_id=I('goods_id');

 		if($goods_id<0){
            $this->ajaxReturn(array('status'=>0,'message'=>'加入购物车失败！'));
 		}
		if($num<=0){
            $this->ajaxReturn(array('status'=>0,'message'=>'逗我吧！数量不能为空！'));
 		}
 		$goods_info=M('Goods')->field('goods_name,goods_price,goods_thumb')->where("id=$goods_id")->find();
 		if(empty($goods_info['goods_name'])){
            $this->ajaxReturn(array('status'=>0,'message'=>'该商品库存不足！'));
 		}

 		$uinfo=session('auth');

 		// 判断当前用户到底有没有加入过这一个商品
 		$has_cart_info=M('carts')->where("user_id=".$uinfo['uid']." and goods_id=$goods_id")->find();

 		if (empty($has_cart_info)) {
 			 M('carts')->add(
 			 	array(
 			 		'user_id'=>$uinfo['uid'],
 			 		'goods_id'=>$goods_id,
 			 		'goods_name'=>$goods_info['goods_name'],
 			 		'goods_thumb'=>$goods_info['goods_thumb'],
 			 		'goods_price'=>$goods_info['goods_price'],
 			 		'goods_number'=>$num)
 			 	);
 		}else{
 			M('carts')->where('id='.$has_cart_info['id'])->setInc('goods_number',$num);//是给购物车的数量加上用户新加入的数量
 		}
 		

            $this->ajaxReturn(array('status'=>1,'message'=>'加入购物车成功！请继续买吧！'));



 	}
}