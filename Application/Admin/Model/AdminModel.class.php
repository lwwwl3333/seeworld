<?php 

namespace Admin\Model;
use Think\Model;

class AdminModel extends Model{

    // 自动添加上次登录时间
    protected  $_auto = array(
        array('last_time','time',1,'function')

        );

    // public $_validate = array(
    //     array('verify','require','验证码必须！'),
    //     array('nname','checkName','账号不存在',1,'function',4),
    //     array('password','checkPwd','密码错误',1,'function',4),

    //     );
}