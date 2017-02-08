<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index()
    {
        //$this->assign(time,time());
        if(check_cookie() !== 1){
            $this->redirect('admin/login/login');
            exit;
        }
        
        $this->display();
    }
    public function left(){
         if(check_cookie() !== 1){
            $this->redirect('admin/login/login');
            exit;
        }
        $this->display();
    }
    public function header(){
         if(check_cookie() !== 1){
            $this->redirect('admin/login/login');
            exit;
        }
        $this->display();
    }
    public function foot(){
         if(check_cookie() !== 1){
            $this->redirect('admin/login/login');
            exit;
        }
        $this->display();
    }
    public function main(){
         if(check_cookie() !== 1){
            $this->redirect('admin/login/login');
            exit;
        }
        $this->assign('time',time());
        $this->assign('ip',get_client_ip());
        $this->display();
    }
    public function logout(){
        cookie('adminname',null);
        cookie('coode',null);
         $this->redirect('admin/login/login');
    }
}