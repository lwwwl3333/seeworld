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
				<img src="/seeworld/Public/Admin/img/coin02.png" /><span><a href="<?php echo U('Admin/Index/index');?>">首页</a>&nbsp;-
					</span>服务添加
			</div>
		</div>
		<div class="page ">
			<!-- 上传广告页面样式 -->
			<form action="<?php echo U('Admin/Service/seradd');?>" method="post" enctype="multipart/form-data" >
			<div class="banneradd bor">
				<div class="baTopNo">
					<span>项目服务添加</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a style="font-size:17px;" href="<?php echo U('Admin/Service/serlist');?>">点击跳转至列表页</a>
				</div>
				<div class="baBody">
					<input type="hidden" name="MAX_FILE_SIZE" value="2097152" />
					<br>
					
					<div class="bbD">
						服务名称：<input type="text" name="ser_name" value="" class="input3">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<br>
						<br>
                       请选择城市：
						<select name = 'city_id'  class="input3">
						<option  value="0">&nbsp;&nbsp;请选择...</option>
						<?php if(is_array($citys)): foreach($citys as $key=>$city): ?><option  value="<?php echo ($city['city_id']); ?>" >&nbsp;&nbsp;<?php echo ($city['city_name']); ?></option><?php endforeach; endif; ?>
						</select>
						<input type="hidden" value="1" name="coun_id" id="coun_id">
						<br>
						<br>
		                请选择类型：
						<select name = 't_id'class="input3" onchange="inter(this.value)">
						<option  value="0">&nbsp;&nbsp;请选择...</option>
							<?php if(is_array($types)): foreach($types as $key=>$type): ?><option  value="<?php echo ($type['t_id']); ?>" >&nbsp;&nbsp;<?php echo ($type['t_name']); ?></option><?php endforeach; endif; ?>

						</select>

						<div id="inter" style="display: none">
							<br><br>
							兴趣分类：
							<input type="checkbox" name="inter[]" value="美食 " style="width: 15px;height: 15px">美食&nbsp;&nbsp;
							<input type="checkbox" name="inter[]" value="文化 " style="width: 15px;height: 15px">文化&nbsp;&nbsp;
							<input type="checkbox" name="inter[]" value="游学 " style="width: 15px;height: 15px">游学&nbsp;&nbsp;
							<input type="checkbox" name="inter[]" value="旅游 " style="width: 15px;height: 15px">旅游
						</div>
						<br><br>
						服务单价：<input type="text" name="ser_price" value="" class="input3"><br><br>
						服务位置：<input type="text" name="ser_pos" value="" class="input3"><br><br>
						服务插图：<input type="file" name="ser_thumb" value="">
					</div><br>		
					</p>
					</div>
					<div class="bbD">
						<p class="bbDP">
						    <input type="hidden" name="ser_id" value="0" />
							<input type="submit" name="" value="确认提交" style="width:100px;height:36px;position:relative;left:188px;" >
							
						</p>
					</div>
				</div>
			</div>
            </form>
			<!-- 上传广告页面样式end -->
		</div>
	</div>
</body>
<script>
	function inter(id) {
		if (id == '5' || id == '6') {
			console.log(id);
			document.getElementById('inter').style.display = 'block';
		} else {
			document.getElementById('inter').style.display = 'none';
		}
	}
</script>
</html>