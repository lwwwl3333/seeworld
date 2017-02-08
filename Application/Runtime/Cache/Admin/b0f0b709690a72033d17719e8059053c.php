<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="Mosaddek">
	<meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
	<link rel="shortcut icon" href="img/favicon.html">

	<title>FlatLab - Flat & Responsive Bootstrap Admin Template</title>

	<!-- Bootstrap core CSS -->
	<link href="/seeworld/Public/index/css/bootstrap.min.css" rel="stylesheet">
	<link href="/seeworld/Public/index/css/bootstrap-reset.css" rel="stylesheet">
	<!--external css-->
	<link href="/seeworld/Public/index/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
	<link href="/seeworld/Public/index/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>
	<link rel="stylesheet" href="/seeworld/Public/admin/index/css/owl.carousel.css" type="text/css">
	<!-- Custom styles for this template -->
	<link href="/seeworld/Public/index/css/style.css" rel="stylesheet">
	<link href="/seeworld/Public/index/css/style-responsive.css" rel="stylesheet" />

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
	<!--[if lt IE 9]>
	<script src="/seeworld/Public/index/js/html5shiv.js"></script>
	<script src="/seeworld/Public/index/js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
<div class="alert alert-block alert-success">
	<button type="button" class="close" data-dismiss="alert"><i class="icon-remove"></i></button>
	<i class="icon-ok green"></i>欢迎来到<strong class="green">SeeWorld后台管理系统<small></small></strong>,你本次登陆时间为<?php echo (date("Y年m月d日 H时i分s秒",$time)); ?>，登陆IP:<?php echo ($ip); ?>
</div>
<section id= class="" style="margin-left: 30px;width: 95%">

	<!--main content start-->
	<section id="">
		<section class="" style="margin-top: 30px;">
			<!--state overview start-->
			<div class="row state-overview">
				<div class="col-lg-3 col-sm-6">
					<section class="panel">
						<div class="symbol terques">
							<i class="icon-user"></i>
						</div>
						<div class="value">
							<h1>22</h1>
							<p>New Users</p>
						</div>
					</section>
				</div>
				<div class="col-lg-3 col-sm-6">
					<section class="panel">
						<div class="symbol red">
							<i class="icon-tags"></i>
						</div>
						<div class="value">
							<h1>140</h1>
							<p>Sales</p>
						</div>
					</section>
				</div>
				<div class="col-lg-3 col-sm-6">
					<section class="panel">
						<div class="symbol yellow">
							<i class="icon-shopping-cart"></i>
						</div>
						<div class="value">
							<h1>345</h1>
							<p>New Order</p>
						</div>
					</section>
				</div>
				<div class="col-lg-3 col-sm-6">
					<section class="panel">
						<div class="symbol blue">
							<i class="icon-bar-chart"></i>
						</div>
						<div class="value">
							<h1>34,500</h1>
							<p>Total Profit</p>
						</div>
					</section>
				</div>
			</div>
			<!--state overview end-->

			<div class="row">
				<div class="col-lg-8">
					<!--custom chart start-->
					<div class="border-head">
						<h3>Earning Graph</h3>
					</div>
					<div class="custom-bar-chart">
						<div class="bar">
							<div class="title">JAN</div>
							<div class="value tooltips" data-original-title="80%" data-toggle="tooltip" data-placement="top">80%</div>
						</div>
						<div class="bar doted">
							<div class="title">FEB</div>
							<div class="value tooltips" data-original-title="50%" data-toggle="tooltip" data-placement="top">50%</div>
						</div>
						<div class="bar ">
							<div class="title">MAR</div>
							<div class="value tooltips" data-original-title="40%" data-toggle="tooltip" data-placement="top">40%</div>
						</div>
						<div class="bar doted">
							<div class="title">APR</div>
							<div class="value tooltips" data-original-title="55%" data-toggle="tooltip" data-placement="top">55%</div>
						</div>
						<div class="bar">
							<div class="title">MAY</div>
							<div class="value tooltips" data-original-title="20%" data-toggle="tooltip" data-placement="top">20%</div>
						</div>
						<div class="bar doted">
							<div class="title">JUN</div>
							<div class="value tooltips" data-original-title="39%" data-toggle="tooltip" data-placement="top">39%</div>
						</div>
						<div class="bar">
							<div class="title">JUL</div>
							<div class="value tooltips" data-original-title="75%" data-toggle="tooltip" data-placement="top">75%</div>
						</div>
						<div class="bar doted">
							<div class="title">AUG</div>
							<div class="value tooltips" data-original-title="45%" data-toggle="tooltip" data-placement="top">45%</div>
						</div>
						<div class="bar ">
							<div class="title">SEP</div>
							<div class="value tooltips" data-original-title="50%" data-toggle="tooltip" data-placement="top">50%</div>
						</div>
						<div class="bar doted">
							<div class="title">OCT</div>
							<div class="value tooltips" data-original-title="42%" data-toggle="tooltip" data-placement="top">42%</div>
						</div>
						<div class="bar ">
							<div class="title">NOV</div>
							<div class="value tooltips" data-original-title="60%" data-toggle="tooltip" data-placement="top">60%</div>
						</div>
						<div class="bar doted">
							<div class="title">DEC</div>
							<div class="value tooltips" data-original-title="90%" data-toggle="tooltip" data-placement="top">90%</div>
						</div>
					</div>
					<!--custom chart end-->
				</div>
				<div class="col-lg-4">
					<!--new earning start-->
					<section class="panel">
						<div class="weather-bg">
							<div class="panel-body">
								<div class="row">
									<div class="col-xs-6">
										<i class="icon-cloud"></i>
										California
									</div>
									<div class="col-xs-6">
										<div class="degree">
											24°
										</div>
									</div>
								</div>
							</div>
						</div>

						<footer class="weather-category">
							<ul>
								<li class="active">
									<h5>humidity</h5>
									56%
								</li>
								<li>
									<h5>precip</h5>
									1.50 in
								</li>
								<li>
									<h5>winds</h5>
									10 mph
								</li>
							</ul>
						</footer>

					</section>
					<!--new earning end-->

					<!--total earning start-->
					<div class="panel green-chart">
						<div class="panel-body">
							<div class="chart">
								<div class="heading">
									<span>June</span>
									<strong>23 Days | 65%</strong>
								</div>
								<div id="barchart"></div>
							</div>
						</div>
						<div class="chart-tittle">
							<span class="title">Total Earning</span>
							<span class="value">$, 76,54,678</span>
						</div>
					</div>
					<!--total earning end-->
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4">
					<!--user info table start-->

					<!--user info table end-->
				</div>
				<div class="col-lg-8">
					<!--work progress start-->

					<!--work progress end-->
				</div>
			</div>
			<div class="row">
				<div class="col-lg-8">
					<!--timeline start-->

					<!--timeline end-->
				</div>
				<div class="col-lg-4">
					<!--revenue start-->

					<!--revenue end-->
					<!--features carousel start-->

					<!--features carousel end-->
				</div>
			</div>
			<div class="row">
				<div class="col-lg-8">
					<!--latest product info start-->

					<!--latest product info end-->
					<!--twitter feedback start-->
					<section class="panel post-wrap pro-box">

						<aside>
							<div class="post-info">
								<span class="arrow-pro left"></span>
								<div class="panel-body">
									<div class="text-center twite">
										<h1>Twitter Feed</h1>
									</div>

									<footer class="social-footer">
										<ul>
											<li>
												<a href="#">
													<i class="icon-facebook"></i>
												</a>
											</li>
											<li class="active">
												<a href="#">
													<i class="icon-twitter"></i>
												</a>
											</li>
											<li>
												<a href="#">
													<i class="icon-google-plus"></i>
												</a>
											</li>
											<li>
												<a href="#">
													<i class="icon-pinterest"></i>
												</a>
											</li>
										</ul>
									</footer>
								</div>
							</div>
						</aside>
					</section>
					<!--twitter feedback end-->
				</div>
				<div class="col-lg-4">

					<!--weather statement start-->
					<div class="panel terques-chart">
						<div class="panel-body chart-texture">
							<div class="chart">
								<div class="heading">
									<span>Friday</span>
									<strong>$ 57,00 | 15%</strong>
								</div>
								<div class="sparkline" data-type="line" data-resize="true" data-height="75" data-width="90%" data-line-width="1" data-line-color="#fff" data-spot-color="#fff" data-fill-color="" data-highlight-line-color="#fff" data-spot-radius="4" data-data="[200,135,667,333,526,996,564,123,890,564,455]"></div>
							</div>
						</div>
						<div class="chart-tittle">
							<span class="title">New Earning</span>
                              <span class="value">
                                  <a href="#" class="active">Market</a>
                                  |
                                  <a href="#">Referal</a>
                                  |
                                  <a href="#">Online</a>
                              </span>
						</div>
					</div>
					<!--weather statement end-->
				</div>
			</div>

		</section>
	</section>
	<!--main content end-->
</section>



<!-- js placed at the end of the document so the pages load faster -->
<script src="/seeworld/Public/index/js/jquery.js"></script>
<script src="/seeworld/Public/index/js/jquery-1.8.3.min.js"></script>
<script src="/seeworld/Public/index/js/bootstrap.min.js"></script>
<script src="/seeworld/Public/index/js/jquery.scrollTo.min.js"></script>
<script src="/seeworld/Public/index/js/jquery.nicescroll.js" type="text/javascript"></script>
<script src="/seeworld/Public/index/js/jquery.sparkline.js" type="text/javascript"></script>
<script src="/seeworld/Public/index/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
<script src="/seeworld/Public/index/js/owl.carousel.js" ></script>
<script src="/seeworld/Public/index/js/jquery.customSelect.min.js" ></script>

<!--common script for all pages-->
<script src="/seeworld/Public/index/js/common-scripts.js"></script>

<!--script for this page-->
<script src="/seeworld/Public/index/js/sparkline-chart.js"></script>
<script src="/seeworld/Public/index/js/easy-pie-chart.js"></script>

<script>

	//owl carousel

	$(document).ready(function() {
		$("#owl-demo").owlCarousel({
			navigation : true,
			slideSpeed : 300,
			paginationSpeed : 400,
			singleItem : true

		});
	});

	//custom select box

	$(function(){
		$('select.styled').customSelect();
	});

</script>

</body>
</html>