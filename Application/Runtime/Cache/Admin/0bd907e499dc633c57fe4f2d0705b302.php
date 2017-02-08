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
 <!--编辑器css js-->
<link rel="stylesheet" href="/seeworld/Public/wangEditor-2.1.22/dist/css/wangEditor.min.css">
<script src="/seeworld/Public/wangEditor-2.1.22/dist/js/lib/jquery-2.2.1.js"></script>
<script src="/seeworld/Public/wangEditor-2.1.22/dist/js/wangEditor.min.js"></script>
<!--编译器结束-->

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
                <img src="/seeworld/Public/Admin/img/coin02.png" /><span><a href="<?php echo U('Admin/Index/index');?>">首页</a>&nbsp;-
					</span>完善详情
			</div>
		</div>

		<div class="page">
			<!-- vip页面样式 -->
			<div class="vip">
				<div class="conShow">
					<form  action="<?php echo U('Admin/Service/attsintro');?>" method='post'>
                    <div class="bbD">
                    服务项目：
						<select name = 'sera_id' class="input3">
						
						<option  value="0" >请选择...</option>
						<?php if(is_array($atts)): foreach($atts as $key=>$att): ?><option  value="<?php echo ($att['sera_id']); ?>" ><?php echo ($att['ser_name']); ?></option><?php endforeach; endif; ?>
						</select>
                    </div>
					<div class="bbD">
					添加简介：
					    <div class="btext" style="width:80%">
							<textarea id='textarea' name="ser_intro"
                                      style="width:600px;height:300px;">
							</textarea>
                        </div>
                    </div>
                    相关介绍：
                    <div class="bbD">
                        <div class="btext" style="width:80%">
							<textarea id='textarea1' name="ser_js"
                                      style="width:600px;height:300px;">
							</textarea>
                        </div>
                    </div>
                        <br>
                    费用须知：
                    <div class="bbD">
                        <div class="btext" style="width:80%">
							<textarea id='textarea2' name="ser_fy" style="width:600px;height:300px;">
							</textarea>
                        </div>
                    </div>
                        <br>
                    预定说明：
                    <div class="bbD">
                        <div class="btext" style="width:80%">
							<textarea id='textarea3' name="ser_yd"
                                      style="height:300px;">
							</textarea>
                        </div>
                    </div>
                    <div class="bbD">
                        <input type="submit" name="" value="确认提交" style="width:100px;height:36px;position:relative;left:79px;" >
                    </div>
                    </form>
                    <br><br><br><br>

                    </div>
					
				</div>	
			</div>
			<!-- vip页面样式end -->
		</div>
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
	var editor = new wangEditor('textarea');
    editor.create();

    var editor1 = new wangEditor('textarea1');
    // 上传图片（举例）
    editor1.config.uploadImgUrl = "<?php echo U('Admin/Upload/upload3');?>"; //传到upload控制器异步处理图片上传
    editor1.config.uploadImgFileName = 'pic'; //相当于《input type=file》的name
    editor1.create();

    var editor2 = new wangEditor('textarea2');
    editor2.create();
    var editor3 = new wangEditor('textarea3');
    editor3.create();
</script>

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