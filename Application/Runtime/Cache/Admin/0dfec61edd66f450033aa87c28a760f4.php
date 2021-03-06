<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html lang="en" class="no-js">

<head>

<meta charset="utf-8">
<title>html5响应式后台登录界面模板</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">

<!-- CSS -->

<link rel="stylesheet" href="/seeworld/Public/log/css/supersized.css">
<link rel="stylesheet" href="/seeworld/Public/log/css/login.css">
<link href="/seeworld/Public/log/css/bootstrap.min.css" rel="stylesheet">

<script src="/seeworld/Public/log/js/jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="/seeworld/Public/log/js/jquery.form.js"></script>
<script type="text/javascript" src="/seeworld/Public/log/js/tooltips.js"></script>
<script type="text/javascript" src="/seeworld/Public/log/js/login.js"></script>
</head>

<body>

<div class="page-container">
	<div class="main_box">
		<div class="login_box">
			<div class="login_logo">
				<img src="/seeworld/Public/log/images/logo.jpg" >
			</div>
		
			<div class="login_form">
				<form action="<?php echo U('admin/login/checklogin');?>" id="form" method="post">
					<div class="form-group">
						<label for="j_username" class="t">用户名：</label> 
						<input id="adminname" value="" name="adminname" type="text" class="form-control x319 in" 
						autocomplete="off">
					</div>
					<div class="form-group">
						<label for="j_password" class="t">密　码：</label> 
						<input id="password" value="" name="password" type="password" 
						class="password form-control x319 in">
					</div>
			
					<div class="form-group space">
						<label class="t"></label>　　　
						<input type="submit"  id="btn" 
						class="btn btn-primary btn-lg" value="登录">

					
						<input type="reset" value="&nbsp;重&nbsp;置&nbsp;" class="btn btn-default btn-lg">
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<!-- Javascript -->

<script src="/seeworld/Public/log/js/supersized.3.2.7.min.js"></script>
<script src="/seeworld/Public/log/js/supersized-init.js"></script>
<script src="/seeworld/Public/log/js/scripts.js"></script>
<script>
	jQuery(function($){

    $.supersized({

        // Functionality
        slide_interval     : 4000,    // Length between transitions
        transition         : 1,    // 0-None, 1-Fade, 2-Slide Top, 3-Slide Right, 4-Slide Bottom, 5-Slide Left, 6-Carousel Right, 7-Carousel Left
        transition_speed   : 1000,    // Speed of transition
        performance        : 1,    // 0-Normal, 1-Hybrid speed/quality, 2-Optimizes image quality, 3-Optimizes transition speed // (Only works for Firefox/IE, not Webkit)

        // Size & Position
        min_width          : 0,    // Min width allowed (in pixels)
        min_height         : 0,    // Min height allowed (in pixels)
        vertical_center    : 1,    // Vertically center background
        horizontal_center  : 1,    // Horizontally center background
        fit_always         : 0,    // Image will never exceed browser width or height (Ignores min. dimensions)
        fit_portrait       : 1,    // Portrait images will not exceed browser height
        fit_landscape      : 0,    // Landscape images will not exceed browser width

        // Components
        slide_links        : 'blank',    // Individual links for each slide (Options: false, 'num', 'name', 'blank')
        slides             : [    // Slideshow Images
                                 {image : '/seeworld/Public/log/images/backgrounds/0.jpg'},
                                 {image : '/seeworld/Public/log//images/backgrounds/1.jpg'},
                                 {image : '/seeworld/Public/log//images/backgrounds/2.jpg'},
								 {image : '/seeworld/Public/log//images/backgrounds/3.jpg'}
                       ]

    });

});

</script>

<script src="http://libs.baidu.com/jquery/2.1.1/jquery.min.js"></script>
<script>


		$('#form').submit(function(){
			if($('#adminname').val() == ''){
				show_err_msg('尊姓大名？');
				$('#adminname').focus();
				return false;

			}else if($('#password').val() == ''){
				show_err_msg('密码啊大侠？');r
				$('#password').focus();
				return false;

			}
			// else{
			// 	show_msg('登录成功咯！');
			// }

		});

</script>
</body>
</html>