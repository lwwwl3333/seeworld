<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>话题添加-有点</title>
<link rel="stylesheet" type="text/css" href="/seeworld/Public/admin/css/css.css" />
<script type="text/javascript" src="/seeworld/Public/admin/js/jquery.min.js"></script>

	<!--编辑器css和js-->
	<link rel="stylesheet" href="/seeworld/Public/wangEditor-2.1.22/dist/css/wangEditor.min.css">
	<script src="/seeworld/Public/wangEditor-2.1.22/dist/js/lib/jquery-2.2.1.js"></script>
	<script src="/seeworld/Public/wangEditor-2.1.22/dist/js/wangEditor.min.js"></script>

</head>
<body>
	<div id="pageAll">
		<div class="pageTop">
			<div class="page">
				<img src="/seeworld/Public/admin/img/coin02.png" /><span><a href="<?php echo U('Admin/Index/main');?>" >首页</a>&nbsp;-&nbsp;<a
						href="<?php echo U('Admin/Travel/tralist');?>">旅行项目</a>&nbsp;-&nbsp;<a
					href="<?php echo U('Admin/Travel/traadd');?>" >项目添加</a>
				&nbsp;-</span>&nbsp;参考行程
			</div>
		</div>
		<div class="page ">
			<!-- 上传广告页面样式 -->
			<form action="" method="post">
			<div class="banneradd bor">
				<div class="baTopNo">
					<span>参考行程</span>
				</div>
				<div class="baBody">
					<div class="bbD">
						旅行标题：<input type="text" class="input3"  value="<?php echo ($tra['tra_name']); ?>" name="tra_name" />
					</div>

					<div class="bbD">
						旅行周期：
						第<select class="input3" name="se" id="se" onchange="bian(this.value)">
							<?php $__FOR_START_465150913__=1;$__FOR_END_465150913__=$tra['tra_day']+1;for($i=$__FOR_START_465150913__;$i < $__FOR_END_465150913__;$i+=1){ ?><option value="<?php echo ($i); ?>"><?php echo ($i); ?></option><?php } ?>
						</select>天
					</div>
					<input type="hidden" name="tra_id" value="<?php echo ($tra['tra_id']); ?>">
					<div class="bbD">
						参考行程：
						<div class="btext" id="btext">
							<!--<textarea  id="textarea1" name="day1">-->
							<!--</textarea>-->
						</div>
					</div>

					<div class="bbD">
						<p class="bbDP">
							<input type="submit" class="btn_ok btn_yes" value="提交">
							<a class="btn_ok btn_no" href="<?php echo U('Admin/Travel/traadd');?>" ">取消</a>
						</p>
					</div>
				</div>
			</div>
			</form>
			<!-- 上传广告页面样式end -->
		</div>
	</div>
</body>
<script type="text/javascript">
	var len=<?php echo ($tra['tra_day']); ?>; //得到总的天数 $_POST['day']  这简化了
	for(var i=1;i<=len;i++){
		var ta=document.createElement('textarea');
		ta.id='textarea'+i;
		ta.name='day_'+i;
		ta.style.height='400px';

		var div=document.createElement('div');
		div.style.display='none';
		div.id="dd"+i;
		div.className='ddd';
		div.style.width='85%';
		//创建一个div对象

		div.appendChild(ta);

		var d1=document.getElementById('btext');
		d1.appendChild(div);
		if (div.id===("dd"+1)){
			div.style.display='block';
		}
		var editor = new wangEditor('textarea'+i);
		console.log(editor);
		// 上传图片（举例）
		editor.config.uploadImgUrl = "<?php echo U('Admin/Upload/upload2');?>";
		editor.config.uploadImgFileName = 'pic';
		editor.create();
		//创建一个文本对象
	}
	function bian(par){
		var dd=document.getElementById('dd'+par);
		var ddd=document.getElementsByClassName('ddd');
		for(var j=0;j<len;j++){
			ddd[j].style.display='none';
		}
		dd.style.display='block';
	}
</script>


</html>