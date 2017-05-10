<?php

namespace Home\Controller;
use Think\Controller;

class DetailsController extends Controller
{
    public function index(){
        $goods=M('Goods');
 		$goods_id=13;
 		$goods_info=$goods->where("goods_id=$goods_id")->find();
 		$this->assign('goods_info',$goods_info);
 		$this->display();
    }
    public function ajax_get()
    {
    	$goods_id=13;
        $goods=M('Goods');
    	$details_list=$goods->where("goods_id=$goods_id")->find();
    	$this->ajaxReturn(array('stauts'=>1,'data'=>$details_list));
    }
}