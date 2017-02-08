<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>话题管理-有点</title>
<link rel="stylesheet" type="text/css" href="/seeworld/Public/admin/css/css.css" />
<script type="text/javascript" src="/seeworld/Public/admin/js/jquery.min.js"></script>
<!-- <script type="text/javascript" src="js/page.js" ></script> -->

	<script src="/seeworld/Public/admin/js/layer/layer.js"></script>
	<!--弹出层js-->
</head>

<body>
	<div id="pageAll">
		<div class="pageTop">
			<div class="page">
				<img src="/seeworld/Public/admin/img/coin02.png" /><span><a href="<?php echo U('Admin/Index/index');?>">首页</a>
					--</span>&nbsp;出行时间
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
							<td width="350px" class="tdColor tdC">序号</td>
							<td width="350px" class="tdColor">项目名称</td>
							<td width="350px" class="tdColor">出行时间</td>

							<td width="200px" class="tdColor">操作</td>
						</tr>
						<?php if(is_array($dates)): foreach($dates as $key=>$ds): ?><tr>
							<td>
								<p style="margin: 30px;"><?php echo ($ds[d_id]); ?></p>
							</td>
							<td >
								<?php echo ($ds[tra_name]); ?>
							</td>
							<td><?php echo ($ds[d_content]); ?></td>
							<td><a href="<?php echo U('Admin/Date/editdate',['d_id'=>$ds[d_id]]);?>"><img class="operation"
									src="/seeworld/Public/admin/img/update.png"></a><a title="删除" href="javascript:;"
										onclick="member_del(this,<?php echo ($ds['d_id']); ?>)" class="btn btn-xs btn-warning" ><img class="operation delban"
								src="/seeworld/Public/admin/img/delete.png"></a></td>
						</tr><?php endforeach; endif; ?>
					</table>
					<div class="paging">此处是分页</div>
				</div>
				<!-- topic 表格 显示 end-->
			</div>
			<!-- topic页面样式end -->
		</div>

	</div>


	<!-- 删除弹出框 -->
	<!--<div class="banDel">-->
		<!--<div class="delete">-->
			<!--<div class="close">-->
				<!--<a><img src="img/shanchu.png" /></a>-->
			<!--</div>-->
			<!--<p class="delP1">你确定要删除此条记录吗？</p>-->
			<!--<p class="delP2">-->
				<!--<a href="#" class="ok yes">确定</a><a class="ok no">取消</a>-->
			<!--</p>-->
		<!--</div>-->
	<!--</div>-->
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

function member_del(obj,id){
	layer.confirm('确认要删除吗？',function(index){
		$(obj).parents("tr").remove();
		layer.msg('已删除!',{icon:1,time:1000});

		$.get("<?php echo U('Admin/Date/deldate');?>",{d_id:"<?php echo ($ds['d_id']); ?>"},
				function (data) {

				});
	});
}
</script>

</html>