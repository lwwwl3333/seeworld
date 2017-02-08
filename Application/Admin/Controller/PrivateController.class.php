<?php
/**
 * Created by PhpStorm.
 * User: whj
 * Date: 2016/12/2
 * Time: 20:21
 */
namespace Admin\Controller;
use Think\Controller;
use Think\Image;
use Think\Upload;
class PrivateController extends Controller{
    public function prilist(){

        $this->display();
    }
    public function addpri(){
        if(!IS_POST){
            $cityModel=M('city');
            $citys=$cityModel->select();
            $this->assign('citys',$citys);
            $this->display();
        }else{
            $intModel = D('inter');

            $upload = new Upload();  //实例化上传类
            $upload->maxSize = 3145728;// 设置附件上传大小
            $upload->exts = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
            $upload->rootPath = './';        // 设置上传根目录
            $upload->savePath = 'Public/admin/xqimgs/'; // 设置附件上传目录
            $info = $upload->upload();
            if (!$info) {
                $this->error($upload->getError());
            } else {
                $_POST['i_src'] = $info['i_src']['savepath'] .
                    $info['i_src']['savename'];
            }if (!$intModel->create()) {
                exit($intModel->getError());
            } else {
                if ($intModel->add()) {
                    $this->success('添加分类成功', 'prilist', 3);
                } else {
                    echo '404';
                }
            }
        }

    }
    public function addjd(){
        if(!IS_POST){
            $cityModel=M('city');
            $citys=$cityModel->select();

            $intModel=M('inter');
            $ints=$intModel->select();

            $this->assign('citys',$citys);
            $this->assign('ints',$ints);
            $this->display();
        }else{
            $jdModel = D('jingdian');

            $upload = new Upload();  //实例化上传类
            $upload->maxSize = 3145728;// 设置附件上传大小
            $upload->exts = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
            $upload->rootPath = './';        // 设置上传根目录
            $upload->savePath = 'Public/admin/jdimgs/'; // 设置附件上传目录
            $info = $upload->upload();
            if (!$info) {
                $this->error($upload->getError());
            } else {
                $_POST['j_src'] = $info['j_src']['savepath'] .
                    $info['j_src']['savename'];
            }if (!$jdModel->create()) {
                exit($jdModel->getError());
            } else {
                foreach($_POST['i_name'] as $name){
                    static $names;
                    $names.=$name;
                }
                $jdModel->i_name=$names;
                if ($jdModel->add()) {
                    $this->success('添加景点成功', 'prilist', 3);
                } else {
                    echo '404';
                }
            }
        }

    }
    public function getInt(){
        $city_id=$_GET['city_id'];
        $intModel=M('inter');
        $ints=$intModel->where("city_id=$city_id")->select();
        echo json_encode($ints);

    }
    
    
}