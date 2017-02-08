<?php
/**
 * Created by PhpStorm.
 * User: whj
 * Date: 16/11/5
 * Time: 12:32
 */
namespace Admin\Model;
use Think\Model;
class ArticleModel extends Model{
    protected $_validate=[
        ['a_name','require','文章名称必须填写！'],
//        ['a_name','','文章名称已经存在！',1,'unique',self::MODEL_INSERT],
        ['a_intro','require','文章简介必须填写！'],
        ['a_intro','10,300','文章简介需在10-50字符之间',1,'length',1],
        ['a_content','require','文章内容必须填写！'],
        ['a_stauts','require','请填写审核状态'],
        ['a_img','require','请添加文章配图'],
    ];
    protected $_auto=[
        ['pubtime','time',1,'function']
    ];
}