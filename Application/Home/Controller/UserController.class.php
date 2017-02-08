<?php

namespace Home\Controller;
use Think\Controller;

class UserController extends Controller
{

    public static $init;

    public function __construct()  //自动实例化
    {
        parent::__construct();   //和系统的自动执行方法不冲突
        self::$init = D('user');
    }

    public function reg()
    {

//        var_dump(self::$init);
        if(!self::$init->create())
        {
            exit(self::$init->getError());
        }else
        {
            $salt = $this->salt();
            $email = self::$init->email;
            self::$init->password = md5(self::$init->password.$salt);
            self::$init->salt = $salt;

            if(self::$init->add())
            {
                $this->email($email);
                $this->redirect('login'); //成功后跳转到登录页面
            }
        }

    }


    //注册发送手机验证码
    public function sms($mobile)
    {
        echo $mobile;
        require('F:/xampp/htdocs/alidayu/TopSdk.php'); //引入需要的类
        $appkey = '23512427';
        $secret = '1b0d511404d25feb34d08d15c57c1786';

        $c = new \TopClient;   //如果不成功就从根目录引入多加一个\
        $c->appkey = $appkey;
        $c->secretKey = $secret;
        $rand = mt_rand(1000,9999); //这是一个验证码的随机数

        //把验证码写入session中
        session('smscode',$rand);

        $req = new \AlibabaAliqinFcSmsNumSendRequest;
        $req->setExtend("123456");
        $req->setSmsType("normal"); //短信类型,必写
        $req->setSmsFreeSignName("先锋音讯");  //短信签名
        $req->setSmsParam("{\"verify\":\"$rand\",\"name\":\"点点贷\",\"intro\":\"什么几把玩意\"}"); //替换模板的变量
        $req->setRecNum($mobile); //发送的手机号
        $req->setSmsTemplateCode("SMS_24850304");  //短信模板ID
        $c->execute($req); //发送
//        var_dump($req); //测试如果可以打印出来发送就是没问题的。

    }

    //检测验证码
    public function check_sms($verify)
    {
        if( $verify == session('smscode'))
        {
            echo  1;
        }else
        {
            echo  0;
        }

    }

    //调运接口，发送邮件
    public function email($mail) {
       // $mail = "1242482124@qq.com";

        $title = "在线注册";

        $content = "恭喜您注册成功,请牢记您的密码,";

        $from = "18810758459@163.com"; // 修改为你的发送邮箱

        $status = send_mail ( $title, $content, $from ,$mail);
        if($status==1){
            $success[]=$mail;
        }else{
            $error[]=$mail;
        }

        $this->assign ( 'success', $success);
        $this->assign ( 'error', $error );
        $this->assign ( 'sum', 1 );
    }


    //随机生成密码加盐字符串
    public function salt()
    {
     return substr(mt_rand(1000,9999).str_shuffle('abcdefgkzyx'),1,6);
    }

    //登录页面
    public function login()
    {
        if(!IS_POST)
        {
            $this->display();
        }
        else
        {
            if(check_yzm(I('post.verify')))
            {
                $info['username'] = I('post.username');
                $user = D('User')->where($info)->find();
                if(md5(I('post.password').$user['salt']) == $user['password'])
                {
                    if(I('post.brand') == 1)
                    {
                        cookie('username',$user['username'],7*24*3600);
                        //再写一个加了盐的cookie
                        cookie('code',md5($user['username'].C('salt')),7*24*3600);

                        $this->redirect('Home/Index/index');
                        //输入成功后加入cookie
                    }else
                    {
                        cookie('username',$user['username']);
                        cookie('code',md5($user['username'].C('salt')));
//                        echo '我是登录成功后的首页，不记住密码';
                        $this->redirect('Home/Index/index');
                    }
                }else
                {
//                    $this->redirect('Home/User/login','',2,'2秒后跳转至登录页面');
                    $this->success('密码错误，请重新输入','',3);
                }

            }
        }
    }


    //退出登录页面
    public function logout(){
        cookie('username',null);
        cookie('coode',null);
        $this->redirect('Home/Index/index');
//        $this->redirect('/');
    }


    //做一个登录的验证码
    public function userVerify()
    {
        //new验证码类得到对象
        $Verify = new \Think\Verify();
        //设置字体大小
        $Verify->fontSize = 20;
        //设置验证码长度
        $Verify->length = 4;
        //设置验验证码的宽度高度默认为h
        $Verify->imageW = 150;
        //设置高度
        $Verify->imageH = 40;
        //是否需要杂点
        $Verify->useNoise = false;
        //是否需要干扰线
        $Verify->useCurve = false;
        //调运生成
        $Verify->entry();
    }


}