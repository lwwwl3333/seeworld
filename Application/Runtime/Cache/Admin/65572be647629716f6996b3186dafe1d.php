<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>广告-有点</title>
<link rel="stylesheet" type="text/css" href="/seeworld/Public/Admin/css/css.css" />
<script type="text/javascript" src="/seeworld/Public/Admin/js//jquery.min./seeworld/Public/Admin/js/"></script>
<!-- <script type="text/javascript" src="/seeworld/Public/Admin/js//page./seeworld/Public/Admin/js/" ></script> -->
</head>

<body>
	<div id="pageAll">
		<div class="pageTop">
			<div class="page">
				<img src="/seeworld/Public/Admin/img/coin02.png" /><span><a href="<?php echo U('Admin/Index/index');?>">首页</a>
					--</span>&nbsp;轮播图列表
			</div>
		</div>
		<div class="page">
			<!-- banner页面样式 -->
			<div class="banner">
				<div class="add">
					<a class="addA" href="<?php echo U('Admin/lunbo/lunboadd');?>">上传轮播图&nbsp;&nbsp;+</a>
				</div>
				<!-- banner 表格 显示 -->
				<div class="banShow">
					<table border="1" cellspacing="0" cellpadding="0">
						<tr>
							<td width="66px" class="tdColor tdC">序号</td>
							<td width="315px" class="tdColor">图片</td>
							<td width="308px" class="tdColor">名称</td>
							<td width="450px" class="tdColor">所属栏目</td>
							<td width="215px" class="tdColor">上传时间</td>
							<td width="215px" class="tdColor">是否显示</td>
							<td width="125px" class="tdColor">操作</td>
						</tr>
						
						<?php if(is_array($lunbos)): foreach($lunbos as $key=>$lb): ?><tr>
							<td><?php echo ($lb['lun_id']); ?></td>
							<td><div class="bsImg">
									<img src="/seeworld<?php echo ($lb['lun_path']); ?>">
								</div></td>
							<td><?php echo ($lb['lun_name']); ?></td>
							<td><a class="bsA" href="#"><?php echo ($lb['cat_name']); ?></a></td>	
							<td><?php echo date('Y-m-d H:i:s',$lb['add_time']);?></td>
							<td>
							<?php if(($lb[lun_show])): ?>是
							<?php else: ?>
									否<?php endif; ?>
							</td>
							<td><a href="<?php echo U('Admin/lunbo/lunboedit',array('lun_id'=>$lb['lun_id']));?>"><img class="operation"
									src="/seeworld/Public/Admin/img/update.png"></a> <a  href="<?php echo U('Admin/lunbo/lunbodel',array('lun_id'=>$lb['lun_id']));?>"><img class="operation delban"
								src="/seeworld/Public/Admin/img/delete.png"></a></td>
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
				<a href="#" class="ok yes" onclick="del()">确定</a><a class="ok no">取消</a>
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

function del(){
    var input=document.getElementsByName("check[]");
    for(var i=input.length-1; i>=0;i--){
       if(input[i].checked==true){
           //获取td节点
           var td=input[i].parentNode;
          //获取tr节点
          var tr=td.parentNode;
          //获取table
          var table=tr.parentNode;
          //移除子节点
          table.removeChild(tr);
        }
    }     
}
</script>
</html>