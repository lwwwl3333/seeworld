<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>话题添加-有点</title>
<link rel="stylesheet" type="text/css" href="/seeworld/Public/home/css/css.css" />
<script type="text/javascript" src="/seeworld/Public/home/js/jquery.min.js"></script>

	<!--编辑器css和js-->
	<link rel="stylesheet" href="/seeworld/Public/wangEditor-2.1.22/dist/css/wangEditor.min.css">
	<script src="/seeworld/Public/wangEditor-2.1.22/dist/js/lib/jquery-2.2.1.js"></script>
	<script src="/seeworld/Public/wangEditor-2.1.22/dist/js/wangEditor.min.js"></script>

</head>
<body>
	<div id="pageAll">
		<div class="pageTop">
			<div class="page">
				<img src="img/coin02.png" /><span><a href="#">首页</a>&nbsp;-&nbsp;<a
					href="#">公共管理</a>&nbsp;-</span>&nbsp;话题添加
			</div>
		</div>
		<div class="page ">
			<!-- 上传广告页面样式 -->
			<div class="banneradd bor">
				<div class="baTopNo">
					<span>参考行程</span>
				</div>
				<div class="baBody">
					<div class="bbD">
						旅行标题：<input type="text" class="input3" />
					</div>

					<div class="bbD">
						话题时长：
						<select class="input3" name="se" id="se" onchange="bian(this.value)">
							<option value="1" >1</option>
							<option value="2" >2</option>
							<option value="3" >3</option>
							<option value="4" >4</option>
							<option value="5" id="day">5</option>
						</select>
					</div>
					<div class="bbD">
						话题内容：
						<div class="btext" id="btext">
							<!--<textarea  id="textarea1" name="day1">-->
							<!--</textarea>-->
						</div>
					</div>
					<div class="bbD">
						审核状态：<label><input type="radio" checked="checked"
							name="styleshoice1" />&nbsp;未审核</label> <label><input
							type="radio" name="styleshoice1" />&nbsp;已通过</label> <label class="lar"><input
							type="radio" name="styleshoice1" />&nbsp;不通过</label>
					</div>

					<div class="bbD">
						<p class="bbDP">
							<button class="btn_ok btn_yes" href="#">提交</button>
							<a class="btn_ok btn_no" href="#">取消</a>
						</p>
					</div>
				</div>
			</div>

			<!-- 上传广告页面样式end -->
		</div>
	</div>
</body>
<script type="text/javascript">
	var len=document.getElementById('day').value; //得到总的天数 $_POST['day']  这简化了
	for(var i=1;i<=len;i++){
		var ta=document.createElement('textarea');
		ta.id='textarea'+i;
		ta.name='day'+i;

		var div=document.createElement('div');
		div.style.display='none';
		div.id="dd"+i;
		div.className='ddd';
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
		editor.config.uploadImgUrl = "<?php echo U('Admin/Upload/upload');?>";
		editor.config.uploadImgFileName = 'pic'+i;
		editor.create();
		//创建一个文本对象
	}
	function bian(par){
		var dd=document.getElementById('dd'+par);
		var ddd=document.getElementsByClassName('ddd');
		for(var j=0;j<ddd.length;j++){
			ddd[j].style.display='none';
		}
		dd.style.display='block';
	}
</script>
</html>