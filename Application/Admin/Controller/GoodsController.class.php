<?php
namespace Admin\Controller;
use Think\Controller;
use Think\Upload;
class GoodsController extends Controller
{
    public function index()
    {
        $num=8;
        $allNum=M("goods")->count();
        $page= new \Think\Page($allNum,$num);
        $show=$page->show();
        $goods_list = M("goods")->limit($page->firstRow.",".$page->listRows)->order("goods_id asc")->select();
        //print_r($goods_list);
        $this->assign("page",$show);
        $this->assign("goods_list", $goods_list);
        $this->display();
    }
    public function add(){
        if(IS_POST){
            $files_array=pic("goods_img");

            if(!empty($files_array["goods_img1"]["savename"])){
                $add_goods["goods_img1"]="upload/".$files_array["goods_img1"]["savename"];
            }
            if(!empty($files_array["goods_img2"]["savename"])){
                $add_goods["goods_img2"]="upload/".$files_array["goods_img2"]["savename"];
            }
            if(!empty($files_array["goods_img3"]["savename"])){
                $add_goods["goods_img3"]="upload/".$files_array["goods_img3"]["savename"];
            }
            $add_goods["goods_name"]=I("goods_name");
            $add_goods["goods_title"]=I("goods_title");
            $add_goods["goods_price"]=I("goods_price");
            $add_goods["goods_oldprice"]=I("goods_oldprice");
            $add_goods["goods_salenum"]=I("goods_salenum");
            $add_goods["goods_maxnum"]=I("goods_maxnum");
            $add_goods["goods_hot"]=I("goods_hot");
            $add_goods["goods_color"]=I("goods_color");
            $add_goods["goods_size"]=I("goods_size");
            $add_goods["goods_parent_id"]=I("goods_parent_id");
            if (I("goods_order")){
                $add_goods["goods_order"]=I("goods_order");
            }

            $theme_model=M("goods");
            if($theme_model->create()){
                //数据库列名跟传过来的键名相同不用赋值
                $theme_model->add($add_goods);
                $this->success("添加成功",U('Goods/add'));
            }else{
                $this->error($theme_model->getError());
            }

        }else{
            $first_list=M("sy_thememarket")->where("themeM_parent_id=0")->order("themem_id asc")->getField("themem_id,themem_name",true);
            $last_list=array();
            foreach ($first_list as $key => $value) {
                $list=M("sy_thememarket")->where("themeM_parent_id=$key")->getField("themem_id,themem_name",true);
                $last_list[$value]=$list;
            }
            //print_r($last_list);exit();
            $this->assign("goods_list",$last_list);
            $this->display();
        }
    }
    public function update(){
        if(IS_GET){
            $getId=$_GET["goods_id"];
            $goods_list=M("goods")->where("goods_id=$getId")->select();
            $goods_parents=M("sy_thememarket")->where("themem_id=".$goods_list[0]['goods_parent_id'])->find();
            $goods_parent=M("sy_thememarket")->where("themem_id=".$goods_parents['themem_parent_id'])->find();
            $goods=M("sy_thememarket")->where("themem_parent_id=".$goods_parent['themem_id'])->getField("themem_id,themem_name",true);
            $first_list=M("sy_thememarket")->where("themeM_parent_id=0")->order("themem_id asc")->getField("themem_id,themem_name",true);
            $last_list=array();
            foreach ($first_list as $key => $value) {
                $list=M("sy_thememarket")->where("themeM_parent_id=$key")->getField("themem_id,themem_name",true);
                $last_list[$value]=$list;
            }
            $this->assign("parent_list",$last_list);
            $this->assign("goods_parent",$goods_parent);
            $this->assign("goods",$goods);
            $this->assign("goods_list",$goods_list);
            $this->display();
        }else if(IS_POST){
            $getId=I("goods_id");

            $title_model=M("goods");
            if($_FILES['goods_img1']['error']!=4){
                $files_array=pic();
                $add_goods["goods_img1"]="upload/".$files_array["goods_img1"]["savename"];
                $img1=$title_model->where("goods_id=$getId")->field("goods_img1")->find();
                unlink("./Public/".$img1['goods_img1']);
            }else{
                $img1=$title_model->where("goods_id=$getId")->field("goods_img1")->find();
                $add_goods["goods_img1"]=$img1["goods_img1"];
            }
            if($_FILES['goods_img2']['error']!=4){
                $files_array=pic();
                $add_goods["goods_img2"]="upload/".$files_array["goods_img2"]["savename"];
                $img2=$title_model->where("goods_id=$getId")->field("goods_img2")->find();
                unlink("./Public/".$img2['goods_img2']);
            }else{
                $img1=$title_model->where("goods_id=$getId")->field("goods_img2")->find();
                $add_goods["goods_img2"]=$img1["goods_img2"];
            }
            if($_FILES['goods_img3']['error']!=4){
                $files_array=pic();
                $add_goods["goods_img3"]="upload/".$files_array["goods_img3"]["savename"];
                $img3=$title_model->where("goods_id=$getId")->field("goods_img3")->find();
                unlink("./Public/".$img3['goods_img3']);
            }else{
                $img1=$title_model->where("goods_id=$getId")->field("goods_img3")->find();
                $add_goods["goods_img3"]=$img1["goods_img3"];
            }

            $add_goods["goods_name"]=I("goods_name");
            $add_goods["goods_title"]=I("goods_title");
            $add_goods["goods_price"]=I("goods_price");
            $add_goods["goods_oldprice"]=I("goods_oldprice");
            $add_goods["goods_salenum"]=I("goods_salenum");
            $add_goods["goods_maxnum"]=I("goods_maxnum");
            $add_goods["goods_hot"]=I("goods_hot");
            $add_goods["goods_color"]=I("goods_color");
            $add_goods["goods_size"]=I("goods_size");
            $add_goods["goods_parent_id"]=I("goods_parent_id");
            if (I("goods_order")){
                $add_goods["goods_order"]=I("goods_order");
            }
            //print_r($add_goods);exit();
            $return=$title_model->where("goods_id=$getId")->save($add_goods);
            if($return!==false){
                $this->success("修改成功",U("Goods/index"));
            }else{
                $this->error($title_model->getError());
            }
        }
    }
    public function delete(){
        if(IS_GET){
            $getId=$_GET["goods_id"];
            $title_model=M("goods");
            $img1=$title_model->where("goods_id=$getId")->field("goods_img1")->find();
            $img2=$title_model->where("goods_id=$getId")->field("goods_img2")->find();
            $img3=$title_model->where("goods_id=$getId")->field("goods_img3")->find();
            unlink("./Public/".$img1['goods_img1']);
            unlink("./Public/".$img2['goods_img2']);
            unlink("./Public/".$img3['goods_img3']);
            $return=$title_model->where("goods_id=$getId")->delete();
            if($return!=false){
                $this->success("删除成功",U("Goods/index"));
            }else{
                $this->error($title_model->getError());
            }
        }
    }
    public function ajax_rtn(){
        $text=$_POST['selectText'];
        $children=M("sy_thememarket")->order("themem_id asc")->where("themem_parent_id=$text")->getField("themem_id,themem_name",true);
        $this->ajaxReturn($children);
    }



}