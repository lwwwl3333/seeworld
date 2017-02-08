<?php
/**
 * Created by PhpStorm.
 * User: whj
 * Date: 16/11/10
 * Time: 21:05
 */
namespace Admin\Model;
use Think\Model;
class DateModel extends Model{
    protected $_validate = array(

        ['d_content','','出发时间已存在',1,'unique',3],

    );
}