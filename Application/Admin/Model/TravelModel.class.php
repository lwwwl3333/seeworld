<?php 
namespace Admin\Model;
use Think\Model;
class TravelModel extends Model{
	//自动验证
	 protected $_validate = array(
	 	array('tra_name','','旅游项目名称不能为空',1,'notequal',3),
	 	array('cat_id','','请选择旅游项目栏目名称',1,'notequal',3),
	 	array('tra_price','','旅游项目价格不能为空',1,'notequal',3),
		 array('tra_day','require','旅行周期必须填写'),
		 array('tra_thumb','require','请添加缩略图'),
		 array('tra_limit','require','人数上限必须填写'),
		 array('tra_day',array(1,30),'旅行周期必须在1-30天之间',1,'between',3)
	 	);
	//自动填充
	protected $_auto = array(
		array('add_time','time',3,'function')
		);
}