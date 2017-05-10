<?php
namespace Admin\Model;
use Think\Model;
class ShouyeThemeMarketModel extends Model{
    // 用户名：
    //     1、不能为空、长度限制
    //     2、已经存在的用户名不可以再注册

    // 密码：

    //     1、不能为空、长度限制（6---12）

    // 重复密码：

    //     1、两次输入的密码必须一致

    // 保存自动验证的规则
    protected $_validate=array(
        array('themem_name','require','不能为空！'), //默认情况下用正则进行验证
        array('themem_name','','已存在！','3','unique'),

    );


    // protected $_auto =array(
    // 		array('user_name',1),
    // 		array('create_time',time())
    // 	);


}

?>