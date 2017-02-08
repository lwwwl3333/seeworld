<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="Description" content=" 私人定制 个性定制 旅游" />
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



<!--[if IE]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<script>
	if (navigator.userAgent.toLowerCase().indexOf('firefox') > -1) {
		var root = document.getElementsByTagName('html')[0];
		root.setAttribute('class', 'ff');
	};
</script>

<body style="background: #f4f4f4">
	<div class="header">
		<a href="<?php echo U('Home/Index/index');?>" class="logo"><img src="/seeworld/Public/home/images/logo.jpg" /></a>
		<div class="navbar">
			<ul>
				<li><a href="<?php echo U('Home/Index/index');?>" class="nav_active" >首页</a></li>
				<li><a href="<?php echo U('Home/Private/private1');?>">私人定制</a></li>
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
<link rel="stylesheet" type="text/css" href="/seeworld/Public/home/css/slider4.css">
<script type="text/javascript" src="/seeworld/Public/home/js/jquery.anythingslider.min.js"></script>
<script type="text/javascript">

    var slider4 = ['私人定制<br><span style="font-size:12px; color:#999;">个性旅行 随心所欲</span>',
        '风情文化<br><span style="font-size:12px; color:#999;">特色体验 尊享人生</span>',
        '落地参团<br><span style="font-size:12px; color:#999;">最佳性价 服务保证</span>',
        '当地服务<br><span style="font-size:12px; color:#999;">省时省心 轻松出行</span>'];
    function formatText(index, panel) {
        return slider4[index - 1];
    }

    $(document).ready(function () {
        $('#slider4').anythingSlider({
            autoPlay: true,
            hashTags: false,
            buildArrows: true,
            delay: 5000,
			buildNavigation: false,
            buildStartStop: false
        });


    });
    $(function(){
    	$(".home0 li").eq(3).addClass("last_li");
    	$(".home3 li").eq(3).addClass("last_li");
        $(".home1 li").eq(3).addClass("last_li");
        $(".home1 li").eq(7).addClass("last_li");
        $(".home2 li").eq(3).addClass("last_li");
        $(".home2 li").eq(7).addClass("last_li");
        $(".home4 li").eq(3).addClass("last_li");

    });

</script>
<div class="mst-banner">
	<div class="masthead4" id="slider-wrp">
		<ul id="slider4">
						<?php if(is_array($lunbos)): foreach($lunbos as $key=>$lunbo): ?><li class="ms-col1 cols cus-pointer"
					style="cursor: pointer;"><a href="<?php echo U('Home/Travel/travel',['cat_id'=>$lunbo[cat_id]]);?>">
								<img src="/seeworld<?php echo ($lunbo[lun_path]); ?>"
									 style=" position:relative; padding-left:50%; margin-left:-960px"></a></li><?php endforeach; endif; ?>

		</ul>

</div>
	<div class="clear"></div>
</div>
<div class="anythingSlider"  >
	<div class="anythingControls">
		<ul class="thumbNav"><li class="first"><a class="panel1" href="./#p1"><span>私人定制<br><span style="font-size:12px; color:#999;">个性旅行 随心而选</span></span></a></li><li><a class="panel2" href="./#p2"><span>风情文化<br><span style="font-size:12px; color:#999;">特色体验  尊享行程</span></span></a></li><li><a class="panel3" href="./#p3"><span>落地参团<br><span style="font-size:12px; color:#999;">最佳性价 服务保障</span></span></a></li><li class="last"><a class="panel4" href="./#p4"><span>当地服务<br><span style="font-size:12px; color:#999;">省时省心 轻松出行</span></span></a></li></ul></div>
</div>
	<a id="p1"></a>
<div class="home_con" style="margin-top:80px;background:#ffffff">
	<div class="wrap1000">
		<h2>私人定制</h2>
		<p>个性旅行，随心而选</p>
		<a href="<?php echo U('Home/Private/private1');?>" class="srdz_img"><img src="/seeworld/Public/home/images/srdz_img.jpg" ></a>
		<a href="<?php echo U('Home/Private/private1');?>" class="srdz_btn">开启我的定制之旅</a>
		<div class="clear"></div>
	</div>
</div>


<div class="home_con home3" style="background:#f0f0f0">
	<div class="wrap1000">
		<h2>VIP特色行程</h2>
		<p>独家推荐，精品制定</p>
		<ul>
			<?php if(is_array($vips)): foreach($vips as $key=>$vip): ?><li><a href="<?php echo U('Home/Theme/theme',['tra_id'=>$vip[tra_id]]);?>"><img
					src="/seeworld<?php echo ($vip[tra_thumb]); ?>">
					<div class="li_info" style="overflow: hidden;white-space: nowrap;text-overflow: ellipsis;">
						<?php echo ($vip[tra_name]); ?>
					</div> </a></li><?php endforeach; endif; ?>

                        </ul>
		<div class="clear"></div>
	</div>
</div>
	<a id="p3"></a>
<div class="home_con2 home_con3 home1">
	<div class="wrap1000">
		<h2>落地参团</h2>
		<p>轻松报团，最佳性价</p>
		<ul>
			<?php if(is_array($tras)): foreach($tras as $key=>$tra): ?><li><a href="<?php echo U('Home/Theme/theme',['tra_id'=>$tra[tra_id]]);?>"><img
					src="/seeworld<?php echo ($tra[tra_thumb]); ?>">
					<div class="home_con2_tit">
						<p id='homep' style="overflow: hidden;white-space: nowrap;text-overflow: ellipsis;"><?php echo ($tra[tra_name]); ?></p>
						<span>￡<?php echo ($tra[tra_price]); ?></span>
					</div> </a></li><?php endforeach; endif; ?>
                        </ul>
		<div class="clear"></div>
	</div>
</div>
	<a id="p4"></a>
<div class="home_con2 home0">
	<div class="wrap1000">
		<h2>出行服务</h2>
		<p>省时省心，轻松出行</p>
		<ul>
                             <li><a
				href="<?php echo U('Home/Service/service',['t_name'=>'导服']);?>"><img
					src="/seeworld/Public/home/upload/attached/thumb/20161027/58121461b17b8.jpg">
					<div class="home_con3_tit">
						<p>当地导服</p>

					</div> </a></li>
                                 <li><a
				href="<?php echo U('Home/Service/service',['t_name'=>'租车']);?>"><img
					src="/seeworld/Public/home/upload/attached/thumb/20160922/57e380607d20d.jpg">
					<div class="home_con3_tit">
						<p>租车服务</p>

					</div> </a></li>
                                 <li><a
				href="<?php echo U('Home/Service/service',['t_name'=>'司兼导']);?>"><img
					src="/seeworld/Public/home/upload/attached/thumb/20160922/57e37f8c0d97b.jpg">
					<div class="home_con3_tit">
						<p>司兼导游</p>

					</div> </a></li>
                                 <li><a
				href="<?php echo U('Home/Service/service',['t_name'=>'酒店']);?>"><img
					src="/seeworld/Public/home/upload/attached/thumb/20160922/57e37ffbb1469.jpg">
					<div class="home_con3_tit">
						<p>酒店预订</p>

					</div> </a></li>
                        </ul>
		<div class="clear"></div>
	</div>
</div>

	<a id="p2"></a>
<div class="home_con2 home_con3 home2">
	<div class="wrap1000">
		<h2>风情文化</h2>
		<p>Enjoy Local Cutule  Expression</p>
		<ul>
			<?php if(is_array($arts)): foreach($arts as $key=>$art): ?><li ><a href="<?php echo U('Home/Rec/art',['a_id'=>$art[a_id]]);?>"><img
					src="/seeworld/<?php echo ($art[a_img]); ?>">
					<div class="home_con2_tit">
						<div class="home_con2_tit">
							<h3 style="overflow: hidden;white-space: nowrap;text-overflow: ellipsis;"><?php echo ($art[a_name]); ?></h3>
							<p ><?php echo ($art['a_intro']); ?></p>
							<div>...</div>
						</div></a></li><?php endforeach; endif; ?>


                
        </ul>
		<div class="clear"></div>
	</div>
</div>

<div class="home_con4">
	<div class="wrap1000">
		<h2>服务项目</h2>
		<p>What Customer Say About Us And Why Love Our Services!</p>
		<ul>
			<li>
				<a href="">
				<img src="/seeworld/Public/home/images/se_icon1.png">
				<div class="home_con4_tit">
					<h3>主题之旅</h3>
					<p>我们拥有多条经典路线可供顾客参考和选择。我们结合多年的旅团经验，为不同年龄不同喜好的客人设计多条出游方案。这些方案不但节约您出行的时间，压缩更多更有趣的经典风光，以最大性价比的方式带给您不同的旅行感受。 </p>
				</div>
				</a>
			</li>
			<li class="last_li"><img src="/seeworld/Public/home/images/se_icon2.png">
				<a href="">
				<div class="home_con4_tit">
					<h3>教育培训</h3>
					<p>多年专业从事游学经验，为学生定制夏（冬）令营计划，拒绝照搬游学模板，拒绝无聊的行程安排，拒绝无效率的课程，坚持一对一私人定制，打造专属孩子的VIP计划。
						提供企业专属行业牛剑明校教育培训，为中国企业家学习深造提供最佳细节服务。  </p>
				</div>
					</a>
			</li>
			<li><a href="">
				<img src="/seeworld/Public/home/images/se_icon3.png">
				<div class="home_con4_tit">
					<h3>投资移民</h3>
					<p>我们拥有多年经验为客户提供海外投资项目资源整合服务，提供最切合实际和落地盈利的投资移民方案。</p>
				</div>
					</a>
			</li>
			<li class="last_li"><a href="">
				<img src="/seeworld/Public/home/images/se_icon4.png">
				<div class="home_con4_tit">
					<h3>商务活动</h3>
					<p>专业于活动组织策划，国际知名品牌企业合作活动， 满足海外会展，商务考察，海外投资需求。
					</p>
				</div>
					</a>
			</li>
		</ul>
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