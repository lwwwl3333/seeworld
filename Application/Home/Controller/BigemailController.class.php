<?php

/**
 *Author:duxingfeng;
 *Email:425100867@qq.com;
 *Opinion：邮件群发
 *Date:2015-8-25  15:00;
 */
namespace Home\Controller;

use Think\Controller;

class BigemailController extends Controller {
	public function index() {

		$mail = "1242482124@qq.com";
		//这是群发，数据库里面所以得都会发送到
//		$map = 1;
//		$info = M ( 'user' )->where ( $map )->getField ( 'email', true );


		//这是一个指给注册用户发送的

		$title = "在线注册";
		
		$content = "恭喜您注册成功,请牢记您的密码,";

		$from = "18810758459@163.com"; // 修改为你的发送邮箱

		$status = send_mail ( $title, $content, $from ,$mail);
		if($status==1){
				$success[]=$mail;
			}else{
				$error[]=$mail;
			}



		$this->assign ( 'success', $success);
		$this->assign ( 'error', $error );
		$this->assign ( 'sum', 1 );    //这是单发的
		//$this->assign ( 'sum', ($k+1) );   //数组是从0开始的所以加一
		$this->display ();
	}



}

?>
