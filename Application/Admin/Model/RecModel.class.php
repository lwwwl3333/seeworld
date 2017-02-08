<?php
/**
 * Created by PhpStorm.
 * User: whj
 * Date: 16/11/5
 * Time: 10:20
 */
namespace Admin\Model;
use Think\Model;
class RecModel extends Model{
    protected $_validate=[
        ['rec_name','require','分类名称必须填写！'],
        ['rec_name','','分类名称已经存在！',0,'unique',1]
    ];
}