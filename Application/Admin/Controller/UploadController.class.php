<?php
/**
 * Created by PhpStorm.
 * User: whj
 * Date: 16/11/5
 * Time: 11:45
 */
namespace Admin\Controller;
use Think\Controller;
class UploadController extends Controller{
    public function upload(){
         if(check_cookie() !== 1){
        $this->redirect('admin/login/login');
        exit;
        }
        if(!is_dir('./Public/admin/artimgs/'.date('Y-m-d'))){
           mkdir('./Public/admin/artimgs/'.date('Y-m-d'),0777,true);

        }
        $imgInfo = $_FILES['pic'];
        $oldname = $imgInfo['name'];
        $tmp_name = $imgInfo['tmp_name'];
        $temp = explode(".",$oldname);
        $newname = date('Ymdhis').".".$temp[count($temp)-1];

        move_uploaded_file($tmp_name,"./Public/admin/artimgs/".date('Y-m-d')."/".$newname);
        echo $dir = "http://".getenv('HTTP_HOST')."/seeworld/Public/admin/artimgs/".date('Y-m-d')."/".$newname;
        //echo $dir='__PUBLIC__/images/'.$newname;
    }
    
    
    
    
    public function upload2(){
         if(check_cookie() !== 1){
        $this->redirect('admin/login/login');
        exit;
        }

        if(!is_dir('./Public/admin/tcks/'.date('Y-m-d'))){
            mkdir('./Public/admin/tcks/'.date('Y-m-d'),0777,true);
        }

            $imgInfo = $_FILES['pic'];
            $oldname = $imgInfo['name'];
            $tmp_name = $imgInfo['tmp_name'];
            $temp = explode(".", $oldname);
            $newname = date('Ymdhis') . "." . $temp[count($temp) - 1];

            move_uploaded_file($tmp_name, "./Public/admin/tcks/" . date('Y-m-d') . "/" . $newname);
            echo $dir = "http://" . getenv('HTTP_HOST') .
                "/seeworld/Public/admin/tcks/" . date('Y-m-d') . "/" . $newname;
            //echo $dir='__PUBLIC__/images/'.$newname;


    }
    public function upload3(){
         if(check_cookie() !== 1){
        $this->redirect('admin/login/login');
        exit;
        }
        if(!is_dir('./Public/admin/serimgs/'.date('Y-m-d'))){
            mkdir('./Public/admin/serimgs/'.date('Y-m-d'),0777,true);
        }
        $imgInfo = $_FILES['pic'];
        $oldname = $imgInfo['name'];
        $tmp_name = $imgInfo['tmp_name'];
        $temp = explode(".", $oldname);
        $newname = date('Ymdhis') . "." . $temp[count($temp)-1];
        move_uploaded_file($tmp_name, "./Public/admin/serimgs/" . date('Y-m-d') . "/" . $newname);
        echo $dir = "http://".getenv('HTTP_HOST') . "/seeworld/Public/admin/serimgs/" . date('Y-m-d')."/".$newname;
    }
    public function upload4(){
        if(check_cookie() !== 1){
            $this->redirect('admin/login/login');
            exit;
        }
        if(!is_dir('./Public/admin/jdimgs/'.date('Y-m-d'))){
            mkdir('./Public/admin/jdimgs/'.date('Y-m-d'),0777,true);
        }
        $imgInfo = $_FILES['pic'];
        $oldname = $imgInfo['name'];
        $tmp_name = $imgInfo['tmp_name'];
        $temp = explode(".", $oldname);
        $newname = date('Ymdhis') . "." . $temp[count($temp)-1];
        move_uploaded_file($tmp_name, "./Public/admin/jdimgs/" . date('Y-m-d') . "/" . $newname);
        echo $dir = "http://".getenv('HTTP_HOST') . "/seeworld/Public/admin/jdimgs/" . date('Y-m-d')."/".$newname;
    }
    public function upload5(){
        if(check_cookie() !== 1){
            $this->redirect('admin/login/login');
            exit;
        }
        if(!is_dir('./Public/admin/cityimgs/'.date('Y-m-d'))){
            mkdir('./Public/admin/cityimgs/'.date('Y-m-d'),0777,true);
        }
        $imgInfo = $_FILES['pic'];
        $oldname = $imgInfo['name'];
        $tmp_name = $imgInfo['tmp_name'];
        $temp = explode(".", $oldname);
        $newname = date('Ymdhis') . "." . $temp[count($temp)-1];
        move_uploaded_file($tmp_name, "./Public/admin/cityimgs/" . date('Y-m-d') . "/" . $newname);
        echo $dir = "http://".getenv('HTTP_HOST') . "/seeworld/Public/admin/cityimgs/" . date('Y-m-d')."/".$newname;
    }

}