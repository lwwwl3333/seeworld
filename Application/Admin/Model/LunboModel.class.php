<?php
namespace Admin\Model;
use Think\Model;
class LunboModel extends Model {
    	protected $_auto = array(
    		array('add_time','time',1,'function'),
    	);
}