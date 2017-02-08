<?php 
namespace Home\Controller;
use Think\Controller;
class TravelController extends Controller {
    public function travel(){
        if(isset($_GET['cat_id'])){
        $tra = D('Admin/travel');
        // $cats = $cat->select();
        $tras = $tra->join('cat  ON  travel.cat_id = cat.cat_id ')->where(array('travel.cat_id'=>$_GET['cat_id']))->field('travel.*,cat_name')->select();
        }else{
        $tra = D('Admin/travel');
        $tras = $tra->join('cat  ON  travel.cat_id = cat.cat_id ')->field('travel.*,cat_name')->select();
        }
        $cat = D('cat');
        $cats = $cat->select();

        $c=$cat->find($_GET['cat_id']);
        $cc=$c['cat_name'];

        $this->assign('cat',$cats);
        $this->assign('tra',$tras);

        $this->assign('get',$_GET['cat_id']);
        $this->assign('cc',$cc);
        $this->display();
    }

    public function descby(){
        $cat = D('cat');
        $cats = $cat->select();
        $this->assign('cat',$cats);
        $tra = D('Admin/travel');
        // $cats = $cat->select();
        $tras = $tra->join('cat  ON  travel.cat_id = cat.cat_id ')->field('travel.*,cat_name')->order('tra_price desc')->select();
        $this->assign('tra',$tras);
        $this->display('travel');
    }

    public function ascby(){
        $cat = D('cat');
        $cats = $cat->select();
        $this->assign('cat',$cats);
        $tra = D('Admin/travel');
        // $cats = $cat->select();
        $tras = $tra->join('cat  ON  travel.cat_id = cat.cat_id ')->field('travel.*,cat_name')->order('tra_price asc')->select();
        $this->assign('tra',$tras);
        $this->display('travel');
    }
}