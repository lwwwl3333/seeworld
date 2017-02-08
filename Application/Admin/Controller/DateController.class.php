<?php
/**
 * Created by PhpStorm.
 * User: whj
 * Date: 16/11/9
 * Time: 09:39
 */
namespace Admin\Controller;
use Think\Controller;
class DateController extends Controller{
    public function adddate(){
         if(check_cookie() !== 1){
            $this->redirect('admin/login/login');
            exit;
        }

        if(!IS_POST){
            $tra = D('travel');
            $traid = I('get.tra_id');
            $tras = $tra->find($traid);
            $this->assign('t',$tras);
            $this->display();
        }
        $dateModel = D('date');
        if (!$dateModel->create()) {
            exit($dateModel->getError());
        } else {

            if ($dateModel->add()) {
                //redirect('artlist');
                $this->success('添加出行时间成功', '', 1);
            } else {
                echo '404';
            }
        }

    }
    public function datelist(){
         if(check_cookie() !== 1){
            $this->redirect('admin/login/login');
            exit;
        }
        $dateModel=M('date');
        $dates=$dateModel->select();
        $this->assign('dates',$dates);
        $this->display();
    }
    public function editdate(){
         if(check_cookie() !== 1){
            $this->redirect('admin/login/login');
            exit;
        }
        if(!IS_POST){
           $dateModel=M('date');
            $date=$dateModel->where("d_id=$_GET[d_id]")->find();
            $tra_name=$date['tra_name'];
            $d_content=$date['d_content'];
            $this->assign('d_content',$d_content);
            $this->assign('tra_name',$tra_name);
            $this->display();
        }else{
            $dateModel=D('date');
            if (!$dateModel->create()) {
                exit($dateModel->getError());
            } else {

                if ($dateModel->where("d_id=$_GET[d_id]")->save()) {
                    $this->success('修改出行时间成功', U('Admin/Date/datelist'), 3);
                } else {
                    echo '出行时间重复';
                }
            }
        }
    }
    public function deldate()
    {
         if(check_cookie() !== 1){
            $this->redirect('admin/login/login');
            exit;
        }
        $d_id = $_GET['d_id'];
        $dateModel = M('date');
        $dateModel->where("d_id=$d_id")->delete();
       
    }
}