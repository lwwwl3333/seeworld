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
					</span>类型添加
			</div>
		</div>
		<div class="page ">
			<!-- 上传广告页面样式 -->
			<form action="<?php echo U('Admin/Service/addtype');?>"   method="post">
			<div class="banneradd bor">
				<div class="baTopNo">
					<span>项目服务类型添加</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a style="font-size:16px;" href="<?php echo U('Admin/Service/seradd');?>">点击添加服务项目</a>
				</div>
				<div class="baBody">
					
					
					<div class="bbD">
						请选择国家：
						<select name = 'coun_id'class="input3">
						<?php if(is_array($nations)): foreach($nations as $key=>$nation): ?><option  value="<?php echo ($nation['coun_id']); ?>" ><?php echo ($nation['coun_name']); ?></option><?php endforeach; endif; ?>
						</select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        请选择城市：
						<select name = 'city_id'  class="input3">
						<?php if(is_array($citys)): foreach($citys as $key=>$city): ?><option  value="<?php echo ($city['city_id']); ?>" ><?php echo ($city['city_name']); ?></option><?php endforeach; endif; ?>
						</select>
						<br>
						<br>
		                请选择类型：
						<select name = 'type_id'class="input3">
						<option  value="1" >导服</option>
						<option  value="2" >租车</option>
						<option  value="3" >司兼导</option>
						<option  value="4" >酒店</option>
						<option  value="5" >景点</option>
						<option  value="6" >剧院</option>
						</select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

					</div>
					<br>
					<br>
							
						</p>
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
</html>