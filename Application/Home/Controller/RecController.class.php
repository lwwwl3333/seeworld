<?php
/**
 * Created by PhpStorm.
 * User: whj
 * Date: 16/11/8
 * Time: 10:39
 */
namespace Home\Controller;
use Think\Controller;
use Think\Page;

class RecController extends Controller{
    public function rec(){
        $RecModel=M('rec');
        $rec=$RecModel->select();
        
        $artModel=M('article');
        $count=$artModel->where('a_status=1')->count();
//
        $Page=new Page($count,5);
        $Page->setConfig('prev', '上一页');
        $Page->setConfig('next', '下一页');
        $Page->setConfig('first', '首页');
        $show       = $Page->show();

        $art=$artModel->where('a_status=1')->order('a_id desc')
            ->limit($Page->firstRow.','.$Page->listRows)->select();

        $wangzhe=$artModel->order('a_click desc')->find();
        $dashi=$artModel->order('a_click desc')->limit(1,3)->select();

        if(isset($_GET['rec_id'])){
            $art=$artModel->where("rec_id=$_GET[rec_id] and a_status=1")->order('a_id desc')
                ->limit($Page->firstRow.','.$Page->listRows)->select();
        }
        
        $wn=$RecModel->find("$_GET[rec_id]") ;  //面包屑
        $wnn=$wn['rec_name'];

        $this->assign('page',$show);
        $this->assign('art',$art);
        $this->assign('rec',$rec);
        $this->assign('rank',$wangzhe);
        $this->assign('dashi',$dashi);
        $this->assign('get',$_GET['rec_id']);
        $this->assign('wnn',$wnn);
        $this->display();
    }
    public function art(){
        $artModel=M('article');
        $art=$artModel->where("a_id=$_GET[a_id]")->find();

        $artModel->a_click+=1;
        $artModel->where("a_id=$_GET[a_id]")->save();

        $wangzhe=$artModel->order('a_click desc')->find();
        $dashi=$artModel->order('a_click desc')->limit(1,3)->select();

        $rid=$art['rec_id'];
        $recModel=M('rec');
        $rn=$recModel->find($rid);
        $rname=$rn['rec_name'];

        $this->assign('art',$art);

        $this->assign('rank',$wangzhe);
        $this->assign('dashi',$dashi);
        
        $this->assign('rid',$rid);
        $this->assign('rname',$rname);
        $this->display();
    }
    
   
}