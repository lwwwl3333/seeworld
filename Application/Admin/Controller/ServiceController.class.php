<?php 
namespace Admin\Controller;
use Think\Controller;
use Think\Upload;
class ServiceController extends Controller{
        public function serattsadd(){
            if(check_cookie() !== 1){
            $this->redirect('admin/login/login');
            exit;
            }
            //服务附属表里有两个字段存在服务表里，可以在服务表添加完成后从服务表再查出来
            $ser_id = I('ser_id');
            $service = D('service')->find($ser_id);
            //print_r($service);
            //exit;
            //查出数据后先将ser_id和ser_name两个字段写入seratts表里
            $atts = D('seratts');
            //print_r($atts);s
//            $atts->ser_id  = $service['ser_id'];
//            $atts->ser_name = $service['ser_name'];
//            $atts->ser_price = $service['ser_price'];
            //$atts->ser_img  = $service['ser_thumb'];
//            //注意还需要保存图片，但与缩略图大小不一样，因此需要重新生成缩略图
//            $ori_img = $service['ori_img'];
//            $image = new \Think\Image();
//             //打开原图保存路径
//            $image->open($ori_img);
//            //缩略图保存路径
//            $len = strlen($ori_img);
//            $str = substr($ori_img,2-$len,$len-6);
//            $str1 = strrchr($ori_img,'.');
//            //生成新的缩略图路径$serimg
//            $serimg = $str.'hehe'.$str1;
//            //保存缩略图，缩略图要多大
//            $image->thumb(450,338)->save($serimg);
//            $atts->ser_img = $serimg;
            $row['ser_id'] = $service['ser_id'];
            $row['ser_name'] = $service['ser_name'];
            $row['ser_img'] = $service['ori_img'];
            $row['ser_price'] = $service['ser_price'];
            $row['ser_pos']=$service['ser_pos'];
            if($atts->create($row)){
                $atts->add();
                $this->redirect('Admin/Service/serlist');
            }else{
                echo $atts->getError();
            }    
        }
        
        public function addnation(){
            if(check_cookie() !== 1){
            $this->redirect('admin/login/login');
            exit;
            }
            if(empty($_POST)){
                $this->display();
            }else{
                $nations = D('country');
                //print_r($_POST);

                if($nations->create()){
                    $nations->add();
                    $this->redirect('Admin/Service/addnation');
                }else{
                    var_dump($nations->getError()) ;
                }
            }   
        }
       

        public function addcity(){
            if(check_cookie() !== 1){
            $this->redirect('admin/login/login');
            exit;
            }
            //先查出国家遍历在模版下拉框里
            $nations = D('country')->select();
            //print_r($nations);
            $this->assign("nations",$nations);
            if(empty($_POST)){
                $this->display();
            }else{
                //print_r($_POST);
                //post提交过来的数据保存
                $city = D('city');

                $upload = new \Think\Upload();  //实例化上传类
                $upload->maxSize = 3145728;// 设置附件上传大小
                $upload->exts = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
                $upload->rootPath = './';        // 设置上传根目录
                $upload->savePath = 'Public/admin/cimgs/'; // 设置附件上传目录
                $info2 = $upload->upload();
                if (!$info2) {
                    $this->error($upload->getError());
                } else {
                    $_POST['city_src'] = $info2['city_src']['savepath'] .
                        $info2['city_src']['savename'];
                }
                if($city->create()){
                    $city->add();
                    $this->redirect("Admin/Service/addcity");
                }else{
                    echo $city->getError();
                }    
            }
        }

        public function addtype(){
            if(check_cookie() !== 1){
            $this->redirect('admin/login/login');
            exit;
            }
            //查出所有国家的数据遍历再模版上
            $nations = D('country')->select();
            //print_r($nations);
            $this->assign('nations',$nations);
            $citys = D('city')->select();
            //print_r($citys);
            $this->assign('citys',$citys);
            $types = D('type');
            if(empty($_POST)){
                $this->display();
            }else{
                if($types->create()){
                    $types->add();
                    $this->redirect('Admin/Service/addtype');
                }else{
                    echo $types->getError();
                }
            }        
        }
         //后期添加的新模版,服务列表页
        public function serlist(){
            if(check_cookie() !== 1){
            $this->redirect('admin/login/login');
            exit;
            }
            //从数据库里查出数据展示在模版上
            $services = D('service');
            $lists = $services->select();
            //print_r($lists);
            $this->assign('lists',$lists);
            $this->display(); 
        }

        //与serviceadd重复
        public function seradd(){
             if(check_cookie() !== 1){
            $this->redirect('admin/login/login');
            exit;
            }
            //先将城市全部查出来，遍历在模版下拉框里
        $citys = D('city')->select();

        $this->assign('citys',$citys);
            $types=M('type')->select();
            $this->assign('types',$types);

        if(empty($_POST)){
            $this->display();
        }else{
            //数据不为空，接收数据
            //保存图片上传数据
            $service = D('service');
            //实例化上传类
            $upload = new \Think\Upload();
            //调用upload()类里的方法和属性
            $upload->maxSize = 3145728;
            $upload->exts = array('jpg','png','jpeg','gif');
            $upload->rootPath = './Public/upload/';
            //调用upload()方法后图片就已经保存成功
            $info = $upload->upload();
            //print_r($info);
            if(!$info){
                var_dump($upload->getError()) ;
            }else{
                //要生成缩略图，必须先找到原图的保存路径,但数据库中没有这个字段，可以不保存
                $ori_path = 'Public/upload/'.$info['ser_thumb']['savepath'].$info['ser_thumb']['savename'];
                //实例化image类，制缩略图并保存
                $image = new \Think\Image();
                //打开原图保存路径
                $image->open($ori_path);
                //缩略图保存路径
                $thumb = 'Public/upload/thumb/'.$info['ser_thumb']['savename'];
                //保存缩略图，缩略图要多大
                $image->thumb(298,224)->save($thumb);
                $_POST['ori_img'] = $ori_path;
                $_POST['ser_thumb'] = $thumb;
                //print_r($image);
                }
               
            if(!$service->create()){
                echo $service->getError();
            }else{

                //print_r($_POST);
//                foreach($_POST['inter'] as $int){
//                    static $inter;
//                    $inter.=$int;
//                }
//                $service->inter=$inter;
                $service->add();
                $this->redirect('Admin/Service/seradd');
            }
        }
    }

        public function attsintro(){
             if(check_cookie() !== 1){
            $this->redirect('admin/login/login');
            exit;
            }
            //首先要获取具体服务的id，从而确定是谁的评论
            $atts = D('seratts')->select();
            $this->assign('atts',$atts);
            if(empty($_POST)){
                $this->display();
            }else{
                print_r($_POST);
                $atts = D('seratts');
                if($atts->create()){
                    $atts->save();
                    $this->redirect('Admin/Service/serlist');
                }else{
                    echo  $atts->getError();
                }
            }
        }

        public function editser(){
             if(check_cookie() !== 1){
            $this->redirect('admin/login/login');
            exit;
            }
            //先查出所有数据遍历在下拉框里
            $citys = D('city')->select();
            $this->assign('citys',$citys);
            if(!$_POST){
                $ser_id = I('get.ser_id');
                $service = D('service')->find($ser_id);
                //print_r($service);
                $this->assign('sers',$service);
                $this->display();
            }else{
                //修改图片,其实就等同于在上传一次图片，产生一个新的图片地址，下一次直接引用该图片地址
                //数据不为空，接收数据
                //保存图片上传数据
                $service = D('service');
                //实例化上传类
                $upload = new \Think\Upload();
                //调用upload()类里的方法和属性
                $upload->maxSize = 3145728;
                $upload->exts = array('jpg','png','jpeg','gif');
                $upload->rootPath = './Public/upload/';
                //调用upload()方法后图片就已经保存成功
                $info = $upload->upload();
                //print_r($info);
                if(!$info){
                    var_dump($upload->getError()) ;
                }else{
                    //要生成缩略图，必须先找到原图的保存路径,但数据库中没有这个字段，可以不保存
                    $ori_path = './Public/upload/'.$info['ser_thumb']['savepath'].$info['ser_thumb']['savename'];
                    //实例化image类，制缩略图并保存
                    $image = new \Think\Image();
                    //打开原图保存路径
                    $image->open($ori_path);
                    //缩略图保存路径
                    $thumb = 'Public/upload/thumb/'.$info['ser_thumb']['savename'];
                    //保存缩略图，缩略图要多大
                    $image->thumb(298,224)->save($thumb);
                    $_POST['ori_img'] = $ori_path;
                    $_POST['ser_thumb'] = $thumb;
                    //print_r($image);
                    }
                    //print_r($_POST);
                    if(!$service->create()){
                        echo $service->getError();
                    }else{ 
                        $service->save(); 
                        $this->redirect('Admin/Service/serlist');
                    }
            }    
        }

        public function delser(){
            if(check_cookie() !== 1){
            $this->redirect('admin/login/login');
            exit;
            }
            $ser_id = I('get.ser_id');
            $service = D('service');
            $service -> where("ser_id = $ser_id")->delete();
            $seratts = D('seratts');
            $seratts->where("ser_id = $ser_id")->delete();
            $this->redirect('Admin/Service/serlist');
        }
        
    }






 ?>