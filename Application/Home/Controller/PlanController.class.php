<?php
/**
 * Created by PhpStorm.
 * User: whj
 * Date: 16/11/9
 * Time: 15:09
 */
namespace Home\Controller;
use Think\Controller;
class PlanController extends Controller{
    public function plan(){
        $planModel=M('plan');
        $planModel->create();
        if($planModel->add()){
           $num=$_POST['plan_children_num']+$_POST['plan_adult_num'];
            $tra_id=$_POST['pid'];
            $traModel=M('Travel');
            $traModel->tra_people = $num;
            $traModel->where("tra_id=$tra_id")->save();

        }
    }
    public function ser(){
    $planModel=M('plan');
        $planModel->create();
        $planModel->add();
    }
    public function private(){
        $planModel=M('priplan');
        $planModel->create();
        $planModel->add();
    }
}


