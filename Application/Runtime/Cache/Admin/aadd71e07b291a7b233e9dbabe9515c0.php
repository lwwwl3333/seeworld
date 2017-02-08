<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>行家-有点</title>
<link rel="stylesheet" type="text/css" href="/seeworld/Public/Admin/css/css.css" />
<script type="text/javascript" src="/seeworld/Public/Admin/js/jquery.min.js"></script>
<!-- <script type="text/javascript" src="/seeworld/Public/Admin/js/page.js" ></script> -->
</head>

<body>
	<div id="pageAll">
		<div class="pageTop">
			<div class="page">
				<img src="/seeworld/Public/Admin/img/coin02.png" /><span><a href="#">首页</a>&nbsp;-&nbsp;-</span>&nbsp;旅游项目
			</div>
		</div>

		<div class="page">
			<!-- banner页面样式 -->
			<div class="connoisseur">
				<div class="conform">

						<div class="cfD">
							<input class="addUser" type="text" placeholder="输入用户名/ID/手机号/城市" />
							<button class="button">搜索</button>
							<a class="addA addA1" href="<?php echo U('Admin/Travel/traadd');?>">添加旅游项目</a>
						</div>

				</div>
				<!-- banner 表格 显示 -->
				<div class="conShow">
					<table border="1" cellspacing="0" cellpadding="0">

						<tr>
							<td width="66px" class="tdColor tdC">序号</td>
							<td width="170px" class="tdColor">旅行主题所属栏目名称</td>
							<td width="170px" class="tdColor">旅行主题图片</td>
							<td width="135px" class="tdColor">旅游主题名称</td>
							<td width="145px" class="tdColor">旅行主题价格</td>
							<td width="140px" class="tdColor">行程路线</td>
							<td width="88px" class="tdColor">参团人数</td>
							<td width="88px" class="tdColor">旅行周期</td>
							<td width="88px" class="tdColor">是否VIP</td>
							<td width="150px" class="tdColor">添加时间</td>
							<!-- <td width="140px" class="tdColor">可约时段</td> -->
							<!-- <td width="140px" class="tdColor">审核状态</td> -->
							<!-- <td width="150px" class="tdColor">是否推荐</td> -->
							<td width="130px" class="tdColor">操作</td>
						</tr>

						<?php if(is_array($tra)): foreach($tra as $key=>$t): ?><tr>
							<td><?php echo ($t["tra_id"]); ?></td>
							<td><?php echo ($t["cat_name"]); ?></td>
							<td><div class="onsImg">
									<img src="/seeworld/<?php echo ($t["tra_thumb"]); ?>">
								</div></td>
							<td><?php echo ($t["tra_name"]); ?></td>
							<td><?php echo ($t["tra_price"]); ?>镑</td>
							<td><?php echo ($t["tra_lx"]); ?></td>
							<td><?php echo ($t["tra_people"]); ?>人</td>
							<td><?php echo ($t["tra_day"]); ?>天</td>
							<?php if($t['is_vip'] == 1): ?><td>是</td>
								<?php else: ?>
								<td>否</td><?php endif; ?>
							<td><?php echo date('Y/m/d',$t['add_time']);?></td>
							<!-- <td>3次</td> -->
							<!-- <td>周一周二周三</td> -->
							<!-- <td>未审核</td> -->
							<!-- <td>否</td> -->
							<td><a href="<?php echo U('Admin/Travel/traedit',array('tra_id'=>$t['tra_id']));?>"><img class="operation"
									src="/seeworld/Public/Admin/img/update.png"></a>
								<a href="<?php echo U('Admin/Date/adddate',array('tra_id'=>$t['tra_id']));?>"><img class="operation"
																										  src="/seeworld/Public/Admin/img/shanchu2.png"></a>
								<a href="<?php echo U('Admin/Travel/tradel',array('tra_id'=>$t['tra_id']));?>" onclick ="return del();"><img class="operation delban" src="/seeworld/Public/Admin/img/delete.png"></a>

							</td>
						</tr><?php endforeach; endif; ?>


					</table>
					<div class="paging">此处是分页</div>
				</div>
				<!-- banner 表格 显示 end-->
			</div>
			<!-- banner页面样式end -->
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
// $(".delban").click(function(){
//   $(".banDel").show();
// });
// $(".close").click(function(){
//   $(".banDel").hide();
// });
// $(".no").click(function(){
//   $(".banDel").hide();
// });
// 广告弹出框 end
function del(){
	if(confirm("确定要删除吗?")){
		return true;
	}else{
		return false;
	}
}
</script>
</html>