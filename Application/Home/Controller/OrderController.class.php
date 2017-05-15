<?php
namespace Home\Controller;  
use Think\Controller;   

class OrderController extends Controller {
    //设置订单的状态
    public function setOrderStatus()
    {
        $uinfo=session('auth');
        if (!$uinfo['uid']) {
            $this->redirect('User/login'); //redirect:重定向  header()
        }
         // 确认收货
        M('order')->where('order_id='.$_POST['order_id'])->setField('order_status',$_POST['order_status']);//把订单修改为发货中
        if ($_POST['order_status']==3) {
            $msg='谢谢您的信任！';
        }elseif ($_POST['order_status']==2) {
            $msg='收货后记得要评价噢！';
        }
        $this->success($msg,U('Order/orderList'));

    }
    public function orderList()
   	{
     	$uinfo=session('auth');
        if (!$uinfo['uid']) {
            $this->redirect('User/login');
        }

        $page_num=10;//每页显示的数量
        $count = M('Order')->count();// 查询商品列表总数量
        $Page = new \Think\Page($count,$page_num);// 实例化分页类 传入总记录数
        $show = $Page->show();// 生成分页盒子的结构 例如:1 2 3 4 ...

        // $cate_list=M('Order')->limit($Page->firstRow.','.$Page->listRows)->where('user_id='.$uinfo['uid'])->order('order_id desc')->select();
        $tmp_order_list=M('Order')->limit($Page->firstRow.','.$Page->listRows)->where('user_id='.$uinfo['uid'])->order('order_id desc')->select();
        $tmp_ar;
        $order_list;
        foreach($tmp_order_list as $value ){
            $tmp_ar[]=$value['order_id'];
            $order_list[$value['order_id']]=$value;
        }
        // print_r($count);exit();
        $o_ids=implode(",", $tmp_ar);
        $goods_list=M('Ordergoods')->where('order_id in('.$o_ids.')')->select();
         foreach($goods_list as $value ){
           
            $order_list[$value['order_id']]['goods_list'][]=$value;
        }
        //print_r($order_list);exit();

        // $order_list=array(
        //         551=>array(
        //                 'order_id'=>551
        //                 'goods_list'=>array()
        //             )，
        //          652=>array(
        //                 'order_id'=>652
        //                 'goods_list'=>array()
        //             )
        //     )
        $this->assign('page',$show);// 赋值分页输出
        $this->assign('order_list',$order_list);
        // $this->assign('goods_list',$goods_list);
        // $this->assign('title','订单管理');
       	$this->display();
   }
    public function submit()
    {
        $uinfo=session('auth');//获取用户信息
        if (getCartCount()>0) {//获取有没有购买商品
           $order_name=I('name');
           $order_tel=I('phone');
           $order_address=I('address');
           $order_zipcode=I('zipcode');
           $total=I('goods_total');
           $_POST['user_id']=$uinfo['uid'];

           $order_num=date('YmdHis',time()).rand(1000,9999);//订单编号：年月日时分秒8888
           
           //电商项目当中，怎么防止订单编号重复 （同一秒有几万用户同时下订单）

                    // 订单提交了
                    // 添加 order_goods 订单商品表
                    
                    // 
            $cart_list=M('Shoppingcart')->where('cart_id in('.I('cart_ids').')')->select(); //查询指定要购买的商品
            
            
            M('Order')->add(
                            array(
                                'user_id'=>$uinfo['uid'],
                                'order_num'=>$order_num,
                                'create_time'=>time(),
                                'order_name'=>$order_name,
                                'order_tel'=>$order_tel,
                                'order_address'=>$order_address,
                                'order_zipcode'=>$order_zipcode,
                                'goods_total'=>$total,
                                'order_total'=>$total)
                            );//批量添加商品
             
            // 怎么获取这一个order_id
            $order_id=M('Order')->getLastInsID();//获取最后一次添加后返回的ID
        
           foreach ($cart_list as $key => $value) {
                        $cart_list[$key]['order_id']=$order_id;
                    }
            M('Ordergoods')->addAll($cart_list);//批量添加商品
            // // 清空当前购买的购物车商品
            M('Shoppingcart')->where('cart_id in('.I('cart_ids').')')->delete();  

            $this->success('购买成功，请耐心等待商品的到来！',U('Order/orderList'));
        }else{
            $this->error('请先选择中意的商品！');
        }
    }
}