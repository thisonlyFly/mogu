<?php
namespace Admin\Controller;
use Think\Controller;
class ShouyeThemeMarketController extends Controller {
    public function index(){
        $themeM_list=M("sy_thememarket")->order("themeM_id asc")->where("themeM_parent_id=0")->select();
        //print_r($themeM_list);
        $this->assign("themeM_list",$themeM_list);
        $this->display();
    }
    public function add(){
        if(IS_POST){
            $add_theme["themeM_name"]=I("themeM_name");
            $add_theme["themeM_isShow"]=I("themeM_isShow");
            $add_theme["themeM_children"]=I("themeM_children");
            if (I("themeM_order")){
                $add_theme["themeM_order"]=I("themeM_order");
            }

            $theme_model=D("sy_thememarket");

            if($theme_model->create()){
                $theme_model->add($add_theme);
                $this->success("添加成功",U('ShouyeThemeMarket/add'));
            }else{
                $this->error($theme_model->getError());
            }

        }else{
            $theme_parent=D("sy_thememarket")->where('themeM_parent_id=0')->select();

            $this->assign('themeM_parent',$theme_parent);
            $this->display();
        }
    }
    public function update(){
       if($_GET){
           $getId=$_GET["themem_id"];
           $themeM_list=D("sy_thememarket")->order("themeM_id asc")->where("themem_id=$getId")->select();
           $this->assign("themeM_list",$themeM_list);
           $this->display();
       }
       if(IS_POST){
           $postId=I("themem_id");
               $update_theme["themeM_name"]=I("themeM_name");
               $update_theme["themeM_isShow"]=I("themeM_isShow");
               $update_theme["themeM_order"]=I("themeM_order");


               $theme_model=D("sy_thememarket");
               $result=$theme_model->where("themem_id=$postId")->save($update_theme);

               if($result !== false){
                   $this->success("修改成功",U('ShouyeThemeMarket/index'));
               }else{
                   $this->error($theme_model->getError());
           }
       }
    }
    public function delete(){
        if(IS_GET){
            $deleteId=$_GET["themem_id"];
            $theme_model=D("sy_thememarket");
            $result=$theme_model->where("themem_id=$deleteId")->delete();

            if($result !== false){
                $this->success("删除成功",U('ShouyeThemeMarket/index'));
            }else{
                $this->error($theme_model->getError());
            }
        }
    }
    public function indexChildren()
    {
        if (IS_GET) {
            if($_GET["themem_id"]){
                $getId=$_GET["themem_id"];
                $themeM_list = M("sy_thememarket")->order("themeM_id asc")->where("themeM_parent_id=$getId")->select();
                $this->assign("themeM_parent_id",$getId);
                $this->assign("themeM_list", $themeM_list);
                $this->display();
            }else{
                $getId=$_GET["themeM_parent_id"];

                $themeM_list = M("sy_thememarket")->order("themeM_id asc")->where("themeM_parent_id=$getId")->select();
                $this->assign("themeM_parent_id",$getId);
                $this->assign("themeM_list", $themeM_list);
                $this->display();
            }
        }
    }
    public function addChildren(){
        if(IS_POST){
            $add_theme["themeM_name"]=I("themeM_name");
            $add_theme["themeM_isShow"]=I("themeM_isShow");
            $add_theme["themeM_isHot"]=I("themeM_isHot");
            if(I("themeM_order")){
                $add_theme["themeM_order"]=I("themeM_order");
            }
            $add_theme["themeM_children"]=I("themeM_children");
            $add_theme["themeM_parent_id"]=I("themeM_parent_id");
            $add_theme["themeM_clickHot"]=I("themeM_clickHot");

            $theme_model=D("sy_thememarket");

            if($theme_model->create()){
                $theme_model->add($add_theme);
                $this->success("添加成功",U('ShouyeThemeMarket/addChildren',array("themeM_parent_id"=>$add_theme["themeM_parent_id"])));
            }else{
                $this->error($theme_model->getError());
            }

        }else{

            if(I("themeM_parent_id")){
                $this->assign('themeM_parent_id',I("themeM_parent_id"));
            }else{
                $this->assign("themeM_parent_id",$_GET["themeM_parent_id"]);
            }
            $this->display();
        }
    }
    public function updateChildren(){
        if($_GET){
            $getId=$_GET["themem_id"];
            $themeM_list=D("sy_thememarket")->order("themeM_id asc")->where("themem_id=$getId")->select();
            $this->assign("themeM_parent_id",$themeM_list[0]['themem_parent_id']);
            $this->assign("themeM_list",$themeM_list);
//            print_r($themeM_list);exit();
            $this->display();
        }
        if(IS_POST){
            $postId=I("themem_id");
            $themeM_parent_id=I("themeM_parent_id");
            $update_theme["themeM_name"]=I("themeM_name");
            $update_theme["themeM_isShow"]=I("themeM_isShow");
            $update_theme["themeM_order"]=I("themeM_order");
            $update_theme["themeM_children"]=I("themeM_children");
            $update_theme["themeM_isHot"]=I("themeM_isHot");

            $theme_model=D("sy_thememarket");
            $result=$theme_model->where("themem_id=$postId")->save($update_theme);

            if($result !== false){
                $this->success("修改成功",U('ShouyeThemeMarket/indexChildren',array("themem_id"=>$themeM_parent_id)));
            }else{
                $this->error($theme_model->getError());
            }
        }
    }
    public function deleteChildren(){
        if(IS_GET){
            $deleteId=$_GET["themem_id"];
            $themeM_parent_id=$_GET['themem_parent_id'];
            $theme_model=D("sy_thememarket");
            $result=$theme_model->where("themem_id=$deleteId")->delete();

            if($result !== false){
                $this->success("删除成功",U('ShouyeThemeMarket/indexChildren',array('themem_id'=>$themeM_parent_id)));
            }else{
                $this->error($theme_model->getError());
            }
        }
    }
    public function lastChildren(){
        if (IS_GET) {
            if($_GET["themem_id"]){
                $getId=$_GET["themem_id"];
                $themeM_list = M("sy_thememarket")->order("themeM_id asc")->where("themeM_parent_id=$getId")->select();
                $themeM=M("sy_thememarket")->where("themeM_id=$getId")->find();
                $themeM_parent_id = M("sy_thememarket")->where("themeM_id=".$themeM["themem_parent_id"])->find();
                $this->assign("themeM_parent_id",$themeM_parent_id["themem_id"]);
                $this->assign("themeM_id",$getId);
                $this->assign("themeM_list", $themeM_list);
                $this->display();
            }else{
                $getId=$_GET["themeM_parent_id"];
                $themeM_list = M("sy_thememarket")->order("themeM_id asc")->where("themeM_parent_id=$getId")->select();
                $this->assign("themeM_parent_id",$getId);
                $this->assign("themeM_list", $themeM_list);
                $this->display();
            }
        }
    }
    public function lastAdd(){
        if(IS_POST){
            $add_theme["themeM_name"]=I("themeM_name");
            $add_theme["themeM_isShow"]=I("themeM_isShow");
            $add_theme["themeM_isHot"]=I("themeM_isHot");
            if(I("themeM_order")){
                $add_theme["themeM_order"]=I("themeM_order");
            }
            $add_theme["themeM_children"]=I("themeM_children");
            $add_theme["themeM_parent_id"]=I("themeM_parent_id");
            $add_theme["themeM_clickHot"]=I("themeM_clickHot");
            $add_theme["themeM_remarks"]=I("themeM_remarks");

            $theme_model=D("sy_thememarket");

            if($theme_model->create()){
                $theme_model->add($add_theme);
                $this->success("添加成功",U('ShouyeThemeMarket/lastAdd',array("themeM_id"=>$add_theme["themeM_parent_id"])));
            }else{
                $this->error($theme_model->getError());
            }

        }else{

            if($_GET["themem_id"]){
                $this->assign("themeM_parent_id",$_GET["themem_id"]);
            }else{
                $this->assign('themeM_parent_id',I("themeM_id"));
            }
            $this->display();
        }
    }
    public function lastUpdate(){
        if($_GET){
            $getId=$_GET["themem_id"];
            $themeM_list=D("sy_thememarket")->order("themeM_id asc")->where("themem_id=$getId")->select();
            $this->assign("themeM_parent_id",$themeM_list[0]['themem_parent_id']);
            $this->assign("themeM_list",$themeM_list);
            $this->display();
        }
        if(IS_POST){
            $postId=I("themem_id");
            $themeM_parent_id=I("themeM_parent_id");
            $update_theme["themeM_name"]=I("themeM_name");
            $update_theme["themeM_isShow"]=I("themeM_isShow");
            $update_theme["themeM_order"]=I("themeM_order");
            $update_theme["themeM_isHot"]=I("themeM_isHot");
            $update_theme["themeM_parent"]=I("themeM_parent");
            $update_theme["themeM_remarks"]=I("themeM_remarks");
            $update_theme["themeM_clickHot"]=I("themeM_clickHot");

            $theme_model=D("sy_thememarket");
            $result=$theme_model->where("themem_id=$postId")->save($update_theme);

            if($result !== false){
                $this->success("修改成功",U('ShouyeThemeMarket/lastChildren',array("themem_id"=>$themeM_parent_id)));
            }else{
                $this->error($theme_model->getError());
            }
        }
    }
    public function lastDelete(){
        if(IS_GET){
            $deleteId=$_GET["themem_id"];
            $themeM_parent_id=$_GET['themeM_parent_id'];
            $theme_model=D("sy_thememarket");
            $result=$theme_model->where("themem_id=$deleteId")->delete();

            if($result !== false){
                $this->success("删除成功",U('ShouyeThemeMarket/lastChildren',array('themem_id'=>$themeM_parent_id)));
            }else{
                $this->error($theme_model->getError());
            }
        }
    }


}















