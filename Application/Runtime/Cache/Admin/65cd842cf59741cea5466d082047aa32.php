<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>话题添加-有点</title>
<link rel="stylesheet" type="text/css" href="/seeworld/Public/Admin/css/css.css" />
<script type="text/javascript" src="/seeworld/Public/Admin/js/jquery.min.js"></script>

	<!--编辑器css js-->
	<link rel="stylesheet" href="/seeworld/Public/wangEditor-2.1.22/dist/css/wangEditor.min.css">
	<script src="/seeworld/Public/wangEditor-2.1.22/dist/js/lib/jquery-2.2.1.js"></script>
	<script src="/seeworld/Public/wangEditor-2.1.22/dist/js/wangEditor.min.js"></script>
</head>
<body>
	<div id="pageAll">
		<div class="pageTop">
			<div class="page">
				<img src="/seeworld/Public/Admin/img/coin02.png" /><span><a href="<?php echo U('Admin/Index/main');?>">首页</a>&nbsp;-
					</span>城市添加
			</div>
		</div>
		<div class="page ">
			<!-- 上传广告页面样式 -->
			<form action="<?php echo U('Admin/Service/addcity');?>"   method="post" enctype="multipart/form-data">
			<div class="banneradd bor">
				<div class="baTopNo">
					<span>城市添加</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a style="font-size:17px;" href="<?php echo U('Admin/Service/addtype');?>">点击添加类型</a>
				</div>
				<div class="baBody">
					
					
					<div class="bbD">
						请选择国家：
						<select name = 'coun_id'class="input3">
						
						<?php if(is_array($nations)): foreach($nations as $key=>$nation): ?><option  value="<?php echo ($nation['coun_id']); ?>" >&nbsp;&nbsp;&nbsp;&nbsp;<?php echo ($nation['coun_name']); ?></option><?php endforeach; endif; ?>
						</select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<div class="bbD">
		                添加城市：<input type="text"  name = 'city_name' class="input3" />
						</div>
					</div>

					<div style="margin-top: 20px;">
						城市插图：<input type="file" class="input3" name="city_src"/>
					</div>

					<div class="bbD">
						城市简介：
						<div class="btext" style="width:80%">
							<textarea id='city_info' name="city_info"
									  style="height:400px;">
							</textarea>
						</div>
					</div>

					<div class="bbD">
						<p class="bbDP">
							<input type="submit" name="" value="确认提交" style="width:120px;height:40px;position:relative;left:97px;" >
						</p>
					</div>
				</div>
			</div>
            </form>
			<!-- 上传广告页面样式end -->
		</div>
	</div>
</body>
<!--实例化编辑器js-->
<script type="text/javascript">
	var editor = new wangEditor('city_info');
	// 上传图片（举例）
	editor.config.uploadImgUrl = "<?php echo U('Admin/Upload/upload5');?>"; //传到upload控制器异步处理图片上传
	editor.config.uploadImgFileName = 'pic'; //相当于《input type=file》的name
	editor.create();
</script>
</html>