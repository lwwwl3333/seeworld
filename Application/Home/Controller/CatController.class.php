<?php 
namespace Home\Controller;
use Think\Controller;
class CatController extends Controller{
	public function cat(){
		$cat = D('cat');
		$cats = $cat->select();
		//print_r($cats);
		$this->assign('lanmu',$cats);
		//展示
		$tr = D('travel');
		//print_r($tr);
		//判断是全部显示还是根据栏目显示
		$cat_id = I('cat_id');
		$desc = I('desc');
		echo $desc;

		if(empty($cat_id)){
			if(empty($desc)){
				$trinfo = $tr->select();
			}else{
				$desc==10?$desc='desc':$desc='asc';
				$trinfo = $tr->order("tra_price $desc")->select();
			}
			
		}else{
			if(empty($desc)){
				$trinfo = $tr->where("cat_id=$cat_id")->select();
			}else{
				$trinfo = $tr->where("cat_id=$cat_id")->order("tra_price desc")->select();
			}
            
		}
		
		//print_r($trinfo);
		$this->assign('trinfo',$trinfo);
		//找对应栏目下内容
		$this->display();
	}

	
}














 ?>