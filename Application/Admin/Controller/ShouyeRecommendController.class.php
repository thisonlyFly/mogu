<?php
namespace Admin\Controller;
use Think\Controller;
class ShouyeRecommendController extends Controller
{
    public function index()
    {
        $themeM_list = M("sy_thememarket")->order("themeM_id asc")->where("themeM_clickHot='1'")->select();
        //print_r($themeM_list);
        $this->assign("themeM_list", $themeM_list);
        $this->display();
    }
    public function add(){
        if(IS_POST){
            $add_theme["themeM_name"]=I("themeM_name");
            $add_theme["themeM_isShow"]=I("themeM_isShow");
            $add_theme["themeM_isHot"]=I("themeM_isHot");
            $add_theme["themeM_clickHot"]=1;
            $add_theme["themeM_remarks"]=I("themeM_remarks");
            if (I("themeM_order")){
                $add_theme["themeM_order"]=I("themeM_order");
            }

            $theme_model=M("sy_thememarket");

            if($theme_model->create()){
                $theme_model->add($add_theme);
                $this->success("添加成功",U('ShouyeRecommend/add'));
            }else{
                $this->error($theme_model->getError());
            }

        }else{
            $this->display();
        }
    }
    public function update(){
        if(IS_GET){
            $getId=$_GET["themeM_id"];
            $title_list=M("sy_thememarket")->where("themeM_id=$getId")->select();
            $this->assign("title_list",$title_list);
            $this->display();
        }else if(IS_POST){
            $getId=I("themeM_id");
            $title_list["themeM_name"]=I("themeM_name");
            $title_list["themeM_isShow"]=I("themeM_isShow");
            $title_list["themeM_isHot"]=I("themeM_isHot");
            $title_list["themeM_clickHot"]=I("themeM_clickHot");
            $title_list["themeM_remarks"]=I("themeM_remarks");

            if(I("themeM_order")){
                $title_list["themeM_order"]=I("themeM_order");
            }
            $title_model=M("sy_thememarket");
            $return=$title_model->where("themeM_id=$getId")->save($title_list);
            if($return!==false){
                $this->success("修改成功",U("ShouyeRecommend/index"));
            }else{
                $this->error($title_model->getError());
            }
        }
    }
    public function delete(){
        if(IS_GET){
            $getId=$_GET["themeM_id"];
            $title_model=M("sy_thememarket");
            $return=$title_model->where("themeM_id=$getId")->delete();
            if($return!=false){
                $this->success("删除成功",U("ShouyeRecommend/index"));
            }else{
                $this->error($title_model->getError());
            }
        }
    }



}