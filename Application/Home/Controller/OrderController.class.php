<?php
namespace Home\Controller;  
use Think\Controller;   

class OrderController extends Controller {
    public function order(){
        
        if(count($_POST['cart_ids'])){
            $cart_ids=implode(",", $_POST['cart_ids']);//把购物车的数组转换为字符串 21,22
            $cart_list=M('Carts')->where('id in('.$cart_ids.')')->select(); //查询指定要购买的商品
                
            //单元测试
            //  print_r($cart_list);
            
            // M('OrderGoods')->addAll($cart_list);
            // exit();

            $this->assign('cart_ids',$cart_ids);
            $this->assign('cart_list',$cart_list);
            $this->display();

        }else{
            $this->error('请先选择中意的商品！');
        }
 	 
       
    }

    /**
     * 处理用户提交订单的信息
     */
    public function submit()
    {
        $uinfo=session('auth');//获取用户信息
        if (getCartCount()>0) {//获取有没有购买商品
           
           $_POST['user_id']=$uinfo['uid'];

           $_POST['order_sn']=date('YmdHis',time()).rand(1000,9999);//订单编号：年月日时分秒8888
           
           //电商项目当中，怎么防止订单编号重复 （同一秒有几万用户同时下订单）

           $order_m=D('Order');

           if ($order_m->create()) {
                if($order_m->add()){

                    // 订单提交了
                    // 添加 order_goods 订单商品表
                    
                    // 
                      $cart_list=M('Carts')->where('id in('.I('cart_ids').')')->select(); //查询指定要购买的商品
                    
                    // 怎么获取这一个order_id
                    $order_id=$order_m->getLastInsID();//获取最后一次添加后返回的ID
                    foreach ($cart_list as $key => $value) {
                        $cart_list[$key]['order_id']=$order_id;
                    }
                    M('OrderGoods')->addAll($cart_list);//批量添加商品
                     
                    // 清空当前购买的购物车商品
                    M('Carts')->where('id in('.I('cart_ids').')')->delete();  

                    $this->success('购买成功，请耐心等待商品的到来！',U('Index/index'));
                }else{
                    $this->error('购买失败！');
                }
           }else{
                
                 $this->error($order_m->getError());
           }
        }else{
            $this->error('请先选择中意的商品！');
        }
    }
 	
 	public function detailed()
 	{
 	 

 		$this->display();
 	}


  
}