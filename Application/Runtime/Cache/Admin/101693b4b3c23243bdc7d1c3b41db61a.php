<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>话题管理-有点</title>
<link rel="stylesheet" type="text/css" href="/seeworld/Public/admin/css/css.css" />
<script type="text/javascript" src="/seeworld/Public/admin/js/jquery.min.js"></script>
<!-- <script type="text/javascript" src="js/page.js" ></script> -->
</head>
	<link rel="stylesheet" href="/seeworld/Public/admin/css/bootstarp.min.css">
	<link rel="stylesheet" href="/seeworld/Public/admin/css/font-awesome.min.css">
	<link rel="stylesheet" href="/seeworld/Public/admin/css/ace.min.css">
	<script src="/seeworld/Public/admin/js/layer/layer.js"></script>

	<!--弹出层js-->
<body>
	<div id="pageAll">
		<div class="pageTop">
			<div class="page">
				<img src="/seeworld/Public/admin/img/coin02.png" /><span><a href="<?php echo U('Admin/Index/main');?>">首页</a>
					--</span>&nbsp;私人定制预约
			</div>
		</div>

		<div class="page">
			<!-- topic页面样式 -->
			<div class="topic">
				<div class="conform">
					<form>

						<div class="cfD">
							<input class="addUser" type="text" placeholder="话题ID/行家UID/话题标题" />
							<button class="button">搜索</button>

						</div>

					</form>
				</div>
				<!-- topic表格 显示 -->
				<div class="conShow">
					<table border="1" cellspacing="0" cellpadding="0">
						<tr>
							<td width="66px" class="tdColor tdC">序号</td>
							<td width="100px" class="tdColor">用户名</td>
							<td width="155px" class="tdColor">用户email</td>
							<td width="155px" class="tdColor">用户qq</td>
							<td width="175px" class="tdColor">用户手机号</td>
							<td width="170px" class="tdColor">出行日期</td>
							<td width="100px" class="tdColor">出行人数</td>
							<td width="100px" class="tdColor">出行天数</td>
							<td width="160px" class="tdColor">计划景点</td>
							<td width="160px" class="tdColor">计划酒店</td>
							<td width="100px" class="tdColor">审核状态</td>
							<td width="130px" class="tdColor">操作</td>
						</tr>



						<?php if(is_array($pps)): foreach($pps as $key=>$v): ?><tr>
							<td>
								<p style="margin: 20px;"><?php echo ($v['pp_id']); ?></p>
							</td>
							<td><?php echo ($v['name']); ?></td>
							<td><?php echo ($v['mail']); ?></td>
							<td><?php echo ($v['qq']); ?></td>
							<td><?php echo ($v['phone']); ?></td>
							<td><?php echo ($v['plan_reg_day']); ?></td>
							<td><?php echo ($v['plan_peo_num']); ?></td>
							<td><?php echo ($v['plan_day_num']); ?></td>
							<td><?php echo ($v['plan_jd']); ?></td>
							<td><?php echo ($v['plan_hotel']); ?></td>
							<td class="td-status">
								<?php if($v[plan_status] == -1): ?><span  class="label label-defaunt radius" style=" color: snow">未审核
									<?php elseif($v[plan_status] == 0): ?>
									<span class="label label-defaunt radius" style="color: snow">未通过

									<?php else: ?>	<span class="label label-success radius" style="color: snow">已审核<?php endif; ?>
							</span></td>
							<td class="td-manage">
									<!--<a href=""><img class="operation"-->
										<!--src="/seeworld/Public/admin/img/update.png"></a> <img class="operation delban"-->
									<!--src="/seeworld/Public/admin/img/delete.png"></td>-->
								<?php if($v[plan_status] == -1): ?><a style="text-decoration:none" class="btn btn-xs" onClick="member_start(this,<?php echo ($v[pp_id]); ?>)" href="javascript:;" ><i class="fa fa-close  bigger-120"></i></a>
									<?php elseif($v[plan_status] == 0): ?>
									<a style="text-decoration:none" class="btn btn-xs " onClick="member_start(this,<?php echo ($v[pp_id]); ?>)" href="javascript:;" ><i class="fa fa-close  bigger-120"></i></a>
									<?php else: ?>
									<a style="text-decoration:none" class="btn btn-xs btn-success " onClick="member_stop(this,<?php echo ($v[pp_id]); ?>)" href="javascript:;" ><i class="fa fa-check bigger-120"></i></a><?php endif; ?>
								<a title="删除" href="javascript:;"  onclick="member_del(this,<?php echo ($v[pp_id]); ?>)" class="btn btn-xs btn-warning" ><i class="fa fa-trash  bigger-120"></i></a>
							</td>
						</tr><?php endforeach; endif; ?>




					</table>
					<div class="paging">此处是分页</div>
				</div>
				<!-- topic 表格 显示 end-->
			</div>
			<!-- topic页面样式end -->
		</div>

	</div>



</body>

</html>
<script>


	function member_stop(obj,id){
		layer.confirm('确认审核未通过？',function(index){
			$(obj).parents("tr").find(".td-manage").prepend('<a style="text-decoration:none" class="btn btn-xs " onClick="member_start(this,'+id+')" href="javascript:;" ><i class="fa fa-close bigger-120"></i></a>');
			$(obj).parents("tr").find(".td-status").html('<span class="label label-defaunt radius" style="color: snow">未通过</span>');
			$(obj).remove();
			layer.msg('未通过!',{icon: 5,time:1000});

			$.get("<?php echo U('Admin/Plan/status2_off');?>",{pp_id:id},
					function (data) {

					});
		});
	}
	/*用户-启用*/
	function member_start(obj,id){
		layer.confirm('确认审核已通过？',function(index){
			$(obj).parents("tr").find(".td-manage").prepend('<a style="text-decoration:none" class="btn btn-xs btn-success" onClick="member_stop(this,'+id+')" href="javascript:;" ><i class="fa fa-check  bigger-120"></i></a>');
			$(obj).parents("tr").find(".td-status").html('<span class="label label-success radius" style="color: snow">已审核</span>');
			$(obj).remove();
			layer.msg('已审核!',{icon: 6,time:1000});

			$.get("<?php echo U('Admin/Plan/status2_on');?>",{pp_id:id},
					function (data) {

					});
		});

	}

	function member_del(obj,id){
		layer.confirm('确认要删除吗？',function(index){
			$.get("<?php echo U('Admin/Plan/delpp');?>",{pp_id:id},
					function (data) {
						if(data==1){
							$(obj).parents("tr").remove();
							layer.msg('已删除!',{icon:1,time:1000});
						}else{
							layer.msg('未审核,不能删除!',{icon:5,time:1000})
						}
					});


		});
	}
</script>