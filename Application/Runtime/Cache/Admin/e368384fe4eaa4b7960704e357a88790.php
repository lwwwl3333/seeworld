<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>添加用户-有点</title>
<link rel="stylesheet" type="text/css" href="/seeworld/Public/Admin/css/css.css" />
<script type="text/javascript" src="/seeworld/Public/Admin/js/jquery.min.js"></script>
</head>
<body>
	<div id="pageAll">
		<div class="pageTop">
			<div class="page">
				<img src="/seeworld/Public/Admin/img/coin02.png" /><span><a href="<?php echo U('Admin/Index/main');?>">首页</a>&nbsp;-&nbsp;<a
					href="<?php echo U('Admin/Cat/catlist');?>">主题栏目</a>&nbsp;-</span>&nbsp;栏目编辑
			</div>
		</div>
		<div class="page ">
			<!-- 会员注册页面样式 -->
			<div class="banneradd bor">
				<div class="baTopNo">
					<span>栏目编辑</span>
				</div>
				<form action="" method="post" accept-charset="utf-8">
				<div class="baBody">
					<div class="bbD">
						&nbsp;&nbsp;&nbsp;栏目名称：<input type="text" class="input3" name="cat_name" value="<?php echo ($cat["cat_name"]); ?>">
					</div>
					<div class="bbD">
<!-- 						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="hidden"
							class="input3" /> -->
					</div>
					<div class="bbD">
						&nbsp;&nbsp;&nbsp;栏目介绍：&nbsp;<textarea name="cat_intro" cols="50" rows="5" ><?php echo ($cat["cat_intro"]); ?>
						</textarea>
					</div>
					<div class="bbD">
						<p class="bbDP">
							<button class="btn_ok btn_yes" href="#">提交</button>
							<a class="btn_ok btn_no" href="<?php echo U('Admin/Cat/catlist');?>">取消</a>
						</p>
					</div>
				</div>
				</form>
			</div>

			<!-- 会员注册页面样式end -->
		</div>
	</div>
</body>
</html>