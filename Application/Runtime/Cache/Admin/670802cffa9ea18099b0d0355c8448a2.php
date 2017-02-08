<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>会员管理-有点</title>
<link rel="stylesheet" type="text/css" href="/seeworld/Public/Admin/css/css.css" />
<link rel="stylesheet" type="text/css" href="/seeworld/Public/Admin/css/manhuaDate.1.0.css">
	<script type="text/javascript" src="/seeworld/Public/Admin/js/jquery.min.js"></script>
	<script type="text/javascript" src="/seeworld/Public/Admin/js/manhuaDate.1.0.js"></script>
	<script type="text/javascript" src="/seeworld/Public/Admin/js/jquery-1.7.2.min.js"></script>
	<!-- <script type="text/javascript" src="/seeworld/Public/Admin/js/page.js" ></script> -->
	<script type="text/javascript">
$(function (){
  $("input.mh_date").manhuaDate({
    Event : "click",//可选               
    Left : 0,//弹出时间停靠的左边位置
    Top : -16,//弹出时间停靠的顶部边位置
    fuhao : "-",//日期连接符默认为-
    isTime : false,//是否开启时间值默认为false
    beginY : 1949,//年份的开始默认为1949
    endY :2100//年份的结束默认为2049
  });
});
</script>
</head>

<body>
	<div id="pageAll">
		<div class="pageTop">
			<div class="page">
				<img src="/seeworld/Public/Admin/img/coin02.png" /><span><a href="<?php echo U('Admin/Index/main');?>">首页</a>&nbsp;-
					</span>服务列表
			</div>
		</div>

		<div class="page">
			<!-- vip页面样式 -->
			<div class="vip">
				<div class="conform">
					<form>
						
						<div class="cfD">
							<a class="addA addA1" href="<?php echo U('Admin/service/addnation');?>">添加国家+</a>
							<a class="addA addA1 addA2" href="<?php echo U('Admin/service/addcity');?>">
							添加城市+</a>
							<!--<a class="addA addA1 addA2" href="<?php echo U('Admin/service/addtype');?>">-->
							<!--添加类型+</a>-->
							<a class="addA addA1 addA2" href="<?php echo U('Admin/service/seradd');?>">
							添加服务项目+</a>
							<a class="addA addA1 addA2" href="<?php echo U('Admin/service/attsintro');?>">
							完善详情+</a>
						</div>
					</form>
				</div>
				<!-- vip 表格 显示 -->
				<div class="conShow">
					<table border="1" cellspacing="0" cellpadding="0">
						<tr >
							<td width="66px" class="tdColor tdC">序号</td>
							<td width="230px" class="tdColor tdC">相关图片</td>
							<td width="200px" class="tdColor">服务名称</td>
							<td width="100px" class="tdColor">服务类型</td>
							<td width="100px" class="tdColor">所属城市</td>
							<td width="200px" class="tdColor">服务价格</td>
							<td width="200px" class="tdColor">服务位置</td>
							<td width="315px" class="tdColor">操作</td>
						</tr>
						<?php if(is_array($lists)): foreach($lists as $key=>$list): ?><tr >
							<td><?php echo ($list['ser_id']); ?></td>
							<td><div class="onsImg onsImgv">
									<img src="/seeworld/<?php echo ($list['ser_thumb']); ?>">
								</div></td>
							<td><?php echo ($list['ser_name']); ?></td>
							<td><?php echo ($list['t_id']); ?></td>
							<td><?php echo ($list['city_id']); ?></td>
							<td><?php echo ($list['ser_price']); ?></td>
							<td><?php echo ($list['ser_pos']); ?></td>
							<td>
							<a href="<?php echo U('Admin/Service/editser',array('ser_id'=>$list['ser_id']));?>"><img class="operation" src="/seeworld/Public/Admin/img/update.png" title='编辑'></a>
							<a href="<?php echo U('Admin/Service/delser',array('ser_id'=>$list['ser_id']));?>" ><img class="operation delban"
								src="/seeworld/Public/Admin/img/delete.png" title='删除'></a>		 
							

								<a style='font-size:21px'href="<?php echo U('Admin/Service/serattsadd',array('ser_id'=>$list['ser_id']));?>"><img class="operation"
									src="/seeworld/Public/Admin/img/coin01.png" title='点击完善附表信息'></a>
							</td>
						</tr><?php endforeach; endif; ?>
					</table>
					<div class="paging">此处是分页</div>
				</div>
				<!-- vip 表格 显示 end-->
			</div>
			<!-- vip页面样式end -->
		</div>

	</div>


	<!-- 删除弹出框 -->
	<div class="banDel">
		<div class="delete">
			<div class="close">
				<a><img src="/seeworld/Public/Admin/img/shanchu.png" /></a>
			</div>
			<p class="delP1">你确定要删除此条记录吗？</p>
			<p class="delP2">
				<a href="#" class="ok yes">确定</a><a class="ok no">取消</a>
			</p>
		</div>
	</div>
	<!-- 删除弹出框  end-->
</body>

<script type="text/javascript">
// 广告弹出框
$(".delban").click(function(){
  $(".banDel").show();
});
$(".close").click(function(){
  $(".banDel").hide();
});
$(".no").click(function(){
  $(".banDel").hide();
});
// 广告弹出框 end
</script>
</html>