<?php 
namespace Admin\Model;
use Think\Model;
class SerattsModel extends Model{
	protected $_auto = array(
        array('ser_add','time',3,'function')

    );

    protected $_validate = array(
         array('ser_id','','数据重复提交',1,'unique',3)

    );

    

}



 ?>