<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>头部-有点</title>
<link rel="stylesheet" type="text/css" href="/seeworld/Public/admin/css/public.css" />
<script type="text/javascript" src="/seeworld/Public/admin/js/jquery.min.js"></script>
<script type="text/javascript" src="/seeworld/Public/admin/js/public.js"></script>
</head>

<body>
	<!-- 头部 -->
	<div class="head">
		<div class="headL">
			<div style="margin-top: 20px; ">
			<span style="font-size: 50px; color:snow;padding-left: -20px;">SeeWorld</span>
				<span style="font-size:25px; color:snow;">后台管理系统</span>

			</div>
		</div>
		<div class="headR">
			<p class="p1">
			<?php if(check_cookie() == 1): ?>欢迎，
				<?php echo (cookie('adminname')); ?>
			
			</p>
			<p class="p2">
				<!-- 目前木写方法呢，先屏蔽掉 -->
				<!-- <a href="#" class="resetPWD">重置密码</a>&nbsp;&nbsp; -->
				<a href="<?php echo U('Admin/Index/logout');?>" class="goOut" target="_parent">退出</a>
			</p>
			<?php else: ?>
				<a href="<?php echo U('admin/login/login');?>"登录</a><?php endif; ?>>
		</div>

	</div>

	<div class="closeOut">
		<div class="coDiv">
			<p class="p1">
				<span>X</span>
			</p>
			<p class="p2">确定退出当前用户？</p>
			<P class="p3">
				<a class="ok yes" href="#">确定</a><a class="ok no" href="#">取消</a>
			</p>
		</div>
	</div>



</body>
</html>