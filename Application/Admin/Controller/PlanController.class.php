<?php
/**
 * Created by PhpStorm.
 * User: whj
 * Date: 16/11/9
 * Time: 15:54
 */
namespace Admin\Controller;
use Think\Controller;
class PlanController extends Controller{
    public function planlist(){
         if(check_cookie() !== 1){
            $this->redirect('admin/login/login');
            exit;
        }
        
        $plan = M('plan')->where("pid !=0")->select();
        $this->assign('plan',$plan);
        $this->display();
        
    }
    public function status_on(){
         if(check_cookie() !== 1){
            $this->redirect('admin/login/login');
            exit;
        }
        $plan_id=$_GET['plan_id'];
       $planModel=M('plan');
        $data['plan_status']=1;
        $planModel->where("plan_id=$plan_id")->save($data);
    }
    public function status_off(){
         if(check_cookie() !== 1){
            $this->redirect('admin/login/login');
            exit;
        }
        $plan_id=$_GET['plan_id'];
        $planModel=M('plan');
        $data['plan_status']=0;
        $planModel->where("plan_id=$plan_id")->save($data);
    }
    public function delplan(){
         if(check_cookie() !== 1){
            $this->redirect('admin/login/login');
            exit;
        }
        $plan_id=$_GET['plan_id'];
        $planModel=M('plan');
        $pp=$planModel->where("plan_id=$plan_id")->find();
        $p_status=$pp['plan_status'];
        if($p_status==1){
            $planModel->where("plan_id=$plan_id")->delete();
            echo 1;
        }else{
            echo 0;
        }
    }
    public function serlist(){
         if(check_cookie() !== 1){
            $this->redirect('admin/login/login');
            exit;
        }
        $ser = M('plan')->where("ser_id !=0")->select();
        $this->assign('plan',$ser);
        $this->display();
    }
    public function prilist(){
        if(check_cookie() !== 1){
            $this->redirect('admin/login/login');
            exit;
        }
        $ppModel=M('priplan');
        $pps=$ppModel->select();
        $this->assign('pps',$pps);
        $this->display();
    }
    public function status2_on(){
        if(check_cookie() !== 1){
            $this->redirect('admin/login/login');
            exit;
        }
        $pp_id=$_GET['pp_id'];
        $ppModel=M('priplan');
        $data['plan_status']=1;
        $ppModel->where("pp_id=$pp_id")->save($data);
    }
    public function status2_off(){
        if(check_cookie() !== 1){
            $this->redirect('admin/login/login');
            exit;
        }
        $pp_id=$_GET['pp_id'];
        $ppModel=M('priplan');
        $data['plan_status']=0;
        $ppModel->where("pp_id=$pp_id")->save($data);
    }
    public function delpp(){
        if(check_cookie() !== 1){
            $this->redirect('admin/login/login');
            exit;
        }
        $pp_id=$_GET['pp_id'];
        $ppModel=M('priplan');
        $pp=$ppModel->where("pp_id=$pp_id")->find();
        $p_status=$pp['plan_status'];
        if($p_status==1){
            $ppModel->where("pp_id=$pp_id")->delete();
            echo 1;
        }else{
            echo 0;
        }
    }


    
}