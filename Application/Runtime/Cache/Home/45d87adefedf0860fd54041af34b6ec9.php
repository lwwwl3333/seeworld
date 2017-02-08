<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="Keywords" content="英国格莱文特" />
<meta name="Description" content="英国格莱文行 私人定制 个性定制 旅游" />
<link rel="stylesheet" type="text/css" href="/seeworld/Public/assets/1ac7aa43/pager.css" />
<script type="text/javascript" src="/seeworld/Public/assets/797febb8/jquery.js"></script>
<title>看世界旅行</title>
<link rel="stylesheet" href="/seeworld/Public/Home/css/home.css" />
<script type="application/javascript" src="/seeworld/Public/js/json2.js"></script>
<script type="application/javascript" src="/seeworld/Public/js/json_parse.js"></script>
<script type="application/javascript" src="/seeworld/Public/js/json_parse_state.js"></script>
<script type="application/javascript" src="/seeworld/Public/js/cycle.js"></script>
<script type="application/javascript" src="/seeworld/Public/js/js.cookie.js"></script>
<script type="application/javascript" src="/seeworld/Public/js/jquery.form.min.js"></script>
</head>
<body style="background: #f4f4f4">
	<div class="header">
		<a href="index.html" class="logo"><img src="/seeworld/Public/Home/images/logo.jpg" /></a>
		<div class="navbar">
			<ul>
				<li><a href="index.html" >首页</a></li>
				<li><a href="index.php-r=book%7Cindex.html"
						>服务项目</a>
					<ul>
						<li><a href="<?php echo U('Home/Travel/travel');?>">当地参团</a></li>
						<li><a href="<?php echo U('Home/Index/index');?>">私人定制</a></li>
						<li><a href="<?php echo U('Home/Service/service',['type_id'=>4]);?>">酒店预订</a></li>
						<li><a href="<?php echo U('Home/Service/service',['type_id'=>2]);?>">当地用车</a></li>
						<li><a href="<?php echo U('Home/Service/service'),['type_id'=>6];?>">剧院预定</a></li>
						<li><a href="<?php echo U('Home/Service/service'),['type_id'=>5];?>">门票预订</a></li>
					</ul>
				</li>
				<li><a href="index.php-r=line%7Cindex.html"
					 class="nav_active"
					>旅行主题</a></li>
				<li><a href="index.php-r=post%7Cindex.html"
					>独家推荐</a></li>
				<li><a href="index.php-r=company%7Cinfo.html"
					>关于我们</a></li>
				<li><a class="wx_nav">联系我们
						<div class="ewm">
							<img src="/seeworld/Public/Home/images/ewm.jpg" width="85" height="85"> <span>扫描二维码<br>关注微信公众号
							</span>
						</div>
				</a></li>
				<li class="lan"><a href="en/index.html">English</a></li>
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
			<a href="index.html">首页</a> &gt;<span><a href="<?php echo U('Home/Cat/cat');?>">旅行主题</a></span>
		</div>
		<div class="wrap_left">
			<div class="pro_list_menu">
				<p>
					<span>旅行主题：</span>
                    <?php if(is_array($lanmu)): foreach($lanmu as $key=>$cat): ?><a  href="<?php echo U('Home/Cat/cat',array('cat_id'=>$cat['cat_id']));?>"><?php echo ($cat['cat_name']); ?></a><?php endforeach; endif; ?>  
                </p>
			</div>
			<div class="pro_list_menu1">
				<p>
					<a
						href="<?php echo U('Home/Cat/cat',array('desc'=>1));?>"
						class="active">价格升序</a>

				     <a  class="active"
						href="<?php echo U('Home/Cat/cat',array('desc'=>10));?>">价格降序</a>
				</p>
			</div>



		<?php if(is_array($trinfo)): foreach($trinfo as $key=>$trav): ?><div class="pro_list_con">
				<div class="base">
					<div class="image">
						<a
							href="index.php-r=line%7Cview&amp;id=14.html"><img
							class="lazy_img j_lazyImg"
							src="/seeworld/Public/upload/attached/thumb/20161101/58177c1e0cf08.jpg"></a>
					</div>

					<div class="detail">
						<div class="left">
							<div class="title">
								<a
									href="index.php-r=line%7Cview&amp;id=14.html"><?php echo ($trav['tra_name']); ?></a>
							</div>
							<div class="city"><?php echo ($trav['tra_lx']); ?></div>
							<div class="desc">
								行程亮点：<br><?php echo ($trav['tra_ld']); ?></div>
						</div>

						<div class="right">
							<div class="price">￡<?php echo ($trav['tra_price']); ?><span>/人起</span>
							</div>
							<a class="btn"
								href="index.php-r=line%7Cview&amp;id=14.html">立即预约</a>

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
				<a href="index.php-r=line%7Ccustom.html">&nbsp;私人定制>></a>
			</div>
			<div class="booking">
				<h3>门票预定</h3>
                <a href="index.php-r=book%7Cindex&amp;city_id=-1&amp;type_id=1.html">酒店预定</a>                <a href="index.php-r=book%7Cindex&amp;city_id=-1&amp;type_id=2.html">景点门票</a>                <a href="index.php-r=book%7Cindex&amp;city_id=-1&amp;type_id=3.html">剧院门票</a>            </div>
			<div class="booking">
				<h3>格莱文特承诺</h3>
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
					<li><a href="index.php-r=line%7Cindex&amp;cid=3.html">商务旅行</a></li>
					<li><a href="index.php-r=line%7Cindex.html">主题旅行</a></li>
					<li><a href="index.php-r=line%7Cindex&amp;cid=5.html">文化旅行</a></li>
					<li><a href="index.php-r=line%7Cindex.html">经典线路游</a></li>
				</ul>
			</div>
			<div class="list-type-footer">
				<h3>教育</h3>
				<ul>
					<li><a href="index.php-r=line%7Cindex&amp;cid=3.html">企业（名校）培训</a></li>
					<li><a href="index.php-r=line%7Cindex&amp;cid=3.html">贵族学校推荐学习</a></li>
					<li><a href="index.php-r=line%7Cindex&amp;cid=3.html">企业家EMBA培训</a></li>
					<li><a href="index.php-r=line%7Cindex&amp;cid=3.html">青少年夏（冬）令营</a></li>
				</ul>
			</div>
			<div class="list-type-footer">
				<h3>时尚之旅</h3>
				<ul>
					<li><a href="index.php-r=line%7Cindex.html">英国经典品牌导航</a></li>
					<li><a href="index.php-r=line%7Cindex.html">淘宝藏品发掘</a></li>
					<li><a href="index.php-r=line%7Cindex.html">古玩文玩淘宝</a></li>
				</ul>
			</div>
			<div class="list-type-footer list-type-footer1">
				<h3>商务</h3>
				<ul>
					<li><a href="index.php-r=line%7Cindex&amp;cid=3.html">商业投资</a></li>
					<li><a href="index.php-r=line%7Cindex&amp;cid=3.html">商务考察</a></li>
					<li><a href="index.php-r=line%7Cindex&amp;cid=3.html">品牌推广</a></li>
				</ul>
			</div>
			<div class="ewm">
				<img src="/seeworld/Public/Home/images/ewm.jpg" width="85" height="85"> <span>扫描二维码<br>关注微信公众号
				</span>
			</div>

		</div>
		<div class="clear"></div>
	</div>
	<div class="footer1">
		<div class="footer1_nav">
			<a href="">首页</a>|<a href="">主题线路</a>|<a
				href="">独家推荐</a>|<a href="">公司简介</a>
		</div>
		<p>
			中国北京市朝阳区工体北路永利国际2-506室 <br>电话：01084545351 &nbsp;&nbsp;
			Email: salea@seeworldltd.com
		</p>
	</div>
</body>
</html>
<form id="p_submit_form" action="/index.php?r=line/planreg" method="post">
<input type="hidden" value="14357be429ec3fa1c0685806bc4b6cc4c324f3dc" name="YII_CSRF_TOKEN" /><div class="yytc_bg" id="yytc_bg">
	<div class="yytc">
		<i onClick="document.getElementById('yytc_bg').style.display='none';">X</i>
		<span>姓名</span> <input name="name" id="s_name" type="text"
			maxlength="10"><br> <span>手机</span> <input name="phone" id="s_phone"
			type="text" maxlength="11"><br> <span>qq</span> <input name="qq"
			id="s_qq" type="text" maxlength="11"><br> <span>邮箱</span> <input
			name="mail" id="s_mail" type="text" maxlength="30"><br>
        <input id="plan_inter" type="hidden" value="" name="plan_inter" />        <input id="plan_line" type="hidden" value="" name="plan_line" />        <input id="plan_line_name" type="hidden" value="" name="plan_line_name" />        <input id="plan_hotel" type="hidden" value="" name="plan_hotel" />        <input id="plan_hotel_name" type="hidden" value="" name="plan_hotel_name" />        <input id="plan_attractions" type="hidden" value="" name="plan_attractions" />        <input id="plan_attractions_name" type="hidden" value="" name="plan_attractions_name" />        <input id="i_type" type="hidden" value="1" name="type" />        <input id="plan_desc" type="hidden" value="" name="plan_desc" />        <input id="plan_days" type="hidden" value="" name="plan_days" />        <input id="plan_reg_day" type="hidden" value="" name="plan_reg_day" />        <input id="plan_adult_num" type="hidden" value="" name="plan_adult_num" />        <input id="theater" type="hidden" value="" name="theater" />        <input id="theater_name" type="hidden" value="" name="theater_name" />        <input id="driver" type="hidden" value="" name="driver" />        <input id="driver_name" type="hidden" value="" name="driver_name" />        <input id="guide" type="hidden" value="" name="guide" />        <input id="guide_name" type="hidden" value="" name="guide_name" />        <input id="gdriver" type="hidden" value="" name="gdriver" />        <input id="gdriver_name" type="hidden" value="" name="gdriver_name" />        <input id="plan_children_num" type="hidden" value="" name="plan_children_num" />        <a href="javascript:;" id=i_plan_sub class="yy_but">立即预约</a>
	</div>
</div>
</form><script type="application/javascript">
    $(document).ready(function () {
        $('#i_plan_sub').click(function () {
            if($.trim($('#s_name').val())=='')
            {
                alert('姓名不能为空');
                return false;
            }
            var re_p = /1\d{10}/;
            if(!re_p.test($('#s_phone').val()))
            {
                alert('请输入正确的手机号码');
                return false;
            }
            var re_p = /^(\w)+(\.\w+)*@(\w)+((\.\w+)+)$/;
            if(!re_p.test($('#s_mail').val()))
            {
                alert('请输入正确的邮箱');
                return false;
            }
            $('#p_submit_form').submit();
            document.getElementById('yytc_bg').style.display='none';
        })
    })

    // prepare the form when the DOM is ready 
    $(document).ready(function() {
        var options = {
            dataType:'json',
            success:       function (responseText, statusText, xhr, $form) {
                $('#yytc_bg').hide();
                alert(responseText.errormessage);
            }  // post-submit callback 

            // other available options: 
            //url:       url         // override for form's 'action' attribute 
            //type:      type        // 'get' or 'post', override for form's 'method' attribute 
            //dataType:  null        // 'xml', 'script', or 'json' (expected server response type) 
            //clearForm: true        // clear all form fields after successful submit 
            //resetForm: true        // reset the form after successful submit 

            // $.ajax options can be used here too, for example: 
            //timeout:   3000 
        };

        // bind to the form's submit event 
        $('#p_submit_form').submit(function() {
            // inside event callbacks 'this' is the DOM element so we first 
            // wrap it in a jQuery object and then invoke ajaxSubmit 
            $(this).ajaxSubmit(options);

            // !!! Important !!! 
            // always return false to prevent standard browser submit and page navigation 
            return false;
        });
    });

</script>