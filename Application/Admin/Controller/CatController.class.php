<?php
namespace Admin\Controller;
use Think\Controller;
class CatController extends Controller {
    public function catadd(){
         if(check_cookie() !== 1){
            $this->redirect('admin/login/login');
            exit;
        }
    	if(!IS_POST){
    	$this->display();
    	exit();
    	}else{
    	//动态完成
    	// $rules = array (
    	// 	array('add_time','time',3,'function')
    	// 	);
    	$catmodel = D('cat');
    	// $catmodel->auto($rules);
    	// var_dump($catmodel->create());//不满足validate条件返回false
    	// exit();
    	
    	if(!$catmodel->create()){
    	echo $catmodel->getError();
    	}else{
    	$catmodel->add();
    	$this->success('添加栏目成功','',1);
    	}
    	} 	
    }

    public function catdel(){
         if(check_cookie() !== 1){
            $this->redirect('admin/login/login');
            exit;
        }
  	$id=I('get.cat_id');
  	if($id)
  	{
    $user=M('cat');
    $data['cat_id']=$id;
    $rs=$user->where($data)->delete();
    if($rs)
    {
      $this->success('删除成功!');
    }
    else
    {
      $this->error('删除失败!');
    }
 	}
   }

    public function catedit(){
         if(check_cookie() !== 1){
            $this->redirect('admin/login/login');
            exit;
        }
    	$catmodel = D('cat');
    	if(!IS_POST){
    		$cat_id = I('cat_id');
    		$cats = $catmodel->find($cat_id);
    		$this->assign('cat',$cats);
    		$this->display();
    	}else{	
    		$rs = $catmodel->where('cat_id='.$_GET['cat_id'])->save($_POST);
    		$this->redirect('Admin/Cat/catlist','',1,'修改成功..');
    	}
    }

    public function catlist(){
         if(check_cookie() !== 1){
            $this->redirect('admin/login/login');
            exit;
        }
    	$catmodel = D('cat');
    	$cats = $catmodel->select();
    	// var_dump($cats);
    	// exit();
    	$this->assign('cat',$cats);
    	$this->display();
    }
}