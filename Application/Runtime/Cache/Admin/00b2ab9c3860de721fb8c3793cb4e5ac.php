<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>行家添加-有点</title>
<link rel="stylesheet" type="text/css" href="/seeworld/Public/Admin/css/css.css" />
<script type="text/javascript" src="/seeworld/Public/Admin/js/jquery.min.js"></script>
</head>
<body>
	<div id="pageAll">
		<div class="pageTop">
			<div class="page">
				<img src="/seeworld/Public/Admin/img/coin02.png" /><span><a href="<?php echo U('Admin/Index/main');?>">首页</a>&nbsp;-&nbsp;<a
					href="<?php echo U('Admin/Travel/tralist');?>">旅行项目</a>&nbsp;-</span>&nbsp;项目添加
			</div>
		</div>
		<div class="page ">
			<!-- 上传广告页面样式 -->
			<div class="banneradd bor">
				<div class="baTopNo">
					<span>项目添加</span>
				</div>
				<div class="baBody">

				<form action="<?php echo U('Admin/Travel/traadd');?>" method="post" enctype="multipart/form-data">
					
					<div class="bbD">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;项目名称：<input type="text" name="tra_name" class="input3" />
					</div>
					<div class="bbD">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;旅游单价：<input type="text" name="tra_price" class="input3" />
					</div>
					<div class="bbD">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;行程亮点：<input type="text" name="tra_ld" class="input3" />
					</div>
					<div style="margin-top: 10px">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;图片上传：&nbsp;&nbsp;&nbsp;<input type="file" name="tra_thumb" class="input3" />
					</div>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;栏目选择:<select name="cat_id" style="margin-left: 80px;margin-top: 10px;" >
								<option value="">请选择项目</option>
								<?php if(is_array($cat)): foreach($cat as $key=>$cat): ?><option value="<?php echo ($cat['cat_id']); ?>"><?php echo ($cat['cat_name']); ?></option><?php endforeach; endif; ?>
					</select>
					<div class="bbD">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;人数上限：<input type="number" name="tra_limit" class="input3" min="1" max="60">
					</div>
					<div class="bbD">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;行程天数：<input type="number" name="tra_day" class="input3" min="1" max="31">
					</div>
					<div class="bbD">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;行程路线：
						<div class="btext2">
							<textarea class="text2" name="tra_lx"></textarea>
						</div>
					</div>
					<div class="bbD">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;费用说明：
						<div class="btext2">
							<textarea class="text2" name="price_state"></textarea>
						</div>
					</div>
					<div class="bbD">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;预订须知：
						<div class="btext2">
							<textarea class="text2" name="tra_notice"></textarea>
						</div>
					</div>
				
<!-- 					<div class="bbD">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;审核状态：<label><input
							type="radio" checked="checked" name="styleshoice1" />&nbsp;未审核</label> <label><input
							type="radio" name="styleshoice1" />&nbsp;已通过</label> <label class="lar"><input
							type="radio" name="styleshoice1" />&nbsp;不通过</label>
					</div> -->
					<div class="bbD">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;是否推荐：<label><input
							type="radio" checked="checked" name="is_vip" value="1" />&nbsp;是</label><label><input
							type="radio" name="is_vip" value="0" />&nbsp;否</label>
					</div>
					<div class="bbD">
						<p class="bbDP">
							<input type="submit" name="" value="提交" class="btn_ok btn_yes">
							<!-- <button class="btn_ok btn_yes" href="#">提交</button> -->
							<!-- <a class="btn_ok btn_no" href="#">取消</a> -->
						</p>
					</div>
					</form>
				</div>
			</div>

			<!-- 上传广告页面样式end -->
		</div>
	</div>
</body>
</html>