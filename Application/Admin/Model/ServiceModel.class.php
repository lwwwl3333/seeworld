<?php 
namespace Admin\Model;
use Think\Model;
class ServiceModel extends Model{
	protected $_validate = array(
        array('ser_name','1,40','名称不能为空',1,'length',3),
        array('ser_price','1,40','价格不能为空',1,'length',3),


	);
}







?>