<?php
namespace Admin\Controller;
use Think\Controller;
use Think\Upload;
class ShouyeAdController extends Controller
{
    public function index()
    {
        $num=8;
        $allNum=M("sy_ad")->count();
        $page=new \Think\Page($allNum,$num);
        $show=$page->show();
        $Ad_list = M("sy_ad")->limit($page->firstRow.",".$page->listRows)->order("ad_name asc")->select();
        $this->assign("ad_list", $Ad_list);
        $this->assign("page",$show);
        $this->display();
    }
    public function add(){
        if(IS_POST){
            $files_array=pic("ad_img");

            if(!empty($files_array["ad_img"]["savename"])){
                $add_ad["ad_img"]="upload/".$files_array["ad_img"]["savename"];
            }
            $add_ad["ad_name"]=I("ad_name");
            $add_ad["ad_title"]=I("ad_title");
            $add_ad["ad_remarks"]=I("ad_remarks");
            if (I("ad_order")){
                $add_ad["ad_order"]=I("ad_order");
            }

            //print_r($add_theme);exit();
            $theme_model=M("sy_ad");

            if($theme_model->create()){
                //数据库列名跟传过来的键名相同不用赋值
                $theme_model->add($add_ad);
                $this->success("添加成功",U('ShouyeAd/add'));
            }else{
                $this->error($theme_model->getError());
            }

        }else{
            $this->display();
        }
    }
    public function update(){
        if(IS_GET){
            $getId=$_GET["Ad_id"];
            $title_list=M("sy_ad")->where("ad_id=$getId")->select();
            $this->assign("ad_list",$title_list);
            $this->display();
        }else if(IS_POST){
            $getId=I("ad_id");
            $title_model=M("sy_ad");
            if($_FILES['ad_img']['error']!=4){
                $files_array=pic();
                $title_list["ad_img"]="upload/".$files_array["ad_img"]["savename"];
                $img1=$title_model->where("ad_id=$getId")->find();
                unlink("./Public/".$img1['ad_img']);
            }else{
                $img1=$title_model->where("ad_id=$getId")->field("ad_img")->find();
                $title_list["ad_img"]=$img1["ad_img"];
            }
            $title_list["ad_name"]=I("ad_name");
            $title_list["ad_title"]=I("ad_title");

            if(I("ad_order")){
                $title_list["ad_order"]=I("ad_order");
            }
            if(I("ad_remarks")){
                $title_list["ad_remarks"]=I("ad_remarks");
            }
            if(I("ad_order")){
                $title_list["ad_order"]=I("ad_order");
            }
            $return=$title_model->where("ad_id=$getId")->save($title_list);
            if($return!==false){
                $this->success("修改成功",U("ShouyeAd/index"));
            }else{
                $this->error($title_model->getError());
            }
        }
    }
    public function delete(){
        if(IS_GET){
            $getId=$_GET["Ad_id"];
            $title_model=M("sy_ad");
            $img=M("sy_ad")->where("ad_id=$getId")->field("ad_img")->find();
            unlink("./Public/".$img['ad_img']);
            $return=$title_model->where("ad_id=$getId")->delete();
            if($return!=false){
                $this->success("删除成功",U("ShouyeAd/index"));
            }else{
                $this->error($title_model->getError());
            }
        }
    }



}