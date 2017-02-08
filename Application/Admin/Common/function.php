<?php 

// 公共函数检测cookie是否正确
function check_cookie (){
	if(md5(cookie('adminname').C('salt')) === cookie('coode')){
		return 1;
	}else{
		return 0;
	}
}