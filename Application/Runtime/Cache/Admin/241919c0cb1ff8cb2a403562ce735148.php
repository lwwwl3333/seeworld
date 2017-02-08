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
				<img src="/seeworld/Public/Admin/img/coin02.png" /><span><a href="#">首页</a>&nbsp;-&nbsp;<a
					href="<?php echo U('Admin/Rec/artlist');?>">推荐列表</a>&nbsp;-</span>&nbsp;文章编辑
			</div>
		</div>
		<div class="page ">
			<!-- 上传广告页面样式 -->
			<div class="banneradd bor">
				<div class="baTopNo">
					<span>文章修改</span>
				</div>
				<div class="baBody">
					<form action="<?php echo U('Admin/Rec/editart',['a_id'=>$a_id]);?>" method="post" enctype="multipart/form-data">
					<div class="bbD">
						文章标题：<input type="text" class="input3" name="a_name" value="<?php echo ($article['a_name']); ?>" />
					</div>
						<div style="margin-top: 20px;">
							文章插图：<input type="file" class="input3" name="a_img" />
						</div>
						<div class="bbD">
							所属分类：
							<select class="input3" name="rec_id">
								<?php if(is_array($recs)): foreach($recs as $key=>$rec): ?><option value="<?php echo ($rec['rec_id']); ?>" class="option" >
									<?php echo ($rec['rec_name']); ?>
									</option><?php endforeach; endif; ?>
							</select>
						</div>
					<div class="bbD">
						文章简介：<input type="text" class="input3" style="width:80%;" name="a_intro" value="<?php echo ($article['a_intro']); ?>" />

					</div>


					<div class="bbD">
						文章内容：
						<div class="btext" style="width:80%">
							<textarea id='textarea1'  name="a_content"
									  style="height:400px;">
								<?php echo ($article['a_content']); ?>
							</textarea>
						</div>
					</div>
						<div class="bbD">
							审核状态：<label>
							<input type="radio" checked="checked" name="a_status" value="-1" />&nbsp;未审核</label>
							<label><input type="radio" name="a_status" value="1" />&nbsp;已通过</label>
							<label class="lar"><input type="radio" name="a_status" value="0" />&nbsp;不通过</label>
						</div>

					<div class="bbD">
						<p class="bbDP">
							<input type="submit" value="提交" class="btn_ok btn_yes">
							<input type="reset" value="重置" class="btn_ok btn_yes"
							style="margin-left:0px;">
							<a class="btn_ok btn_no" href="<?php echo U('Admin/Rec/artlist');?>">返回</a>
						</p>
					</div>
					</form>
				</div>
			</div>

			<!-- 上传广告页面样式end -->
		</div>
	</div>
</body>
<!--实例化编辑器js-->
<script type="text/javascript">
	var editor = new wangEditor('textarea1');
	// 上传图片（举例）
	editor.config.uploadImgUrl = "<?php echo U('Admin/Upload/upload');?>"; //传到upload控制器异步处理图片上传
	editor.config.uploadImgFileName = 'pic'; //相当于《input type=file》的name
	editor.create();

var ops=document.getElementsByClassName('option');
	var ls=ops.length;
	for(var i=0;i<ls;i++){

		if(ops[i].value==<?php echo ($article['rec_id']); ?>){
			ops[i].selected=true;
		}

	}
</script>
</html>