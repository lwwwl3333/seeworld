<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>话题添加-有点</title>
<link rel="stylesheet" type="text/css" href="/seeworld/Public/Admin/css/css.css" />
<script type="text/javascript" src="/seeworld/Public/Admin/js/jquery.min.js"></script>
</head>
<body>
	<div id="pageAll">
		<div class="pageTop">
			<div class="page">
				<img src="/seeworld/Public/Admin/img/coin02.png" /><span><a href="<?php echo U('Admin/Index/main');?>">首页</a>&nbsp;-
					</span>国家添加
			</div>
		</div>
		<div class="page ">
			<!-- 上传广告页面样式 -->
			<form action="<?php echo U('Admin/Service/addnation');?>"   method="post">
			<div class="banneradd bor">
				<div class="baTopNo">
					<span>国家添加</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a style="font-size:16px;" href="<?php echo U('Admin/Service/addcity');?>">点击添加城市</a>
				</div>
				<div class="baBody">
					<div class="bbD">
						添加国家：<input type="text"  name = 'coun_name' class="input3" />
					</div>
					<br>
					<br>
					<div class="bbD">
						<p class="bbDP">
							<input type="submit" name="" value="确认提交" style="width:120px;height:40px;position:relative;left:80px;" >
						</p>
					</div>
				</div>
			</div>
            </form>
			<!-- 上传广告页面样式end -->
		</div>
	</div>
</body>
</html>