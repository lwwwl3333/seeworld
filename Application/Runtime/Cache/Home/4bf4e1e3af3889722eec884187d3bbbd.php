<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en" class="no-js">

<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Card Expansion Effect - Demo 4</title>
<meta name="description" content="Card Expansion Effect with SVG clipPath" />
<meta name="keywords" content="clipPath, svg, effect, layout, expansion, images, grid, polygon" />
<meta name="author" content="Claudio Calautti for Codrops" />
<link rel="shortcut icon" href="favicon.ico">
<link rel="stylesheet" type="text/css" href="/seeworld/Public/about/css/normalize.css" />
<link rel="stylesheet" type="text/css" href="/seeworld/Public/about/fonts/font-awesome-4.3.0/css/font-awesome.min.css" />
<link rel="stylesheet" type="text/css" href="/seeworld/Public/about/css/demo.css" />

<!--必要样式-->
<link rel="stylesheet" type="text/css" href="/seeworld/Public/about/css/card-4.css" />
<link rel="stylesheet" type="text/css" href="/seeworld/Public/about/css/pattern-4.css" />
<!--[if IE]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<script>
if (navigator.userAgent.toLowerCase().indexOf('firefox') > -1) {
	var root = document.getElementsByTagName('html')[0];
	root.setAttribute('class', 'ff');
};
</script>

	<link rel="stylesheet" href="/seeworld/Public/Home/css/home.css" />
</head>

<body class="demo-4">
<div class="header">
	<a href="<?php echo U('Home/Index/index');?>" class="logo"><img src="/seeworld/Public/Home/images/logo.jpg" /></a>
	<div class="navbar">
		<ul>
			<li><a href="<?php echo U('Home/Index/index');?>"class="nav_active" >首页</a></li>
			<li><a href="<?php echo U('Home/Service/service',array('coun_id'=>1,'city_id'=>1));?>"
			>服务项目</a>
				<ul>
					<li><a href="<?php echo U('Home/Travel/travel');?>">当地参团</a></li>
					<li><a href="<?php echo U('Home/Index/index');?>">私人定制</a></li>
					<li><a href="<?php echo U('Home/Service/service',['type_id'=>4]);?>">酒店预订</a></li>
					<li><a href="<?php echo U('Home/Service/service',['type_id'=>2]);?>">当地用车</a></li>
					<li><a href="<?php echo U('Home/Service/service',['type_id'=>6]);?>">剧院预定</a></li>
					<li><a href="<?php echo U('Home/Service/service',['type_id'=>5]);?>">门票预订</a></li>
				</ul>
			</li>
			<li><a href="<?php echo U('Home/Travel/travel');?>"
			>旅行主题</a></li>
			<li><a href="<?php echo U('Home/Rec/rec');?>"
			>独家推荐</a></li>
			<li><a href="<?php echo U('Home/About/about');?>"
			>关于我们</a></li>
			<li><a class="wx_nav">联系我们
				<div class="ewm">
					<img src="/seeworld/Public/Home/images/ewm.jpg" width="85" height="85"> <span>扫描二维码<br>关注微信公众号
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

    <div class="container">
        <div class="content">
            <!-- trianglify pattern container -->
            <div class="pattern pattern--hidden"></div>
            <!-- cards -->
            <div class="wrapper">
                <div class="card">
                    <div class="card__container card__container--closed">
                        <svg class="card__image" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1920 1200" preserveAspectRatio="xMidYMid slice">
                            <defs>
                                <clipPath id="clipPath1">
                                    <polygon class="clip" points="0,1200 0,0 1920,0 1920,1200"></polygon>
                                </clipPath>
                            </defs>
                            <image clip-path="url(#clipPath1)" width="1920" height="1200" xlink:href="/seeworld/Public/about/img/g.jpg"></image>
                        </svg>
                        <div class="card__content">
							<i class="card__btn-close fa fa-times"></i>
							<div class="card__caption">
								<h2 class="card__title">刘雄风</h2>
								<p class="card__subtitle">负责订单、后台登陆模块</p>
							</div>
							<div class="card__copy">
								<div class="meta">
									<!--<img class="meta__avatar" src="/seeworld/Public/about/img/authors/1.png" alt="author01" />-->
									<span class="meta__author"></span>
									<span class="meta__date">11/11/2016</span>
								</div>
								<p></p>
								</div>
						</div>
					</div>
                </div>
                <div class="card">
                    <div class="card__container card__container--closed">
                        <svg class="card__image" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1920 1200" preserveAspectRatio="xMidYMid slice">
                            <defs>
                                <clipPath id="clipPath2">
                                    <polygon class="clip" points="0,1200 0,0 1920,0 1920,1200"></polygon>
                                </clipPath>
                            </defs>
                            <image clip-path="url(#clipPath2)" width="1920" height="1200" xlink:href="/seeworld/Public/about/img/h.jpg"></image>
                        </svg>
                        <div class="card__content">
							<i class="card__btn-close fa fa-times"></i>
							<div class="card__caption">
								<h2 class="card__title">倪洪磊</h2>
								<p class="card__subtitle">负责旅游项目模块</p>
							</div>
							<div class="card__copy">
								<div class="meta">
									<!--<img class="meta__avatar" src="/seeworld/Public/about/img/authors/2.png" alt="author02" />-->
									<!--<span class="meta__author">Frank Posterius</span>-->
									<span class="meta__date">11/11/2016</span>
								</div>
								<p></p>
								</div>
						</div>
					</div>
                </div>
                <div class="card">
                    <div class="card__container card__container--closed">
                        <svg class="card__image" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1920 1200" preserveAspectRatio="xMidYMid slice">
                            <defs>
                                <clipPath id="clipPath3">
                                    <polygon class="clip" points="0,1200 0,0 1920,0 1920,1200"></polygon>
                                </clipPath>
                            </defs>
                            <image clip-path="url(#clipPath3)" width="1920" height="1200" xlink:href="/seeworld/Public/about/img/i.jpg"></image>
                        </svg>
                        <div class="card__content">
							<i class="card__btn-close fa fa-times"></i>
							<div class="card__caption">
								<h2 class="card__title">王河钧</h2>
								<p class="card__subtitle">负责独家推荐模块</p>
							</div>
							<div class="card__copy">
								<div class="meta">
									<!--<img class="meta__avatar" src="/seeworld/Public/about/img/authors/3.png" alt="author03" />-->
									<!--<span class="meta__author">Sarah Lester</span>-->
									<span class="meta__date">11/11/2016</span>
								</div>
								<p></p>
								</div>
						</div>
					</div>
                </div>
                <div class="card">
                    <div class="card__container card__container--closed">
                        <svg class="card__image" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1920 1200" preserveAspectRatio="xMidYMid slice">
                            <defs>
                                <clipPath id="clipPath4">
                                    <polygon class="clip" points="0,1200 0,0 1920,0 1920,1200"></polygon>
                                </clipPath>
                            </defs>
                            <image clip-path="url(#clipPath4)" width="1920" height="1200" xlink:href="/seeworld/Public/about/img/l.jpg"></image>
                        </svg>
                        <div class="card__content">
							<i class="card__btn-close fa fa-times"></i>
							<div class="card__caption">
								<h2 class="card__title">王金刚</h2>
								<p class="card__subtitle">负责前台登陆、旅行起始时间模块</p>
							</div>
							<div class="card__copy">
								<div class="meta">
									<!--<img class="meta__avatar" src="/seeworld/Public/about/img/authors/4.png" alt="author04" />-->
									<!--<span class="meta__author">Lena Bestofos</span>-->
									<span class="meta__date">11/11/2016</span>
								</div>
								<p></p>
								</div>
						</div>
					</div>
                </div>
                <div class="card">
                    <div class="card__container card__container--closed">
                        <svg class="card__image" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1920 1200" preserveAspectRatio="xMidYMid slice">
                            <defs>
                                <clipPath id="clipPath5">
                                    <polygon class="clip" points="0,1200 0,0 1920,0 1920,1200"></polygon>
                                </clipPath>
                            </defs>
                            <image clip-path="url(#clipPath5)" width="1920" height="1200" xlink:href="/seeworld/Public/about/img/m.jpg"></image>
                        </svg>
                        <div class="card__content">
							<i class="card__btn-close fa fa-times"></i>
							<div class="card__caption">
								<h2 class="card__title">张启</h2>
								<p class="card__subtitle">负责项目服务模块</p>
							</div>
							<div class="card__copy">
								<div class="meta">
									<!--<img class="meta__avatar" src="/seeworld/Public/about/img/authors/5.png" alt="author05" />-->
									<!--<span class="meta__author">Michaela Walters</span>-->
									<span class="meta__date">11/11/2016</span>
								</div>
								<p></p>
								</div>
						</div>
					</div>
                </div>
                <div class="card">
                    <div class="card__container card__container--closed">
                        <svg class="card__image" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1920 1200" preserveAspectRatio="xMidYMid slice">
                            <defs>
                                <clipPath id="clipPath6">
                                    <polygon class="clip" points="0,1200 0,0 1920,0 1920,1200"></polygon>
                                </clipPath>
                            </defs>
                            <image clip-path="url(#clipPath6)" width="1920" height="1200" xlink:href="/seeworld/Public/about/img/n.jpg"></image>
                        </svg>
                        <div class="card__content">
							<i class="card__btn-close fa fa-times"></i>
							<div class="card__caption">
								<h2 class="card__title">张振北</h2>
								<p class="card__subtitle">负责轮播图模块、前台页面的完善</p>
							</div>
							<div class="card__copy">
								<div class="meta">
									<!--<img class="meta__avatar" src="/seeworld/Public/about/img/authors/6.png" alt="author06" />-->
									<!--<span class="meta__author">Tom Goldman</span>-->
									<span class="meta__date">11/11/2016</span>
								</div>
								<p></p>
								</div>
						</div>
					</div>
                </div>
            </div>
            <!-- /cards -->
        </div>

    </div>
    <!-- /container -->
    <!-- JS -->
    <script type="text/javascript" src="/seeworld/Public/about/js/vendors/trianglify.min.js"></script>
    <script type="text/javascript" src="/seeworld/Public/about/js/vendors/TweenMax.min.js"></script>
    <script type="text/javascript" src="/seeworld/Public/about/js/vendors/ScrollToPlugin.min.js"></script>
    <script type="text/javascript" src="/seeworld/Public/about/js/vendors/cash.min.js"></script>
    <script type="text/javascript" src="/seeworld/Public/about/js/Card-polygon-4.js"></script>
    <script type="text/javascript" src="/seeworld/Public/about/js/demo-4.js"></script>
	
	
</body>
</html>