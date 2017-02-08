<?php
namespace Admin\Controller;
use Think\Controller;
class TravelController extends Controller {
    public function traadd(){
        if(check_cookie() !== 1){
        $this->redirect('admin/login/login');
        exit;
        }
    	$cats = D('cat');
    	$cats= $cats->select();
    	// exit();
    	$this->assign('cat',$cats);
    	if(!IS_POST){
    	$this->display();
    	}else{
    	$tra = D('travel');
    	$upload = new \Think\Upload;//实例化上传类
    	$upload->exts = array('jpg','png','gif','jpeg');//选择上传的类型
    	$upload->rootPath = './Public/upload/';//设置文件上传保存的根目录
    	$load = $upload->upload();
    	if (!$load) {
//    		var_dump($upload->getError());
    	}else{
    		// echo "<pre>";
    		// var_dump($load);
    		// exit();
    		$_POST['tra_thumb'] = '/Public/upload/'.$load['tra_thumb']['savepath'].$load['tra_thumb']['savename'];//入库文件存储的路径
    	}
    	if(!$tra->create()){
    		echo $tra->getError();
    	}else{
    		$tra->add();
    		$this->redirect('Admin/Travel/up');
    	}
    }      
    }

    public function tralist(){
        if(check_cookie() !== 1){
        $this->redirect('admin/login/login');
        exit;
        }
    	$tra = D('travel');
    	$tras = $tra->join('cat  ON  travel.cat_id = cat.cat_id ')->field('travel.*,cat_name')->select();
    	// var_dump($tras);
    	// exit();
    	$this->assign('tra',$tras);
    	$this->display();
    }

    public function tradel(){
         if(check_cookie() !== 1){
        $this->redirect('admin/login/login');
        exit;
        }
    	$traid = I('get.tra_id');
    	// var_dump($traid);
    	$tra = D('travel');
    	$rs = $tra->delete($traid);
    	if($rs){

			$traxcModel=M('traxc');
			$traxcModel->where("tra_id=$traid")->delete();

			$dateModel=M('date');
			$dateModel->where("tra_id=$traid")->delete();

    		$this->success('删除成功!',U('Admin/Travel/tralist'));
    	}else{
    		$this->error('删除失败');
    	}
    }

    public function traedit(){
         if(check_cookie() !== 1){
        $this->redirect('admin/login/login');
        exit;
        }
    	 $tra = D('travel');
    	 $cat = D('cat');
    	 $traid = I('get.tra_id');
    	 if (!IS_POST) {
    	 // var_dump($traid);
    	 $tras = $tra->find($traid);
    	 $this->assign('cat',$cat->select());
    	 $this->assign('t',$tras);
    	 $this->display();
    	 }else{
    	 	$rs = $tra->where('tra_id='.$traid)->save($_POST);
    	 	if($rs){
    	 		$this->success('修改成功!','/index.php/Admin/Travel/tralist');
    	 	}else{
    	 		$this->error('修改失败');
    	 	}
    	 }
    }


    public function up(){
         if(check_cookie() !== 1){
        $this->redirect('admin/login/login');
        exit;
        }
        if(!IS_POST){
        $tra = D('travel');
        $tras = $tra->order('tra_id desc')->find();
        $this->assign('tra',$tras);
        $this->display();
        } else{
        $traxcModel=M('traxc');
        $traxcModel->create();
        if($traxcModel->add()){
            $this->success('添加成功',U('Admin/Travel/tralist'));
           
        }else{
            $this->error('添加失败');
        }
        }
    }
}


