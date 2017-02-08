<?php 

namespace Admin\Controller;
use Think\Controller;

class LoginController extends Controller{
    public function login(){
        $this->display();
    }

    public function checklogin(){

        $admin = D('Admin');

        $name = $_POST['adminname'];
        $pwd = $_POST['password'];
        $date =array(
            'adminname'=>$name,
            'password'=>$pwd
            );

        $user = $admin->where($date)->count(); 

        $user= intval($user);

        if($user == 1){
            cookie('adminname',$_POST['adminname'],6000);
            cookie('coode',md5($_POST['adminname'].C('salt')));
            $this->redirect('admin/index/index');
        }else{
            echo '用户名或密码不存在';
            $this->redirect('admin/login/login');
        }



    }
} 