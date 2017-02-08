<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="Description" content="私人定制 个性定制 旅游"/>
    <link rel="stylesheet" type="text/css" href="/seeworld/Public/Home/assets/1ac7aa43/pager.css"/>
    <script type="text/javascript" src="/seeworld/Public/Home/assets/797febb8/jquery.js"></script>
    <title>看世界旅行</title>
    <link rel="stylesheet" href="/seeworld/Public/Home/css/home.css"/>
    <script type="application/javascript" src="/seeworld/Public/Home/js/json2.js"></script>
    <script type="application/javascript" src="/seeworld/Public/Home/js/json_parse.js"></script>
    <script type="application/javascript" src="/seeworld/Public/Home/js/json_parse_state.js"></script>
    <script type="application/javascript" src="/seeworld/Public/Home/js/cycle.js"></script>
    <script type="application/javascript" src="/seeworld/Public/Home/js/js.cookie.js"></script>
    <script type="application/javascript" src="/seeworld/Public/Home/js/jquery.form.min.js"></script>
</head>
<body style="background: #f4f4f4">
<div class="header">
    <a href="<?php echo U('Home/Index/index');?>" class="logo"><img src="/seeworld/Public/Home/images/logo.jpg" /></a>
    <div class="navbar">
        <ul>
            <li><a href="<?php echo U('Home/Index/index');?>"  >首页</a></li>
            <li><a href="<?php echo U('Home/Private/private1');?>" >私人定制</a></li>
            <li><a href="<?php echo U('Home/Service/service');?>"
            >服务项目</a>
                <ul>
                    <li><a href="<?php echo U('Home/Service/service',['t_name'=>'酒店']);?>">酒店预订</a></li>
                    <li><a href="<?php echo U('Home/Service/service',['t_name'=>'租车']);?>">当地用车</a></li>
                    <li><a href="<?php echo U('Home/Service/service',['t_name'=>'剧院']);?>">剧院预定</a></li>
                    <li><a href="<?php echo U('Home/Service/service',['t_name'=>'景点']);?>">门票预订</a></li>
                </ul>
            </li>
            <li><a href="<?php echo U('Home/Travel/travel');?>"
            >旅行主题</a></li>
            <li><a href="<?php echo U('Home/Rec/rec');?>" class="nav_active"
            >独家推荐</a></li>
            <!--<li><a href="<?php echo U('Home/About/about');?>"-->
            <!--&gt;关于我们</a></li>-->
            <li><a class="wx_nav">联系我们
                <div class="ewm">
                    <img src="/seeworld/Public/Home/images/ewm.jpg" width="85" height="85"> <span>扫描二维码<br>添加关注
							</span>
                </div>
            </a></li>




            <!--这是首页的登录和注册-->
            <?php if(cookie_check() == 1): ?>欢迎回来<?php echo $_COOKIE['username'];?>
                <a href="<?php echo U('Home/User/logout');?>">退出登陆</a>
                <?php else: ?>
                <a href="<?php echo U('Home/User/login');?>">免费注册</a>
                <a href="<?php echo U('Home/User/login');?>">登录</a><?php endif; ?>



        </ul>

    </div>
</div>
<div class="pro_list new_list">
    <div class="wrap1000">
        <div class="crumbs" >
            <a href="<?php echo U('Home/Index/index');?>">首页</a> &gt;<span><a href="<?php echo U('Home/Rec/rec');?>">独家推荐</a></span>
            <?php if($get != null): ?><span> ><?php echo ($wnn); ?></span><?php endif; ?>
        </div>
        <div class="wrap_left">
            <div class="new_list_menu">
                <p>
                    <a href="<?php echo U('Home/Rec/rec');?>" class="active">全部</a>
                    <?php if(is_array($rec)): foreach($rec as $key=>$re): ?><a href="<?php echo U('Home/Rec/rec',['rec_id'=>$re[rec_id]]);?>" ><?php echo ($re[rec_name]); ?></a><?php endforeach; endif; ?>

                </p>
            </div>

            <div class="new_list_con">
                <?php if(is_array($art)): foreach($art as $key=>$ar): ?><div class="new_list_1">
                    <div class="image">
                        <a
                                href="<?php echo U('Home/Rec/art',['a_id'=>$ar[a_id]]);?>"><img
                                class="lazy_img j_lazyImg"
                                src="/seeworld/<?php echo ($ar[a_img]); ?>"></a>
                    </div>
                    <div class="detail">
                        <div class="title">
                            <a href="<?php echo U('Home/Rec/art',['a_id'=>$ar[a_id]]);?>" title="<?php echo ($ar[a_name]); ?>"><?php echo ($ar[a_name]); ?></a>
                        </div>
                        <div class="desc"><?php echo ($ar[a_intro]); ?></div>
                        <div class="tag">
                            <!-- JiaThis Button BEGIN -->
                            <div class="jiathis_style_16x16"
                                 style="margin-top: 5px; float: left">
                                <a href="http://www.jiathis.com/share"
                                   class="jiathis jiathis_txt jtico jtico_jiathis" target="_blank"
                                   style="background: url('css/images/share_icon.jpg') 0px 0px no-repeat; color: #666; font-size: 14px; line-height: 15px; padding-left: 25px;">分享</a>
                            </div>
                            <script type="text/javascript"
                                    src="http://v3.jiathis.com/code/jia.js" charset="utf-8"></script>
                            <!-- JiaThis Button END -->
                            <span class="pub_time"><?php echo (date("Y-m-d H:i:s",$ar[pubtime])); ?></span>
                        </div>
                    </div>
                    <div class=" clear"></div>
                </div><?php endforeach; endif; ?>


                <div style="text-align: center" ><?php echo ($page); ?></div>

                <div class="clink_pager">
                </div>
            </div>
        </div>
        <div class="wrap_right">
            <div class='new_top'><h3>独家推荐排行榜</h3>
                <ul>
                    <div class="new_top_1"><a href="<?php echo U('Home/Rec/art',['a_id'=>$rank[a_id]]);?>"><img
                            src="/seeworld/<?php echo ($rank[a_img]); ?>">
                        <p><?php echo ($rank[a_name]); ?></p></a></div>
                    <?php if(is_array($dashi)): foreach($dashi as $key=>$da): ?><li style="overflow: hidden;white-space: nowrap;text-overflow: ellipsis;"><a href="<?php echo U('Home/Rec/art',['a_id'=>$da[a_id]]);?>" title="<?php echo ($da[a_name]); ?>"><?php echo ($da[a_name]); ?></a></li><?php endforeach; endif; ?>

                </ul>
            </div>
        </div>
        <div class="clear"></div>
    </div>
</div>

<div class="footer">
    <div class="wrap1000">
        <div class="list-type-footer">
            <h3>旅行</h3>
            <ul>
                <li><a href="#">商务旅行</a></li>
                <li><a href="#">主题旅行</a></li>
                <li><a href="#">文化旅行</a></li>
                <li><a href="#">经典线路游</a></li>
            </ul>
        </div>
        <div class="list-type-footer">
            <h3>教育</h3>
            <ul>
                <li><a href="#">企业（名校）培训</a></li>
                <li><a href="#">贵族学校推荐学习</a></li>
                <li><a href="#">企业家EMBA培训</a></li>
                <li><a href="#">青少年夏（冬）令营</a></li>
            </ul>
        </div>
        <div class="list-type-footer">
            <h3>时尚之旅</h3>
            <ul>
                <li><a href="#">经典品牌导航</a></li>
                <li><a href="#">淘宝藏品发掘</a></li>
                <li><a href="#">古玩文玩淘宝</a></li>
            </ul>
        </div>
        <div class="list-type-footer list-type-footer1">
            <h3>商务</h3>
            <ul>
                <li><a href="#">商业投资</a></li>
                <li><a href="#">商务考察</a></li>
                <li><a href="#">品牌推广</a></li>
            </ul>
        </div>
        <div class="ewm">
            <img src="/seeworld/Public/Home/images/ewm.jpg" width="85" height="85"> <span>扫描二维码<br>添加关注
				</span>
        </div>

    </div>
    <div class="clear"></div>
</div>
<div class="footer1">
    <div class="footer1_nav">
        <a href="<?php echo U('Home/Index/index');?>">首页</a>|<a href="<?php echo U('Home/Travel/travel');?>">主题线路</a>|<a
            href="<?php echo U('Home/Rec/rec');?>">独家推荐</a>|<a href="<?php echo U('Home/About/about');?>">关于我们</a>
    </div>
    <p>
        北京市昌平区瑶光路 <br>电话：15553572753 &nbsp;&nbsp;
        Email: junhe2333@gmail.com
    </p>
</div>
</body>
</html>
<style>
    .current{
        font-size: 20px;
        color: rgb(153,153,153);
        padding-right: 5px;

    }
    .num{
        font-size:20px;
        color:rgb(52,98,142);
        padding-right: 5px;
    }
    .end{
        font-size: 20px;
        color: rgb(752,98,142);
    }
    .prev,.next,.first{
        font-size: 15px;
        color: rgb(52,98,142);
        padding-right: 5px;
    }
</style>