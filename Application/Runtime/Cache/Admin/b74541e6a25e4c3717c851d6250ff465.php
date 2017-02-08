<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>ECSHOP 管理中心 - 商品列表 </title>
<meta name="robots" c>
<meta http-equiv="Content-Type" c />
<link href="/seeworld/Public/Admin/css/general.css" rel="stylesheet" type="text/css" />
<link href="/seeworld/Public/Admin/css/main.css" rel="stylesheet" type="text/css" />
</head>
<body>

<h1>
<span class="action-span"><a href="">添加服务详情</a></span>
<span class="action-span"><a href="<?php echo U('Admin/Service/serviceadd');?>">添加服务</a></span>

<span class="action-span1"><a href="#">旅行看世界--后台管理系统</a> </span><span id="search_id" class="action-span1"> --服务列表 </span>
<div style="clear:both"></div>
</h1>

<div class="form-div">
  <!--
  <form action="" name="searchForm">
    <img src="./images/icon_search.gif" width="26" height="22" border="0" alt="SEARCH" />
      
    <select name="cat_id"><option value="0">所有分类</option><option value="1" >手机类型</option><option value="4" >&nbsp;&nbsp;&nbsp;&nbsp;3G手机</option><option value="5" >&nbsp;&nbsp;&nbsp;&nbsp;双模手机</option><option value="2" >&nbsp;&nbsp;&nbsp;&nbsp;CDMA手机</option><option value="3" >&nbsp;&nbsp;&nbsp;&nbsp;GSM手机</option><option value="12" >充值卡</option><option value="14" >&nbsp;&nbsp;&nbsp;&nbsp;移动手机充值卡</option><option value="15" >&nbsp;&nbsp;&nbsp;&nbsp;联通手机充值卡</option><option value="13" >&nbsp;&nbsp;&nbsp;&nbsp;小灵通/固话充值卡</option><option value="6" >手机配件</option><option value="11" >&nbsp;&nbsp;&nbsp;&nbsp;读卡器和内存卡</option><option value="7" >&nbsp;&nbsp;&nbsp;&nbsp;充电器</option><option value="8" >&nbsp;&nbsp;&nbsp;&nbsp;耳机</option><option value="9" >&nbsp;&nbsp;&nbsp;&nbsp;电池</option></select>

   
    <select name="brand_id"><option value="0">所有品牌</option><option value="1">诺基亚</option><option value="10">金立</option><option value="9">联想</option><option value="8">LG</option><option value="7">索爱</option><option value="6">三星</option><option value="5">夏新</option><option value="4">飞利浦</option><option value="3">多普达</option><option value="2">摩托罗拉</option><option value="11">  恒基伟业</option></select>

    
    <select name="intro_type"><option value="0">全部</option><option value="is_best">精品</option><option value="is_new">新品</option><option value="is_hot">热销</option><option value="is_promote">特价</option><option value="all_type">全部推荐</option></select>
         
     
      <select name="suppliers_id"><option value="0">全部</option><option value="1">北京供货商</option><option value="2">上海供货商</option></select>

            
      <select name="is_on_sale"><option value=''>全部</option><option value="1">上架</option><option value="0">下架</option></select>
      
    关键字 <input type="text" name="keyword" size="15" />
    <input type="submit" value=" 搜索 " class="button" />
  </form>
</div>
-->

<form method="post" action="" name="listForm" >

  <div class="list-div" id="listDiv">
<table cellpadding="3" cellspacing="1">
<!-- 标题行-->
  <tr>
    <th><span>编号</span></th>

    <th><a href="#">服务名称</a></th>
    <th><a href="#">所属城市ID</a></th>
    <th><a href="#">所属类型ID</a></th>
    <th><a href="#">服务价格</a></th>
    <th>操作</th>
  <tr>
<!--内容行-->
<?php if(is_array($lists)): foreach($lists as $key=>$list): ?><tr>
    <td style='text-align:center;'><?php echo ($list['ser_id']); ?></td>

    <td class="first-cell" align='left'><span >&nbsp;&nbsp;<?php echo ($list['ser_name']); ?></span></td>
    <td align="center"><span ><?php echo ($list['city_id']); ?></span></td>
    <td align="center"><span ><?php echo ($list['t_id']); ?></span></td>
    

    <td align="right"><span ><?php echo ($list['ser_price']); ?></span></td>
        
      <td align="center">
     
      <a href="#" title="编辑">编辑</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
      <a href="#"  title="回收站">删除</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
      <a href="<?php echo U('Admin/Service/serattsadd',array('ser_id'=>$list['ser_id']));?>" title="服务详情">服务详情</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
      <a href="<?php echo U('Admin/Service/fushubiao',array('ser_id'=>$list['ser_id']));?>" title="服务详情">完善服务详情</a>
    </td>
  </tr><?php endforeach; endif; ?>
  <!--内容结束-->    
        
      </table>

<table id="page-table" cellspacing="0">
  <tr>
    <td align="right" nowrap="true">
      
        
          上页&nbsp;&nbsp;1</b>&lt;&lt; [1]&nbsp;&nbsp;<a href=admin.php?c=goods&a=goodsList&page=2& title='第2页'>[2]</a>&nbsp;&nbsp;<a href=admin.php?c=goods&a=goodsList&page=3& title='第3页'>[3]</a>&nbsp;&nbsp;<a href=admin.php?c=goods&a=goodsList&page=4& title='第4页'>[4]</a>&nbsp;&nbsp;<a href=admin.php?c=goods&a=goodsList&page=5& title='第5页'>[5]</a>&nbsp;&nbsp;<a href=admin.php?c=goods&a=goodsList&page=8& title='第8页'>&gt;&gt;8</a>&nbsp;<a href=admin.php?c=goods&a=goodsList&page=2&  title='下一页'>[下一页]</a>
    
    </td>
  </tr>

</table>

</div>
</form>

<div id="footer">
共执行 7 个查询，用时 0.112141 秒，Gzip 已禁用，内存占用 3.085 MB<br />
版权所有 &copy; 2005-2010 上海商派网络科技有限公司，并保留所有权利。</div>
</body>
</html>