<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $lunboModel=M('lunbo');
        $lunbos=$lunboModel->where('lun_show=1')->order('lun_id desc')->limit(0,3)->select();


        $traModel=M('travel');
        $vip=$traModel->where("is_vip=1")->order('tra_id desc')->limit(0,4)->select();
        $tra=$traModel->order('tra_id desc')->limit(0,4)->select();
        
        $artModel=M('article');
        $art=$artModel->where("a_status=1")->order('a_id desc')->limit(0,4)->select();

        $this->assign('vips',$vip);
        $this->assign('tras',$tra);
        $this->assign('arts',$art);
        $this->assign('lunbos',$lunbos);
        $this->display();
    }
}