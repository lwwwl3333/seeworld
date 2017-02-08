<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>话题添加-有点</title>
    <link rel="stylesheet" type="text/css" href="/seeworld/Public/Admin/css/css.css"/>
    <script type="text/javascript" src="/seeworld/Public/Admin/js/jquery.min.js"></script>

    <!--编辑器css js-->
    <link rel="stylesheet" href="/seeworld/Public/wangEditor-2.1.22/dist/css/wangEditor.min.css">
    <script src="/seeworld/Public/wangEditor-2.1.22/dist/js/lib/jquery-2.2.1.js"></script>
    <script src="/seeworld/Public/wangEditor-2.1.22/dist/js/wangEditor.min.js"></script>

</head>
<body>
<div id="pageAll">
    <div class="pageTop">
        <div class="page">
            <img src="/seeworld/Public/Admin/img/coin02.png"/><span><a href="<?php echo U('Admin/Index/main');?>">首页</a>&nbsp;-&nbsp;<a
                href="<?php echo U('Admin/Private/prilist');?>">私人定制</a>&nbsp;-</span>&nbsp;景点添加
        </div>
    </div>
    <div class="page ">
        <!-- 上传广告页面样式 -->
        <div class="banneradd bor">
            <div class="baTopNo">
                <span>景点添加</span>
            </div>
            <div class="baBody">
                <form action="<?php echo U('Admin/Private/addjd');?>" method="post" enctype="multipart/form-data">
                    <div class="bbD">
                        景点名称：<input type="text" class="input3" name="j_name"/>
                    </div>
                    <div style="margin-top: 20px;">
                        景点插图：<input type="file" class="input3" name="j_src"/>
                    </div>
                    <div class="bbD">

                        所属城市：
                        <select class="input3" name="city_id" id="city">
                            <option value="">请选择城市</option>
                            <?php if(is_array($citys)): foreach($citys as $key=>$city): ?><option value="<?php echo ($city['city_id']); ?>"><?php echo ($city['city_name']); ?></option><?php endforeach; endif; ?>
                        </select>

                    </div>
                    <div class="bbD" id="int">
                        所属分类：<font color="red"> 请先选择城市！</font>

                            <!--<?php if(is_array($ints)): foreach($ints as $key=>$int): ?>-->
                                <!--<input type="checkbox" name="i_id[]" value="<?php echo ($int['i_id']); ?>"><?php echo ($int['i_name']); ?> &nbsp;&nbsp;-->
                            <!--<?php endforeach; endif; ?>-->

                    </div>

                    <div class="bbD">
                        景点简介：
                        <div class="btext" style="width:80%">
							<textarea id='textarea1' name="j_intro"
                                      style="height:400px;">
							</textarea>
                        </div>
                    </div>

                    <div class="bbD">
                        <p class="bbDP">
                            <input type="submit" value="提交" class="btn_ok btn_yes">
                            <input type="reset" value="重置" class="btn_ok btn_yes"
                                   style="margin-left:0px;">
                            <a class="btn_ok btn_no" href="<?php echo U('Admin/Private/prilist');?>">返回</a>
                        </p>
                    </div>
                </form>
            </div>
        </div>

        <!-- 上传广告页面样式end -->
    </div>
</div>
</body>
<!--实例化编辑器js-->
<script type="text/javascript">
    var editor = new wangEditor('textarea1');
    // 上传图片（举例）
    editor.config.uploadImgUrl = "<?php echo U('Admin/Upload/upload4');?>"; //传到upload控制器异步处理图片上传
    editor.config.uploadImgFileName = 'pic'; //相当于《input type=file》的name
    editor.create();
</script>


</html>
<script>
    $('#city').change(function () {
        $.ajax({
            url:'<?php echo U("Admin/Private/getInt");?>',
            type:'get',
            data:{'city_id':this.value},
            dataType:'json',
            success:function (res) {
                $('#int').html('所属分类:&nbsp;&nbsp;&nbsp;&nbsp;');
                if(res.length<1){
                    $('#int').append('<font color="red">暂无分类 表单将无法提交</font>');
                    $('input[type=submit]').attr('disabled','disabled');
                }
                for(var i=0;i<res.length;i++){
                    $('#int').append('<input style="width: 15px;height: 15px;" type="checkbox" name="i_name[]" value="'+res[i].i_name+' ">'+res[i].i_name+'&nbsp;&nbsp;');
                    $('input[type=submit]').removeAttr("disabled");
                }
                console.log(res);
            }
        })

    })


</script>