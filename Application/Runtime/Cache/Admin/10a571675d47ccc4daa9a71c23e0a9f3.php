<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title></title>
	<link rel="stylesheet" type="text/css" href="/seeworld/Public/admin/css/css.css" />
	<style type="text/css">
		*{ margin:0; padding:0;}
		body { font:12px/1.5 Arial; color:#666; background:#fff;}
		ul,li{ list-style:none;}
		img{border:0 none;}
		/*---------------------------------------demo css--------------------------------------------*/
		.date_selector, .date_selector *{width: auto;height: auto;border: none;background: none;margin: 0;padding: 0;text-align: left;text-decoration: none;}
		.date_selector{background:#fbfbfb;border: 1px solid #ccc;padding: 10px;margin:0;margin-top:-1px;position: absolute;z-index:100000;display:none;border-radius: 3px;box-shadow: 0 0 5px #aaa;box-shadow:0 2px 2px #ccc; width:270px;}
		.date_selector_ieframe{position: absolute;z-index: 99999;display: none;}
		.date_selector .nav{width: 17.5em;}
		.date_selector .nav p{clear: none;}
		.date_selector .month_nav, .date_selector .year_nav{margin: 0 0 3px 0;padding: 0;display: block;position: relative;text-align: center;}
		.date_selector .month_nav{float: left;width: 55%;}
		.date_selector .year_nav{float: right;width: 42%;margin-right: -8px;}
		.date_selector .month_name, .date_selector .year_name{font-weight: bold;line-height: 20px;}
		.date_selector .button{display: block;position: absolute;top: 0;width:18px;height:18px;line-height:16px;font-weight:bold;color:#5985c7;text-align: center;font-size:12px;overflow:hidden;border: 1px solid #ccc;border-radius:2px;}
		.date_selector .button:hover, .date_selector .button.hover{background:#5985c7;color: #fff;cursor: pointer;border-color:#3a930d;}
		.date_selector .prev{left: 0;}
		.date_selector .next{right: 0;}
		.date_selector table{border-spacing: 0;border-collapse: collapse;clear: both;margin: 0; width:220px;}
		.date_selector th, .date_selector td{width: 2.5em;height: 2em;padding: 0 !important;text-align: center !important;color: #666;font-weight: normal;}
		.date_selector th{font-size: 12px;}
		.date_selector td{border:1px solid #f1f1f1;line-height: 2em;text-align: center;white-space: nowrap;color:#5985c7;background: #fff;}
		.date_selector td.today{background: #eee;}
		.date_selector td.unselected_month{color: #ccc;}
		.date_selector td.selectable_day{cursor: pointer;}
		.date_selector td.selected{background:#2b579a;color: #fff;font-weight: bold;}
		.date_selector td.selectable_day:hover, .date_selector td.selectable_day.hover{background:#5985c7;color: #fff;}
		/*-----------------------------------------------------------------------------------*/
	</style>
	<script type="text/javascript" src="/seeworld/Public/admin/js/jquery-1.7.2.min.js"></script>
	<script type="text/javascript" src="/seeworld/Public/admin/js/date.js"></script>
</head>
<body>
<script type="text/javascript">
	$(function(){
		$('#date_picker').date_input();
	})
</script>

<div id="pageAll">
	<div class="pageTop">
		<div class="page">
			<img src="/seeworld/Public/admin/img/coin02.png" /><span><a href="<?php echo U('Admin/Index/index');?>">首页</a>&nbsp;-&nbsp;<a
				href="<?php echo U('Admin/Date/datelist');?>">出行时间</a>&nbsp;-</span>&nbsp;修改出行时间
		</div>
	</div>
	<div class="page ">
		<!-- 会员注册页面样式 -->
		<div class="banneradd bor">
			<div class="baTopNo">
				<span>修改出行时间</span>
			</div>
			<form action="" method="post">
			<div class="baBody">
				<div class="bbD">
					&nbsp;&nbsp;&nbsp;项目名称：<input type="text" class="input3" name="tra_name" value="<?php echo ($tra_name); ?>" readonly />
				</div>
				<div class="bbD">
					&nbsp;&nbsp;&nbsp;出发时间：<input  class="input3" type="text" id="date_picker" value="<?php echo ($d_content); ?>" readonly name="d_content">
				</div>
				<input type="hidden" name="tra_id" value="<?php echo ($t['tra_id']); ?>">
				</div>
				<div class="bbD">
					<p class="bbDP">
						<input type="submit" class="btn_ok btn_yes" value="修改">
						<a class="btn_ok btn_no" href="<?php echo U('Admin/Date/datelist');?>">取消</a>
					</p>
				</div>
			</form>
			</div>

		</div>

		<!-- 会员注册页面样式end -->
	</div>
</div>
</body>
</html>