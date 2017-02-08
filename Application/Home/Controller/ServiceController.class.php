<?php 
namespace Home\Controller;
use Think\Controller;
class ServiceController extends Controller{
    public function service(){
//    	//查询出所有国家，遍历在模版上
//    	$nations = D('country')->select();
//    	$this->assign('nation',$nations);
//    	//查询国家下面的城市并遍历在模版上
//    	$g_id = I('coun_id');
//    	$city = D('city');
//    	if(empty($g_id)){
//        //此处多于，因为地址栏上始终有$coun_id
//    	$citys = $city->select();
//    	$this->assign('citys',$citys);
//    	}else{
//    	$citys = $city->where("coun_id=$g_id")->select();
//    	$this->assign('citys',$citys);
//    	}
//
//    	//查询城市下面的服务类型，并遍历在模版上
//    	$city_id = I('city_id');
//    	$type = D('type');
//    	if(empty($city_id)){
//            $types = $type->limit(0,6)->select();
//            $this->assign('types',$types);
//    	}else{
//    		//接收到地址栏参数进行查询
//    		$coun_id = I('coun_id');
//            $types = $type->where("city_id=$city_id and coun_id=$coun_id")->select();
//            //print_r($types);
//            $this->assign('types',$types);
//    	}
//
//    	//查询出某个国家，某个城市下面的某个类型下面的具体内容
//
//    	$type_id = I('type_id');
//    	$city_id = I('city_id');
//    	if(empty($type_id)){
//            //如果地址栏上没有type_id,默认从service表里取前6条展示在模版上
//            $services = D('service')->select();
//            $this->assign('service',$services);
//    	}else{
//            $service = D('service');
//
//            $count = $service->where("t_id=$type_id and city_id=$city_id")->count();
//            $Page = new \Think\Page($count,3);
//            $show = $Page->show();
//            $services = $service->where("t_id=$type_id and city_id=$city_id")->limit($Page->firstRow.','.$Page->listRows)->select();
//         	$this->assign('service',$services);
//            $this->assign('page',$show);
//    	}
//            $this->display();



        $countrys = D('country')->select();
        $citys=D('city')->select();
        $types=D('type')->group('t_name')->select();
        $services=D('service')->select();

        $coun_id=I('coun_id');
        $city_id=I('city_id');
        $t_n=I('t_name');
        $t_id=M('type')->where("t_name='$t_n'")->select();
        $t_idol=M('type')->where("coun_id='$coun_id' and city_id='$city_id' and t_name='$t_n'")->find();
        $t_ido=$t_idol['t_id'];
//        var_dump($t_ido);
//        exit;
        $ts='';
        foreach($t_id as $t){
            $ts.=$t['t_id'].',';

        }
            $ts=rtrim($ts,',');
//        var_dump($ts);
//        exit();


        if(!empty($coun_id)){
            $citys=D('city')->where("coun_id=$coun_id")->select();
//            $t=M('type')->where("coun_id=$coun_id")->field('t_name')->group('t_name')->select();
//            var_dump($t);
//            exit();
            $types=D('type')->where("coun_id=$coun_id")->group('t_name')->select();
            $services=D('service')->where("coun_id=$coun_id")->select();
        }
        if (!empty($city_id)){
            $types=D('type')->where("city_id=$city_id")->select();
            $services=D('service')->where("city_id=$city_id")->select();
        }
        if(!empty($t_n) ){
            $services=D('service')->where("t_id in ($ts)")->select();
        }
//        if(!empty($coun_id)&&!empty($city_id)&&!empty($t_n)){
//            $services=D('service')->where("t_id=$t_ido and city_id=$city_id")->select();
////            var_dump($services);
////            exit();
//        }


        $this->assign('nation',$countrys);
        $this->assign('citys',$citys);
        $this->assign('types',$types);
        $this->assign('service',$services);
        $this->display();
        }

        public function seratts(){
            //接收查出附属表数据遍历在模版上
            $ser_id = I('get.ser_id');
            $att = D('seratts');
            $atts = $att->find($ser_id);
            //print_r($atts);
            $this->assign('atts',$atts);
            $this->display();
        }

        /**
        public function plan(){
            $planModel = D('plan');
            print_r($planModel);
            //print_r($_POST);
            exit;
            if($planModel->create()){
                $planModel->add();
            }else{
                echo $planModel->getError();
            }

        }
        **/

}
?>	