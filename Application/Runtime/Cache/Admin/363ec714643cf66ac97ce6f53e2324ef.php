<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>话题管理-有点</title>
<link rel="stylesheet" type="text/css" href="/seeworld/Public/admin/css/css.css" />
<script type="text/javascript" src="/seeworld/Public/admin/js/jquery.min.js"></script>
 <!--<script type="text/javascript" src="js/page.js" ></script>-->

<script src="/seeworld/Public/admin/js/layer/layer.js"></script>
	<!--弹出层js-->



</head>

<body>
	<div id="pageAll">
		<div class="pageTop">
			<div class="page">
				<img src="/seeworld/Public/admin/img/coin02.png" /><span><a href="<?php echo U('Admin/Index/main');?>">首页</a>&nbsp;-&nbsp;<a
					href="<?php echo U('Admin/Rec/artlist');?>">独家推荐</a>&nbsp;-</span>&nbsp;推荐列表
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
							<a class="addA addA1" href="<?php echo U('Admin/Rec/addrec');?>">添加分类+</a>
							<a class="addA addA1" href="<?php echo U('Admin/Rec/addart');?>">添加文章+</a>

						</div>
					</form>
				</div>
				<!-- topic表格 显示 -->
				<div class="conShow">
					<table border="1" cellspacing="0" cellpadding="0">
						<tr>
							<td width="66px" class="tdColor tdC">序号</td>
							<td width="200px" class="tdColor">文章标题</td>
							<td width="150px" class="tdColor">所属分类</td>
							<td width="300px" class="tdColor">文章简介</td>
							<td width="66px" class="tdColor">点击量</td>
							<td width="200px" class="tdColor">发布时间</td>
							<td width="100px" class="tdColor">审核状态</td>
							<td width="150px" class="tdColor">操作</td>
						</tr>
						<?php if(is_array($articles)): foreach($articles as $key=>$art): ?><tr>
							<td>
								<p style="margin: 30px;"><?php echo ($art['a_id']); ?></p>
							</td>
							<td>
								<p><?php echo ($art['a_name']); ?></p>
							</td>

							<td>
								<?php echo ($art['rec_name']); ?>
							</td>
							<td>
								<p style="width: 300px;padding-left: 10px;padding-right: 10px;	overflow: hidden;white-space: nowrap;text-overflow: ellipsis;"><?php echo ($art['a_intro']); ?></p>
							</td>


							<td><?php echo ($art['a_click']); ?></td>
							<td><?php echo (date("Y-m-d H:i:s",$art['pubtime'])); ?></td>
							<td>
								<?php if($art['a_status'] == 1): ?>通过
								<?php elseif($art['a_status'] == 0): ?>
									未通过
								<?php else: ?>未审核<?php endif; ?>
							</td>
							<td><a href="<?php echo U('Admin/Rec/editart',['a_id'=>$art['a_id']]);?>">
								<img class="operation" src="/seeworld/Public/admin/img/update.png"></a>
								<!--<img class="operation delban" src="/seeworld/Public/admin/img/delete.png">-->
								<a title="删除" href="javascript:;"  onclick="member_del(this,<?php echo ($art['a_id']); ?>)" class="btn btn-xs btn-warning" ><img class="operation delban"
									 src="/seeworld/Public/admin/img/delete.png"></a>
							</td>
						</tr><?php endforeach; endif; ?>
					</table>
					<div class="paging"><?php echo ($page); ?></div>
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
				<!--<a><img src="/seeworld/Public/admin/img/shanchu.png" /></a>-->
			<!--</div>-->
			<!--<p class="delP1">你确定要删除此条记录吗？</p>-->
			<!--<p class="delP2">-->
				<!--<input type="button" class="ok yes" value="提交" id="aaa"><a class="ok no">取消</a>-->
			<!--</p>-->
		<!--</div>-->
	<!--</div>-->
	<!-- 删除弹出框  end-->
</body>

<script type="text/javascript">
// 广告弹出框
//$(".delban").click(function(){
//  $(".banDel").show();
//});
//$(".close").click(function(){
//  $(".banDel").hide();
//});
//$(".no").click(function(){
//  $(".banDel").hide();
//});
//// 广告弹出框 end
//
//	$('#aaa').click(function () {
//		$.get("<?php echo U('Admin/Rec/delart');?>",{a_id:"<?php echo ($art['a_id']); ?>"},
//		function (data) {
//			alert('删除成功');
//		});
//	})

function member_del(obj,id){
	layer.confirm('确认要删除吗？',function(index){

		$.get("<?php echo U('Admin/Rec/delart');?>",{a_id:id},
				function (data) {

				});
		$(obj).parents("tr").remove();
		layer.msg('已删除!',{icon:1,time:1000});


	});
}
</script>
</html>
<style>
	.current{
		font-size: 20px;
		color: black;
		padding-right: 5px;

	}
	.num{
		font-size:20px;
		color:rgb(71,164,225);
		padding-right: 5px;
	}
	.end{
		font-size: 20px;
		color: rgb(71,164,225);
	}
	.prev,.next,.first{
		font-size: 15px;
		color: rgb(71,164,225);
		padding-right: 5px;
	}
</style>