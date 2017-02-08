<?php 
namespace Admin\Model;
use Think\Model;
class CatModel extends Model{
	//自动验证
	protected $_validate = array(
		array('cat_name','3,10','栏目名称至少3-6位',1,'length',3)
		);
	//自动填充
	protected $_auto = array(
		array('add_time','time',3,'function')
		);
}