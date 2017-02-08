<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="Description" content="私人定制 个性定制 旅游" />
<link rel="stylesheet" type="text/css" href="/seeworld/Public/home/assets/1ac7aa43/pager.css" />
<script type="text/javascript" src="/seeworld/Public/home/assets/797febb8/jquery.js"></script>
<title>看世界旅行</title>
<link rel="stylesheet" href="/seeworld/Public/home/css/home.css" />
<script type="application/javascript" src="/seeworld/Public/home/js/json2.js"></script>
<script type="application/javascript" src="/seeworld/Public/home/js/json_parse.js"></script>
<script type="application/javascript" src="/seeworld/Public/home/js/json_parse_state.js"></script>
<script type="application/javascript" src="/seeworld/Public/home/js/cycle.js"></script>
<script type="application/javascript" src="/seeworld/Public/home/js/js.cookie.js"></script>
<script type="application/javascript" src="/seeworld/Public/home/js/jquery.form.min.js"></script>
</head>
<body style="background: #f4f4f4">
<div class="header">
	<a href="<?php echo U('Home/Index/index');?>" class="logo"><img src="/seeworld/Public/home/images/logo.jpg" /></a>
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
			<li><a href="<?php echo U('Home/Travel/travel');?>" class="nav_active"
			>旅行主题</a></li>
			<li><a href="<?php echo U('Home/Rec/rec');?>"
			>独家推荐</a></li>
			<!--<li><a href="<?php echo U('Home/About/about');?>"-->
			<!--&gt;关于我们</a></li>-->
			<li><a class="wx_nav">联系我们
				<div class="ewm">
					<img src="/seeworld/Public/home/images/ewm.jpg" width="85" height="85"> <span>扫描二维码<br>添加关注
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
<style type="text/css">.yiiPager a {
	display: inline-block;
	border-radius: 2px;
	text-align: center;
	margin-left: 5px;
	text-decoration: none;
	font-family: "微软雅黑";
	color: #333;
	font-size: 14px;
}
</style>
<div class="pro_list">
	<div class="wrap1000">
		<div class="crumbs">
			<a href="<?php echo U('Home/Index/index');?>">首页</a> &gt;<span><a href="<?php echo U('Home/Travel/travel');?>">旅行主题</a></span>
			<?php if($get != null): ?><span >><?php echo ($cc); ?></span><?php endif; ?>
		</div>
		<div class="wrap_left">
			
			<div class="pro_list_menu">
				<p>
					<a
							href="<?php echo U('Home/Travel/travel');?>"
							class="active">旅行主题</a>
					<?php if(is_array($cat)): foreach($cat as $key=>$c): ?><a href="<?php echo U('Home/Travel/travel',array('cat_id'=>$c['cat_id']));?>" ><?php echo ($c["cat_name"]); ?></a><?php endforeach; endif; ?>
                </p>
			</div>


			<div class="pro_list_menu1">
				<p>
					<a
						href="javascript:void(0);"
						class="active">综合排序</a>
						<a href="<?php echo U('Home/Travel/descby');?>">价格↓</a>
						<a href="<?php echo U('Home/Travel/ascby');?>">价格↑</a>
				</p>
			</div>           


		
				<?php if(is_array($tra)): foreach($tra as $key=>$t): ?><div class="pro_list_con">
				<div class="base">
					<div class="image">
						<a
							href="<?php echo U('Home/Theme/theme',array('tra_id'=>$t['tra_id']));?>"><img
							class="lazy_img j_lazyImg"
							src="/seeworld<?php echo ($t["tra_thumb"]); ?>"></a>
					</div>
					<div class="detail">
						<div class="left">
							<div class="title" style="width: 475px;">
								<a style="overflow: hidden;white-space: nowrap;text-overflow: ellipsis;" href="<?php echo U('Home/Theme/theme',array('tra_id'=>$t['tra_id']));?>"><?php echo ($t["tra_name"]); ?></a>
							</div>
							<div class="city" title="<?php echo ($t["tra_lx"]); ?>" style="overflow: hidden;white-space: nowrap;text-overflow: ellipsis;"><?php echo ($t["tra_lx"]); ?></div>
							<div class="desc" style="overflow: hidden;white-space: nowrap;text-overflow: ellipsis;">
								行程亮点：<br><?php echo ($t["tra_ld"]); ?></div>
						</div>

						<div class="right">
							<div class="price">￡<?php echo ($t["tra_price"]); ?><span>/人起</span>
							</div>
							<a class="btn"
								href="<?php echo U('Home/Theme/theme',array('tra_id'=>$t['tra_id']));?>">立即预约</a>

						</div>
					</div>
					<div class=" clear"></div>
				</div>
			</div><?php endforeach; endif; ?>




                                <div class="clink_pager">
                            </div>
		</div>
		<div class="wrap_right">
			<div class="persn">
				<a href="<?php echo U('Home/Private/private');?>">&nbsp;私人定制>></a>
			</div>
			<div class="booking">
				<h3>服务预定</h3>
                <a href="<?php echo U('Home/Service/service',['t_name'=>'酒店']);?>">酒店预定</a>
				<a href="<?php echo U('Home/Service/service',['t_name'=>'景点']);?>">景点门票</a>
				<a href="<?php echo U('Home/Service/service',['t_name'=>'剧院']);?>">剧院门票</a>            </div>
			<div class="booking">
				<h3>本站承诺</h3>
				<ul>
					<li class="li_1">真实价格、行程完全透明</li>
					<li class="li_2">专属客服全程服务</li>
					<li class="li_3">千条线路、覆盖全球</li>
					<li class="li_4">出境游品牌、服务保障</li>
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
			<img src="/seeworld/Public/home/images/ewm.jpg" width="85" height="85"> <span>扫描二维码<br>添加关注
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