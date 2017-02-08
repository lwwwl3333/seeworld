<?php
namespace Admin\Controller;
use Think\Controller;

class LunboController extends Controller {
    public function lunboadd(){
         if(check_cookie() !== 1){
                    $this->redirect('admin/login/login');
                    exit;
                }

    	if (I()) {
    		$lunbos = D("lunbo");
	    	$upload = new \Think\Upload();//实例化上传类
	    	$upload->exts = array('jpg','jpeg','png','gif');
	    	$upload->rootPath = 'Public/home/upload/attached/thumb/';//设置上传根目录(自动生成Y-m-d的子目录)
	    	$info = $upload->upload();
	    	if (!$info) {
	    		$this->error('请选择图片!','',2);
	    	}else{
	    		// var_dump($info);
	    		// exit;
	    		$_POST['lun_path'] = '/Public/Home/upload/attached/thumb/'.$info['pic']['savepath'].$info['pic']['savename'];
		    	if (!$lunbos->create()['lun_name']) {
		    		$this->error('请填写图片名称!','',2);

		    	}elseif($lunbos->create()['cat_id'] === ""){
		    		$this->error('请选择栏目!','',2);
		    		
		    	}else{
		    		$lunbos->add();
		    		$this->success('图片上传成功!','',2);
		    		exit;
		    	}

	    	}
    	}

    	// 显示旅游类
 		$cats = M('cat');
 		$cats = $cats->field('cat_id,cat_name')->select();
 		$this->assign('cat',$cats);
    	$this->display();
    }

    public function lunbolist(){
         if(check_cookie() !== 1){
            $this->redirect('admin/login/login');
            exit;
        }

    	$lunbos = D('lunbo');
    	$lunbos = $lunbos->join('cat  ON  lunbo.cat_id = cat.cat_id ')->field('lunbo.*,cat_name')->order('lun_id desc')->select();
    	// var_dump($lunbos);
    	// exit;
    	$this->assign('lunbos',$lunbos);
        $this->display();
    }
    public function lunboedit($lun_id){
            if(check_cookie() !== 1){
            $this->redirect('admin/login/login');
            exit;
            }

	    	$lunbos = D('lunbo');
    	if (!IS_POST) {
	 		$cats = M('cat');
	    	$lunbos = $lunbos->find($lun_id);
	    	$this->assign('lunbos',$lunbos);
	    	// 显示旅游类
	 		$cats = $cats->field('cat_id,cat_name')->select();
	 		$this->assign('cat',$cats);
    		$this->display();
    	}else{
    		$lunboup = I();
    		$row = [];
    		$row['lun_name'] = $lunboup['lun_name'];
    		$row['lun_show'] = $lunboup['lun_show'];
    		$row['cat_id'] = $lunboup['cat_id'];
    		if (!$lunbos->where('lun_id='.$lun_id)->save($row)) {
				echo $this->error('修改失败');
    		}else{
    			echo $this->success('修改成功',U('Admin/lunbo/lunbolist'),2);
    		}
    		
    	}
    }
    public function lunbodel(){
         if(check_cookie() !== 1){
            $this->redirect('admin/login/login');
            exit;
        }
    	$lunbos = D('lunbo');
    	if ($lunbos->delete(I('lun_id'))) {
    		$this->success('删除成功',U('Admin/lunbo/lunbolist'),2);
    	}else{
    		$this->error('删除失败','',2);
    	}
    }


}