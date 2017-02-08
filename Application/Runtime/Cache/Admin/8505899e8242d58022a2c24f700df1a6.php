<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>管理员管理-有点</title>
<link rel="stylesheet" type="text/css" href="/seeworld/Public/Admin/css/css.css" />
<script type="text/javascript" src="/seeworld/Public/Admin/js/jquery.min.js"></script>
<!-- <script type="text/javascript" src="/seeworld/Public/Admin/js/page.js" ></script> -->
</head>

<body>
	<div id="pageAll">
		<div class="pageTop">
			<div class="page">
				<img src="/seeworld/Public/Admin/img/coin02.png" /><span><a href="<?php echo U('Admin/Index/main');?>">首页</a>&nbsp;-&nbsp;-</span>&nbsp;主题栏目
			</div>
		</div>

		<div class="page">
			<!-- user页面样式 -->
			<div class="connoisseur">
				<div class="conform">
					<form>
						<div class="cfD">
							<!-- <input class="userinput" type="text" placeholder="输入用户名" />&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp; -->
							<!-- <input class="userinput vpr" type="text" placeholder="输入用户密码" /> -->
							<a class="addA addA1" href="<?php echo U('Admin/Cat/catadd');?>">添加栏目</a>
						</div>
					</form>
				</div>
				<!-- user 表格 显示 -->
				<div class="conShow">
					<table border="1" cellspacing="0" cellpadding="0">
						<tr>
							<td width="66px" class="tdColor tdC">栏目ID</td>
							<td width="435px" class="tdColor">栏目名称</td>
							<td width="400px" class="tdColor">栏目介绍</td>
							<td width="630px" class="tdColor">添加时间</td>
							<td width="130px" class="tdColor">操作</td>
						</tr>
						<?php if(is_array($cat)): foreach($cat as $key=>$c): ?><tr height="40px">
							<td><?php echo ($c["cat_id"]); ?></td>
							<td><?php echo ($c["cat_name"]); ?></td>
							<td><?php echo ($c["cat_intro"]); ?></td>
							<td><?php echo date('Y-m-d',$c['add_time']);?></td>
							<td><a href="<?php echo U('Admin/Cat/catedit',array('cat_id'=>$c['cat_id']));?>"><img class="operation"
									src="/seeworld/Public/Admin/img/update.png"></a> <a href="/seeworld/index.php/Admin/Cat/catdel/cat_id/<?php echo ($c["cat_id"]); ?>" onclick="return del();"><img class="operation delban" src="/seeworld/Public/Admin/img/delete.png"></a></td>

						</tr><?php endforeach; endif; ?>
					</table>
					<div class="paging">此处是分页</div>
				</div>
				<!-- user 表格 显示 end-->
			</div>
			<!-- user页面样式end -->
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
				<a href="" class="ok yes">确定</a><a class="ok no">取消</a>
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
function del()
{
  if(confirm("确定要删除吗？"))
  {
    return true;
  }
  else
  {
    return false;
  }
}
</script>
</html>