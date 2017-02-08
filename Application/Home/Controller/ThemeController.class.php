<?php 
namespace Home\Controller;
use Think\Controller;
class ThemeController extends Controller{
	public function theme(){
		$the = D('travel');
		$traid = I('get.tra_id');
		$themes = $the->join('cat ON travel.cat_id = cat.cat_id')->where(array('tra_id'=>$traid))->find();
		$xc = D('traxc');
        $xcs = $xc->where("tra_id=$traid")->find();
		

		$date=D('date');
		$dates = $date->where('tra_id')->select();
		
		
		$this->assign('xc',$xcs);
		$this->assign('the',$themes);
		$this->assign('dates',$dates);
		$this->display();
	}
	
}