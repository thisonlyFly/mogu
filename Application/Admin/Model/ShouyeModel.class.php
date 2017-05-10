<?php
namespace Admin\Model;
use Think\Model;
class ShouyeModel extends Model {
    protected $_validate=array(
        array('cat_name','','分类名已存在！','3','unique')
    );
}