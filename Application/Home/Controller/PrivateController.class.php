<?php
/**
 * Created by PhpStorm.
 * User: whj
 * Date: 2016/11/29
 * Time: 22:01
 */
namespace Home\Controller;
use Think\Controller;
class PrivateController extends Controller{
    public function private1(){
        $cityModel=M('city');
        $citys=$cityModel->join("inter on city.city_id=inter.city_id")->group('city.city_id')->select();
        $this->assign('citys',$citys);
        $this->display();
    }
    public function city(){
        $city_id=$_GET['city_id'];
        $cityModel=M('city');
        $city=$cityModel->where("city_id=$city_id")->find();
        $info=htmlspecialchars_decode($city['city_info']);
        $city['city_info']=$info;
        echo json_encode($city);
    }
    public function inters(){
        $city_id=$_GET['c_id'];
        $interModel=M('inter');
        $inters=$interModel->where("city_id=$city_id")->select();
        echo json_encode($inters);
    }
    public function inter(){
        $i_id=$_GET['i_id'];
        $interModel=M('inter');
        $inter=$interModel->where("i_id=$i_id")->find();
        echo json_encode($inter);
    }


    public function private2(){
        $this->display();
    }
    public function getJd(){
        $city_id=$_GET['city_id'];
        $key0=$_GET['intro_name_0'];
        $key1=$_GET['intro_name_1'];
        $jdModel=M('jingdian');
        if($key1==''){
            $jd=$jdModel->where("city_id=$city_id and i_name like '%$key0%'")->select();
        }else{
            $jd=$jdModel->where("city_id=$city_id and (i_name like '%$key0%' or i_name like '%$key1%' )")->select();
        }

        echo json_encode($jd);
    }
    public function getHotel(){
        $city_id=$_GET['city_id'];
        $serModel=M('service');
        $hotels=$serModel->where("city_id=$city_id and t_id=4")->select();
        echo json_encode($hotels);

    }
    public function showJd(){
        $j_id=$_GET['j_id'];
        $jdModel=M('jingdian');
        $jd=$jdModel->where("j_id=$j_id")->find();
        $j_intro=htmlspecialchars_decode($jd['j_intro']);
        $jd['j_intro']=$j_intro;
        echo json_encode($jd);
    }
    public function showHotel(){
        $ser_id=$_GET['ser_id'];
        $seraModel=M('seratts');
        $hotel=$seraModel->where("ser_id=$ser_id")->find();
        $ser_js=htmlspecialchars_decode($hotel['ser_js']);
        $hotel['ser_js']=$ser_js;
        echo json_encode($hotel);
    }
}