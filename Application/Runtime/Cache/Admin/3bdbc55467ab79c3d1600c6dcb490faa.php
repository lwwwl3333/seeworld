<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>头部-有点</title>
<link rel="stylesheet" type="text/css" href="/seeworld/Public/Admin/css/css.css" />
<script type="text/javascript" src="/seeworld/Public/Admin/js/jquery.min.js"></script>
</head>
<body>
	<div id="pageAll">
		<div class="pageTop">
			<div class="page">
				<img src="/seeworld/Public/Admin/img/coin02.png" /><span><a href="<?php echo U('Admin/Index/index');?>">首页</a>&nbsp;-&nbsp;<a
					href="<?php echo U('Admin/Lunbo/lunbolist');?>">轮播图列表</a>&nbsp;-</span>&nbsp;轮播图修改
			</div>
		</div>
		<div class="page ">
			<!-- 上传广告页面样式 -->
			<div class="banneradd bor">
				<div class="baTop">
					<span>修改轮播图</span>
				</div>
				

				<form action="" method="post" accept-charset="utf-8" enctype="multipart/form-data">			
					<div class="baBody">
						<div class="bbD">
							图片名称：<input  name="lun_name" type="text" class="input1"  value="<?php echo ($lunbos['lun_name']); ?>" />
						</div>
		
						<div class="bbD">
							是否显示：<label><input type="radio"  value="1" name="lun_show"  <?php echo ($lunbos['lun_show']?'checked':''); ?>/>是</label> <label><input type="radio"  value="0" name="lun_show" <?php echo ($lunbos['lun_show']?'':'checked'); ?>/>否</label>
						</div>
						<div class="bbD">
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;选择栏目：
 							<!-- 遍历栏目 -->
									
							<select name="cat_id" >
								<option value="">请选择项目</option>
								<?php if(is_array($cat)): foreach($cat as $key=>$cat): ?><option value="<?php echo ($cat['cat_id']); ?>" <?php echo ($cat['cat_id'] == $lunbos['cat_id']?'selected':''); ?>>
								
								<?php echo ($cat['cat_name']); ?></option><?php endforeach; endif; ?>
								option
							</select>
						
						</div>
						<div class="bbD">
							<p class="bbDP">
								<input type="submit" class="btn_ok btn_no" name="" value="提交">
								<a class="btn_ok btn_no" href="<?php echo U('Admin/lunbo/lunbolist');?>">取消</a>
							</p>
						</div>
					</div>
				</form>


			<!-- 上传广告页面样式end -->
		</div>
	</div>
</body>
</html>