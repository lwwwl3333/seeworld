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
										<img src="/seeworld/Public/Admin/img/coin02.png" /><span><a href="#">首页</a>&nbsp;-&nbsp;<a
											href="#">公共管理</a>&nbsp;-</span>&nbsp;话题添加
									</div>
								</div>
		<div class="page ">
			<!-- 上传广告页面样式 -->
			       <form action="<?php echo U('Admin/Service/editser');?>" method="post" enctype="multipart/form-data" >
			       <div class="banneradd bor">
									<div class="baTopNo">
										<span>项目服务添加</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a style="font-size:17px;" href="<?php echo U('Admin/Service/serlist');?>">点击跳转至列表页</a>
									</div>
									<div class="baBody">
										<input type="hidden" name="MAX_FILE_SIZE" value="2097152" />
                                        <input type="hidden" name="ser_id" value="<?php echo ($sers['ser_id']); ?>">
										<br>
									</div>	
									<div class="bbD">
										服务项目名称：<input type="text" name="ser_name" value="<?php echo ($sers['ser_name']); ?>" style="width:238px;height:38px;">
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										<br>
										<br>
				                       请选择城市：
										<select name = 'city_id'  class="input3">
										<option  value="0">&nbsp;&nbsp;请选择...</option>
										<?php if(is_array($citys)): foreach($citys as $key=>$city): ?><option  value="<?php echo ($city['city_id']); ?>">&nbsp;&nbsp;<?php echo ($city['city_name']); ?></option><?php endforeach; endif; ?>
										
										</select>
										<br>
										<br>
						                请选择类型：
										<select name = 't_id'class="input3">
										<option  value="0">&nbsp;&nbsp;请选择...</option>
										<option  value="1">&nbsp;&nbsp;导服</option>
										<option  value="2">&nbsp;&nbsp;租车</option>
										<option  value="3">&nbsp;&nbsp;司兼导</option>
										<option  value="4">&nbsp;&nbsp;酒店</option>
										<option  value="5">&nbsp;&nbsp;景点</option>
										<option  value="6">&nbsp;&nbsp;剧院</option>
										</select><br><br>
										填写服务价格：<input type="text" name="ser_price" value="<?php echo ($sers['ser_price']); ?>" style="width:238px;height:38px;"><br><br>
										上传相关图片：<input type="file" name="ser_thumb" value="">
									</div><br>

                                     <div class="bbD">
												<p class="bbDP">
												    
													<input type="submit" name="" value="确认提交" style="width:100px;height:36px;position:relative;left:188px;" >
													
												</p>
												<br><br><br>
									</div>




					
				        </div>
											
				           
		            </form>
			</div>
           
			<!-- 上传广告页面样式end -->
		</div>
	</div>
</body>
</html>