<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>首页左侧导航</title>
    <link rel="stylesheet" type="text/css" href="/seeworld/Public/admin/css/public.css"/>
    <script type="text/javascript" src="/seeworld/Public/admin/js/jquery.min.js"></script>
    <script type="text/javascript" src="/seeworld/Public/admin/js/public.js"></script>
    <head></head>

<body id="bg">
<!-- 左边节点 -->
<div class="container">

    <div class="leftsidebar_box">
        <a href="<?php echo U('Admin/Index/main');?>" target="main">
            <div class="line">
                <img src="/seeworld/Public/admin/img/coin01.png"/>&nbsp;&nbsp;首页
            </div>
        </a>
        <!-- <dl class="system_log">
        <dt><img class="icon1" src="/seeworld/Public/admin/img/coin01.png" /><img class="icon2"src="/seeworld/Public/admin/img/coin02.png" />
            首页<img class="icon3" src="/seeworld/Public/admin/img/coin19.png" /><img class="icon4" src="/seeworld/Public/admin/img/coin20.png" /></dt>
    </dl> -->

        <dl class="system_log">
            <dt>
                <img class="icon1" src="/seeworld/Public/admin/img/coin05.png"/><img class="icon2"
                                                                               src="/seeworld/Public/admin/img/coin06.png"/>
                图片管理<img class="icon3"
                         src="/seeworld/Public/admin/img/coin19.png"/><img class="icon4"
                                                                     src="/seeworld/Public/admin/img/coin20.png"/>
            </dt>
            <dd>
                <img class="coin11" src="/seeworld/Public/admin/img/coin111.png"/><img class="coin22"
                                                                                 src="/seeworld/Public/admin/img/coin222.png"/><a
                    class="cks" href="<?php echo U('Admin/Lunbo/lunboadd');?>"
                    target="main">轮播图添加</a><img class="icon5" src="/seeworld/Public/admin/img/coin21.png"/>
            </dd>
            <dd>
                <img class="coin11" src="/seeworld/Public/admin/img/coin111.png"/><img class="coin22"
                                                                                 src="/seeworld/Public/admin/img/coin222.png"/><a
                    class="cks" href="<?php echo U('Admin/Lunbo/lunbolist');?>"
                    target="main">轮播图列表</a><img class="icon5" src="/seeworld/Public/admin/img/coin21.png"/>
            </dd>
        </dl>
        <dl class="system_log">
            <dt>
                <img class="icon1" src="/seeworld/Public/admin/img/coin07.png"/><img class="icon2"
                                                                               src="/seeworld/Public/admin/img/coin08.png"/>
                服务项目<img class="icon3"
                         src="/seeworld/Public/admin/img/coin19.png"/><img class="icon4"
                                                                     src="/seeworld/Public/admin/img/coin20.png"/>
            </dt>
            <dd>
                <img class="coin11" src="/seeworld/Public/admin/img/coin111.png"/><img class="coin22"
                                                                                 src="/seeworld/Public/admin/img/coin222.png"/><a
                    href="<?php echo U('Admin/Service/serlist');?>" target="main"
                    class="cks">服务项目</a><img class="icon5" src="/seeworld/Public/admin/img/coin21.png"/>
            </dd>

        </dl>
        <dl class="system_log">
            <dt>
                <img class="icon1" src="/seeworld/Public/admin/img/coin03.png"/><img class="icon2"
                                                                               src="/seeworld/Public/admin/img/coin04.png"/>
                私人定制<img class="icon3"
                         src="/seeworld/Public/admin/img/coin19.png"/><img class="icon4"
                                                                     src="/seeworld/Public/admin/img/coin20.png"/>
            </dt>
            <dd>
                <img class="coin11" src="/seeworld/Public/admin/img/coin111.png"/><img class="coin22"
                                                                                 src="/seeworld/Public/admin/img/coin222.png"/><a
                    class="cks" href="<?php echo U('Admin/Private/prilist');?>"
                    target="main">景点列表</a><img class="icon5" src="/seeworld/Public/admin/img/coin21.png"/>
            </dd>
        </dl>
        <dl class="system_log">
            <dt>
                <img class="icon1" src="/seeworld/Public/admin/img/coin10.png"/><img class="icon2"
                                                                               src="/seeworld/Public/admin/img/coin09.png"/>
                旅行主题<img class="icon3"
                         src="/seeworld/Public/admin/img/coin19.png"/><img class="icon4"
                                                                     src="/seeworld/Public/admin/img/coin20.png"/>
            </dt>
            <dd>
                <img class="coin11" src="/seeworld/Public/admin/img/coin111.png"/><img class="coin22"
                                                                                 src="/seeworld/Public/admin/img/coin222.png"/><a
                    href="<?php echo U('Admin/Cat/catlist');?>"
                    target="main" class="cks">主题栏目</a><img class="icon5"
                                                           src="/seeworld/Public/admin/img/coin21.png"/>
            </dd>
            <dd>
                <img class="coin11" src="/seeworld/Public/admin/img/coin111.png"/><img class="coin22"
                                                                                 src="/seeworld/Public/admin/img/coin222.png"/><a
                    href="<?php echo U('Admin/Travel/tralist');?>"
                    target="main" class="cks">旅行项目</a><img class="icon5"
                                                           src="/seeworld/Public/admin/img/coin21.png"/>
            </dd>
            <dd>
                <img class="coin11" src="/seeworld/Public/admin/img/coin111.png"/><img class="coin22"
                                                                                 src="/seeworld/Public/admin/img/coin222.png"/><a
                    href="<?php echo U('Admin/Date/datelist');?>"
                    target="main" class="cks">出行时间</a><img class="icon5"
                                                           src="/seeworld/Public/admin/img/coin21.png"/>
            </dd>
        </dl>
        <dl class="system_log">
            <dt>
                <img class="icon1" src="/seeworld/Public/admin/img/coin11.png"/><img class="icon2"
                                                                               src="/seeworld/Public/admin/img/coin12.png"/>
                独家推荐<img class="icon3"
                         src="/seeworld/Public/admin/img/coin19.png"/><img class="icon4"
                                                                     src="/seeworld/Public/admin/img/coin20.png"/>
            </dt>
            <dd>
                <img class="coin11" src="/seeworld/Public/admin/img/coin111.png"/><img class="coin22"
                                                                                 src="/seeworld/Public/admin/img/coin222.png"/><a
                    href="<?php echo U('Admin/Rec/artlist');?>" target="main"
                    class="cks">推荐列表</a><img class="icon5" src="/seeworld/Public/admin/img/coin21.png"/>
            </dd>

        </dl>


        <dl class="system_log">
            <dt>
                <img class="icon1" src="/seeworld/Public/admin/img/coin17.png"/><img class="icon2"
                                                                               src="/seeworld/Public/admin/img/coin18.png"/>
                出行计划<img class="icon3"
                         src="/seeworld/Public/admin/img/coin19.png"/><img class="icon4"
                                                                     src="/seeworld/Public/admin/img/coin20.png"/>
            </dt>
            <dd>
                <img class="coin11" src="/seeworld/Public/admin/img/coin111.png"/><img class="coin22"
                                                                                 src="/seeworld/Public/admin/img/coin222.png"/><a
                    href="<?php echo U('Admin/Plan/planlist');?>"
                    target="main" class="cks">旅行预约</a><img class="icon5"
                                                           src="/seeworld/Public/admin/img/coin21.png"/>
            </dd>
            <dd>
                <img class="coin11" src="/seeworld/Public/admin/img/coin111.png"/><img class="coin22"
                                                                                 src="/seeworld/Public/admin/img/coin222.png"/><a
                    href="<?php echo U('Admin/Plan/serlist');?>"
                    target="main" class="cks">服务预约</a><img class="icon5"
                                                           src="/seeworld/Public/admin/img/coin21.png"/>
            </dd>
            <dd>
                <img class="coin11" src="/seeworld/Public/admin/img/coin111.png"/><img class="coin22"
                                                                                 src="/seeworld/Public/admin/img/coin222.png"/><a
                    href="<?php echo U('Admin/Plan/prilist');?>"
                    target="main" class="cks">私人定制预约</a><img class="icon5"
                                                           src="/seeworld/Public/admin/img/coin21.png"/>
            </dd>
        </dl>
        <dl class="system_log">
            <dt>
                <img class="icon1" src="/seeworld/Public/admin/img/coinL1.png"/><img class="icon2"
                                                                               src="/seeworld/Public/admin/img/coinL2.png"/>
                系统管理<img class="icon3"
                         src="/seeworld/Public/admin/img/coin19.png"/><img class="icon4"
                                                                     src="/seeworld/Public/admin/img/coin20.png"/>
            </dt>
            <dd>
                <img class="coin11" src="/seeworld/Public/admin/img/coin111.png"/><img class="coin22"
                                                                                 src="/seeworld/Public/admin/img/coin222.png"/><a
                    href="../changepwd.html"
                    target="main" class="cks">修改密码</a><img class="icon5"
                                                           src="/seeworld/Public/admin/img/coin21.png"/>
            </dd>
            <dd>
                <img class="coin11" src="/seeworld/Public/admin/img/coin111.png"/><img class="coin22"
                                                                                 src="/seeworld/Public/admin/img/coin222.png"/><a
                    class="cks">退出</a><img
                    class="icon5" src="/seeworld/Public/admin/img/coin21.png"/>
            </dd>
        </dl>

    </div>

</div>
</body>
</html>