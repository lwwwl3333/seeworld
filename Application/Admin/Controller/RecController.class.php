<?php
/**
 * Created by PhpStorm.
 * User: whj
 * Date: 16/11/5
 * Time: 09:50
 */
namespace Admin\Controller;

use Think\Controller;
use Think\Image;
use Think\Upload;

class RecController extends Controller
{
    public function artlist()
    {
         if(check_cookie() !== 1){
            $this->redirect('admin/login/login');
            exit;
        }
        $artModel = D('article');
        $count = $artModel->count();// 查询满足要求的总记录数
        $Page = new \Think\Page($count, 5);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        $Page->setConfig('prev', '上一页');
        $Page->setConfig('next', '下一页');
        $Page->setConfig('first', '首页');

        $show = $Page->show();// 分页显示输出
        $articles = $artModel->join('rec ON article.rec_id=rec.rec_id')
            ->limit($Page->firstRow . ',' . $Page->listRows)
            ->select();
        $this->assign('articles', $articles);
        $this->assign('page', $show);// 赋值分页输出
        $this->display();


    }

    public function addrec()
    {   
         if(check_cookie() !== 1){
            $this->redirect('admin/login/login');
            exit;
        }
        if (!IS_POST) {
            $this->display();
        }
        $recModel = D('rec');
        if (!$recModel->create()) {
            exit($recModel->getError());
        } else {

            if ($recModel->add()) {
                //redirect('artlist');
                $this->success('添加文章分类成功', 'artlist', 3);
            } else {
                echo '404';
            }
        }

    }

    public function addart()
    {
         if(check_cookie() !== 1){
            $this->redirect('admin/login/login');
            exit;
        }
        if (!IS_POST) {
            $recModel = M('rec');
            $recs = $recModel->select();
            $this->assign('recs', $recs);
            $this->display();
        } else {
            $artModel = D('article');

            $upload = new Upload();  //实例化上传类
            $upload->maxSize = 3145728;// 设置附件上传大小
            $upload->exts = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
            $upload->rootPath = './';        // 设置上传根目录
            $upload->savePath = 'Public/admin/aimgs/'; // 设置附件上传目录
            $info = $upload->upload();

            if (!$info) {
                $this->error($upload->getError());
            } else {
                $_POST['a_img'] = $info['a_img']['savepath'] .
                    $info['a_img']['savename'];
                // $this->success('上传成功');
                $image=new Image();
                $image->open($info['a_img']['savepath'] .
                    $info['a_img']['savename']);
                // 按照原图的比例生成一个最大为150*150的缩略图并保存为thumb.jpg
                $thumb_path='Public/admin/aimgs/thumb/'.$info['a_img']['savename'];
                $image->thumb(150, 150)->save($thumb_path);
//                $_POST['a_img']=$thumb_path;

            }

            if (!$artModel->create()) {
                exit($artModel->getError());
            } else {
                if ($artModel->add()) {
                    $this->success('添加文章成功', 'artlist', 3);
                } else {
                    echo '404';
                }
            }
        }
    }

    public function editart()
    {   
         if(check_cookie() !== 1){
            $this->redirect('admin/login/login');
            exit;
        }
        $a_id = I('get.a_id');
        if (!IS_POST) {
            $recModel = M('rec');
            $recs = $recModel->select();


            $artModel = M('article');
            $article = $artModel->where("a_id=$a_id")->find();

            $this->assign('a_id', $a_id);

            $this->assign('recs', $recs);

            $this->assign('article', $article);
            $this->display();
        } else {
            $artModel = D('article');

            $upload = new Upload();  //实例化上传类
            $upload->maxSize = 3145728;// 设置附件上传大小
            $upload->exts = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
            $upload->rootPath = './';        // 设置上传根目录
            $upload->savePath = 'Public/admin/aimgs/'; // 设置附件上传目录
            $info2 = $upload->upload();
            
            if (!$info2) {
                $this->error($upload->getError());
            } else {
                $_POST['a_img'] = $info2['a_img']['savepath'] .
                    $info2['a_img']['savename'];
                // $this->success('上传成功');
                $image=new Image();
                $image->open($info2['a_img']['savepath'] .
                    $info2['a_img']['savename']);
                // 按照原图的比例生成一个最大为150*150的缩略图并保存为thumb.jpg
                $thumb_path='Public/admin/aimgs/thumb/'.$info2['a_img']['savename'];
                $image->thumb(150, 150)->save($thumb_path);
//                $_POST['a_img']=$thumb_path;

            }



            if (!$artModel->create()) {
                exit($artModel->getError());
            } else {

                if ($artModel->where("a_id=$a_id")->save()) {
                    $this->success('修改文章成功', U('Admin/Rec/artlist'), 3);
                } else {
                    echo '404';
                }
            }

        }
    }

    public function delart()
    {   
         if(check_cookie() !== 1){
            $this->redirect('admin/login/login');
            exit;
        }
        $a_id = $_GET['a_id'];
        $artModel = M('article');
        $artModel->where("a_id=$a_id")->delete();
        
    }

}