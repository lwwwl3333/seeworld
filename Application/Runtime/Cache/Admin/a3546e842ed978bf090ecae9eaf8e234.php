<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>会员注册-有点</title>
<link rel="stylesheet" type="text/css" href="/seeworld/Public/admin/css/css.css" />
<script type="text/javascript" src="/seeworld/Public/admin/js/jquery.min.js"></script>
</head>
<body>
	<div id="pageAll">
		<div class="pageTop">
			<div class="page">
				<img src="/seeworld/Public/admin/img/coin02.png" /><span><a href="<?php echo U('Admin/Index/main');?>">首页</a>&nbsp;-&nbsp;<a
					href="<?php echo U('Admin/Rec/artlist');?>">独家推荐</a>&nbsp;-</span>&nbsp;分类添加
			</div>
		</div>
		<div class="page ">
			<!-- 会员注册页面样式 -->
			<form action="<?php echo U('Admin/Rec/addrec');?>" method="post">
			<div class="banneradd bor">

				<div class="baTopNo">
					<span>分类添加</span>
				</div>
				<div class="baBody">

					<div class="bbD">

						分类名称：<input type="text" class="input3" name="rec_name"/>

					</div>
					<div class="bbD"><div class="bbD">分类简介:</div>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<textarea name="rec_content"  style="width: 500px;height: 200px;padding-top: 15px;"
									   class="input3"></textarea>
					</div>
					<div class="bbD">
						<p class="bbDP">
							<input class="btn_ok btn_yes" type="submit" value="添加">
							 <a class="btn_ok btn_no" href="<?php echo U('Admin/Rec/artlist');?>">返回</a>
						</p>
					</div>
				</div>
			</div>
			</form>
			<!-- 会员注册页面样式end -->
		</div>
	</div>
</body>
</html>