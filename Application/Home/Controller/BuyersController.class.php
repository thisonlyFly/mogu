<?php
namespace Home\Controller;
use Think\Controller;

class BuyersController extends Controller {
    // 用户中心首页
    public function index(){
        $uinfo=session('auth');
        if (!$uinfo['uid']) {
            $this->redirect('Buyers/login');
        }
        $this->assign('title','用户中心');
        
        $this->display();
    
    } 

    // 登录
    public function login()
    {
        $uinfo=session('auth');
        if ($uinfo['uid']) {
            $this->redirect('Buyers/index');
        }
        $this->assign('title','欢迎登录');
        $this->display();
    }
   /**
    * 订单列表
    * @return [type] [description]
    */
   public function order()
   {
     $uinfo=session('auth');
        if (!$uinfo['uid']) {
            $this->redirect('Buyers/login');
        }

        $page_num=10;//每页显示的数量
        $count = M('Order')->count();// 查询商品列表总数量
        $Page = new \Think\Page($count,$page_num);// 实例化分页类 传入总记录数
        $show = $Page->show();// 生成分页盒子的结构 例如:1 2 3 4 ...

        $cate_list=M('Order')->limit($Page->firstRow.','.$Page->listRows)->where('user_id='.$uinfo['uid'])->order('order_id desc')->select();

        $this->assign('page',$show);// 赋值分页输出
        $this->assign('goods_list',$cate_list);

        $this->assign('title','订单管理');
       $this->display();
   }

   /**
    * 订单详情
    * @return [type] [description]
    */
    public function detailed()
    {
        $uinfo=session('auth');
        if (!$uinfo['uid']) {
            $this->redirect('Buyers/login');
        }

        // 订单信息表和订单商品表
        // as
       $id=I('id');

       // 订单信息
         $order_info=M('order')
            ->where('order_id='.$id)
            ->find();
        $this->assign('order_info',$order_info);


        //订单的商品信息
        //多表查询使用join
       $goods_list= M('order')->alias('o')
            ->field('og.goods_id,og.goods_name,og.goods_price,og.goods_thumb,og.goods_number')
            ->join('mg_order_goods og on og.order_id=o.order_id')
            ->where('o.order_id='.$id)
            ->select();
        
        $this->assign('goods_list',$goods_list);

        // 查询物流信息
        $shipping_info=M('OrderShipping')
            ->where('order_id='.$id)
            ->find();
        $this->assign('shipping_info',$shipping_info);

        $this->display();

          
    }

    //设置订单的状态
    public function setOrderStatus()
    {
        
        $uinfo=session('auth');
        if (!$uinfo['uid']) {
            $this->redirect('Buyers/login'); //redirect:重定向  header()
        }
         // 确认收货
         M('order')->where('order_id='.$_POST['order_id'])->setField('order_status',$_POST['order_status']);//把订单修改为发货中
        if ($_POST['order_status']==3) {
            $msg='谢谢你的信任！';
        }elseif ($_POST['order_status']==2) {
            $msg='记得给卖家一个好评，要不然没好事！';
        }
        $this->success($msg,U('Buyers/order'));

    }
    /**
     * 退出
     */
    public function logout() {
        session('buyerName',null);
            session('[destroy]');
        $this->success('退出成功！', U('Buyers/login'));
    }

    /**
     * ajax登录
     */
    public function ajax_login()
    {
 
        // $this->ajaxReturn(array('stauts'=>1,'message'=>'验证码正确！'));
        $user_m=M('Buyers');
        $user_info=$user_m->where('user_name="'.I('user_name').'" and user_pwd="'.I('user_pwd').'"')->find();

        if ($user_info['uid']<=0) {

            // ajaxReturn 返回JSON信息
            $this->ajaxReturn(array('status'=>-1,'message'=>'用户名或密码错误！'));
        }else{
            

               
                session('buyerName', $user_info['user_name']);
                
                $login['uid'] = $user_info['uid'];
                $login['user'] = 'admin';
                session('auth', $login);//给auth赋值
                $this->ajaxReturn(array('status'=>1,'message'=>'登录成功！'));
            

        }

    }
    /**
     * 生成验证码
     * @return [type] [description]
     */
    public function verify()
    {
        // 不需要引入
        // 第一步：把验证码类new出来
        $Verify = new \Think\Verify();

        // 第二步：配置对应的参数
        $Verify->useCurve=false;//有没有干扰线
        $Verify->useNoise=true;//杂点

        // 第三步：绘制出验证码
         $Verify->entry();
    }   
}