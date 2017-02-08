<?php if (!defined('THINK_PATH')) exit();?><!-- $Id: goods_info.htm 17126 2010-04-23 10:30:26Z liuhui $ -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>旅行看世界--后台管理系统 </title>
<meta name="robots" content="noindex, nofollow">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="/seeworld/Public/Admin/css/general.css" rel="stylesheet" type="text/css" />
<link href="/seeworld/Public/Admin/css/main.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
function charea(a) {
    var spans = ['general','detail','mix'];
    for(i=0;i<3;i++) {
        var o = document.getElementById(spans[i]+'-tab');
        var tb = document.getElementById(spans[i]+'-table');
        o.className = o.id==a+'-tab'?'tab-front':'tab-back';
        tb.style.display = tb.id==a+'-table'?'block':'none';
    }
    
}
</script>
</head>
<body>

<h1>
<span class="action-span"><a href="<?php echo U('Admin/Service/servicelist');?>">3 服务列表</a></span>
<span class="action-span1"><a href="index.php?act=main">旅行看世界后台管理系统</a> </span><span id="search_id" class="action-span1"> - 添加服务项目 </span>
<div style="clear:both"></div>
</h1>

<!-- start goods form -->
<div class="tab-div">
    <!-- tab bar -->
    <div id="tabbar-div">
      <p>
        <span class="tab-front" id="general-tab" onclick="charea('general');">2 添加服务项目</span>
        <span class="tab-back" id="detail-tab" onclick="charea('detail');">1添加国家和服务类型</span>
        <span class="tab-back" id="mix-tab" onclick="charea('mix');">4 添加附表信息</span>

      </p>
    </div>

    <!-- tab body -->
    <div id="tabbody-div">
      <form enctype="multipart/form-data" action="<?php echo U('Admin/Service/serviceadd');?>" method="post" name="theForm" >
        <!-- 最大文件限制 -->
        <input type="hidden" name="MAX_FILE_SIZE" value="2097152" />




        <!-- 通用信息 -->
        <table width="90%" id="general-table" align="center">
          <tr>

            <td class="label">服务项目名称：</td>
            <td>
            <input type="text" name="ser_name" value="" style="float:left;color:;" size="30" />
            </td>
          </tr>

         

          <tr>
                <td class="label">请选择城市：</td>
                <td>
                    <select name="city_id" >
                    
                    <?php if(is_array($citys)): foreach($citys as $key=>$city): ?><option value="<?php echo ($city['city_id']); ?>">&nbsp;&nbsp;<?php echo ($city['city_name']); ?></option><?php endforeach; endif; ?>
                    </select>
                </td>   
          </tr>
           <tr>
          <td class="label">请选择服务类型：</td>
                <td>
                    <select name="t_id" >
                    <option value="0">请选择...</option>
                    <option value="1">&nbsp;&nbsp;导服</option>
                    <option value="2">&nbsp;&nbsp;租车</option>
                    <option value="3">&nbsp;&nbsp;司兼导</option>
                    <option value="4">&nbsp;&nbsp;酒店</option> 
                    <option value="5">&nbsp;&nbsp;景点</option>
                    <option value="6">&nbsp;&nbsp;剧院</option>   
                    </select>
                </td>   
          </tr>
          <tr>
            <td class="label">服务价格：</td>
            <td><input type="text" name="ser_price" value="0" size="20" /></td>
          </tr>
          
          <tr>
            <td class="label">上传服务项目图片：</td>
            <td>
              <input type="file" name="ser_thumb" size="35" />
            </td>
          </tr>
        </table>

        <!-- 添加国家 -->
        <table width="90%" id="detail-table" style="display:none">
          <tr>
            <td><textarea name="goods_desc"></textarea></td>
          </tr>
        </table>
      
       <!-- 添加附属表信息 -->
        <table width="90%" id="mix-table" style="display:none" align="center">
          <tr>
              <td class="label">服务介绍：</td>
              
              <td> <textarea name="ser_intro"></textarea></td>
          
          </tr>
          <tr>
            <td class="label"> 相关介绍：</td>

            <td><textarea name="ser_js"></textarea></td>
          </tr>
          
         
          
          <tr>
            <td class="label">服务费用：</td>
            <td><textarea name="ser_fy" cols="40" rows="3"></textarea></td>
          </tr>
          <tr>
            <td class="label">预定须知：</td>
            
            <td><textarea name="ser_yd" cols="40" rows="3"></textarea><br /></td>
            
          </tr>
        </table>
       
         
        <div class="button-div">
          <input type="hidden" name="ser_id" value="0" />
                    <input type="submit" value=" 确定 " class="button" />
          <input type="reset" value=" 重置 " class="button" />
        </div>
        <input type="hidden" name="act" value="insert" />
      
      </form>
    </div>
</div>
<!-- end goods form -->

</body>
</html>