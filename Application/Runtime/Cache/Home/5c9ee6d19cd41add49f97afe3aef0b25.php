<?php if (!defined('THINK_PATH')) exit();?><!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Trendy Tab Login Form Flat Responsive Widget Template :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Trendy Tab Login Form template Responsive, Login form web template,Flat Pricing tables,Flat Drop downs  Sign up Web Templates, Flat Web Templates, Login sign up Responsive web template, SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="/seeworld/Public/home/css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- web font -->
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'><!--web font-->
<!-- //web font -->
<!-- js -->
<script src="/seeworld/Public/home/js/jquery.min.js"></script>
<script src="/seeworld/Public/home/js/easyResponsiveTabs.js" type="text/javascript"></script>
<!-- //js -->
</head>
<body>
	<!-- main -->
	<div class="main">
		<h1>Trendy Tab Login Form</h1>
		<div class="login-form">
			<div class="sap_tabs w3ls-tabs">
				<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
					<ul class="resp-tabs-list">
						<li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span>Login</span></li> 
						<li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><label>/</label><span>Sign up</span></li>
					</ul>	


					<div class="clear"> </div>
					<div class="resp-tabs-container">
						<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
							<div class="login-agileits-top"> 
								<form action="<?php echo U('Home/User/login');?>" method="post" name="formuser">
									<p>User Name </p>
									<input type="text" name="username" required=""/>
									<p>Password</p>
									<input type="password" name="password" required=""/>
									<p>Captcha</p>
									<input type="text" class="form-control" style= "margin-bottom: 20px; background: white" name="verify" placeholder="请输入验证码." maxlength="4" style="width:35%;" />
									<img src="<?php echo U('Home/User/userVerify');?>" onclick="this.src=this.src+'?'+Math.random();" title="点击更换验证码。" /> <br />
									<input type="checkbox" id="brand2" name="brand" value="1">
									<label for="brand2"><span></span> Remember me ?</label>
									<input type="submit" value="LOGIN">
								</form>  
							</div>
							<div class="login-agileits-bottom"> 
								<p><a href="<?php echo U('Home/Email/index');?>">Forgot password?</a></p>
							</div> 
						</div> 



						<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
							<div class="login-agileits-top sign-up"> 
								<form action="<?php echo U('Home/User/reg');?>" method="post" id="authref">
									<p>User Name </p>
									<input type="text" name="username"  required=""/>
									<p>Your Email </p>
									<input type="text" name="email"  required=""/>
									<p>Your mobile</p>
									<input type="text" name="mobile"  id = "mymobile" required=""/>
									<p>Password</p>
									<input type="password" name="password" placeholder="" required=""/>
									<p>re_Password</p>
									<input type="password" name="re_password" placeholder="" required=""/>
									<p>please input captcha</p>
									<input type="text"  style="width: 130px;" name="captcha" id="icaptcha">
										<button href="" id="but" style="color: white; line-height: 45px; background: #1c4eda; position:relative; top: -60px;right:-250px;">点击发送验证</button>
									<input type="checkbox" id="brand1" name="terms" value="1">
									<label for="brand1"><span></span>I accept the terms Use</label> 
									<input type="submit" value="SIGN UP">
								</form>  
							</div>
						</div>
					</div>							
				</div>	 
			</div> 
			<!-- ResponsiveTabs js -->
			<script type="text/javascript">
				$(document).ready(function () {
					$('#horizontalTab').easyResponsiveTabs({
						type: 'default', //Types: default, vertical, accordion           
						width: 'auto', //auto or any width like 600px
						fit: true   // 100% fit in a container
					});
				});
			</script>
			<!-- //ResponsiveTabs js -->
		</div>	
	</div>	
	<!-- //main -->
	<!-- copyright -->
	<div class="copyright">
		<p> © 2016 Trendy Tab Login Form . All rights reserved | Design by <a href="#" target="_blank">W3layouts</a></p>
	</div>
	<!-- //copyright --> 
</body>

<script src="./jquery.js"></script>

<script>

	//这是提交到数据库之前做的jquery验证
	$('#authref').submit(function(){

		var smcode; //先定义一个smcode的空值
		//验证填写的验证码是否正确
		var yzm = $('#icaptcha').val();
		$.ajax('check_sms/verify/'+yzm,{
			async:false ,
			success:function(msg)
			{
				smcode = msg;
			}
		});

//		alert(smcode);  //测试用的。
		if(smcode != 1)
		{
			alert('验证码输入错误');
			return false;
		}
	});

	//这是一个异步的ajax请求，发送短信
	$('#but').click(function(){
		//mymobile 是输入手机号的input框的id
		var mobile = $('#mymobile').val();
		var patt = /^1(3[0-9]|4[57]|5[0-35-9]|7[01678]|8[0-9])\d{8}$/
		if(!patt.test(mobile) )
		{
			alert('手机号有问题');
			return false;
		}

		//点击一次之后60秒才可以再次点击
		this.disabled = true; //这个方法可以吧点击后的标签作废
		var btn = this;
		var sec = 10; //多少秒后可以再次点击

		var clock = setInterval(function(){
			--sec;
			if(sec >= 0)
			{
				btn.innerHTML = sec+"秒后点击";
			}else
			{
				btn.innerHTML = "获取验证码";
				btn.disabled = false; //恢复作废的标签
				clearInterval(clock); //清除定时器
			}
		}, 1000);

		//把用户输入的手机号请求到短信接口那边。
		$.get('sms/mobile/'+mobile, function(res){
			console.log(res);
		});
		return false;
	});
</script>
</html>