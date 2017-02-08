<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="Keywords" content="英国格莱文特" />
<meta name="Description" content="英国格莱文行 私人定制 个性定制 旅游" />
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
		<a href="index.html" class="logo"><img src="/seeworld/Public/home/images/logo.jpg" /></a>
		<div class="navbar">
			<ul>
				<li><a href="index.html" >首页</a></li>
				<li><a href="index.php-r=book%7Cindex.html"
						>服务项目</a>
					<ul>
						<li><a href="index.php-r=line%7Cindex.html">当地参团</a></li>
						<li><a href="index.php-r=line%7Ccustom.html">私人定制</a></li>
						<li><a href="index.php-r=book%7Cindex&amp;type_id=1.html">酒店预订</a></li>
						<li><a href="index.php-r=book%7Cindex&amp;type_id=5.html">当地用车</a></li>
						<li><a href="index.php-r=line%7Cview&amp;id=14.html#">商务活动</a></li>
						<li><a href="index.php-r=book%7Cindex&amp;type_id=2.html">门票预订</a></li>
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
							<img src="/seeworld/Public/admin/images/ewm.jpg" width="85" height="85"> <span>扫描二维码<br>关注微信公众号
							</span>
						</div>
				</a></li>
				<li class="lan"><a href="en/index.html">English</a></li>
			</ul>

		</div>
	</div>
<style type="text/css">#day_list a {
	background-color: white;
}
</style>
<link rel="stylesheet" type="text/css" href="/seeworld/Public/home/css/calendar.css" />
<link rel="stylesheet" type="text/css" href="/seeworld/Public/home/css/font-awesome.min.css" />


<script src="/seeworld/Public/home/js/calendar.js" type="text/javascript" charset="utf-8"></script>

<script>

    function menuFixed(id) {
        var obj = document.getElementById(id);
        var _getHeight = obj.offsetTop;

        window.onscroll = function () {
            changePos(id, _getHeight);
        }
    }
    function changePos(id, height) {
        var obj = document.getElementById(id);
        var scrollTop = document.documentElement.scrollTop || document.body.scrollTop;
        if (scrollTop < height) {
            obj.style.position = 'relative';
            document.getElementById('price_area').style.display = 'none';
            $('.wrap70').css('display', 'none');
            $('.fate_link_left').css('display', 'none');
        } else {
            obj.style.position = 'fixed';
            document.getElementById('price_area').style.display = 'block';
            $('.wrap70').css('display', 'block');
            $('.fate_link_left').css('display', 'block');

        }
    }

    window.onload = function () {
        menuFixed('pro_det_nav');

//		menuFixed('fate_link_left');

    }


</script>
<script>
    $(function () {
        $("#pro_det_nav ul li").click(function () {
            $("#pro_det_nav ul li").removeClass("on");
            $(this).addClass("on");

        });
        $("#fate_link_left a").click(function () {
            $("#fate_link_left a").removeClass("on");
            $(this).addClass("on");

        });


    });

</script>
<div class="pro_det">
	<div class="wrap1000">
		<div class="crumbs">
            <a href="index.html">首页</a> &gt;<span><a href="index.php-r=line%7Cindex.html">旅行主题</a></span> &gt; <span>英伦高尔夫之旅</span>
		</div>
		<div class="title">
			<h1>比斯特购物村一日游（周六专线，含9折购物卡）</h1>
			<span class="price">￡12.00<em>/人起</em></span>
			<div class="clear"></div>
		</div>
		<div class="wrap_left">
			<div class="image">
				<img src="upload/attached/thumb/20161101/58177c1e0cf08.jpg"><span><em>108</em>人已参加</span>
			</div>
			<div class="city">出发地-比斯特-出发地</div>
			<div class="desc">
				行程亮点：<br>赠送购物卡</div>
		</div>
		<div class="wrap_right">
			<div class="data_sec">
				<span class="data_st">出行日期</span>
				<div id="dd" class="lx-data-marleft"></div>
				<div class="big_title">
					成人<span class="js_chd adt">儿童</span><span class="js_chd tip">（0-12岁）</span>
				</div>
				<div class="nums">
					<a href="javascript:;" class="numbtn" id="adt_minus">-</a><input
						id="adt_num" class="num" value="0" readonly><a href="javascript:;"
						id="adt_add" class="numbtn">+</a><a href="javascript:;"
						class="js_chd numbtn chd" id="chd_minus">-</a><input id="chd_num"
						class="js_chd num" value="0" readonly><a href="javascript:;"
						id="chd_add" class="js_chd numbtn">+</a>
				</div>
				<div class="pro_price">
					费用合计￡<strong id="total_amount">0</strong>
				</div>
				<div class="pro_btn"
					onClick="document.getElementById('yytc_bg').style.display='block';">立即预约</div>
			</div>
		</div>
		<div class="clear"></div>
		<div class="pro_det_march">
			<div class="pro_det_nav" id="pro_det_nav">
				<ul>
					<li class="on"><a href="index.php-r=line%7Cview&amp;id=14.html#pro_det_con1">行程简介</a></li>
					<li><a href="index.php-r=line%7Cview&amp;id=14.html#pro_det_con2">费用说明</a></li>
					<li><a href="index.php-r=line%7Cview&amp;id=14.html#pro_det_con3">预订须知</a></li>
				</ul>
				<div class="price_area" style="display: none;" id="price_area">
					<div class="btn js_gobuy"
						onClick="document.getElementById('yytc_bg').style.display='block';">立即预约
					</div>
				</div>
				<div class="clear"></div>
			</div>

			<div class="pro_det_con" id="pro_det_con1">
				<div class="big_title">行程简介</div>
				<div class="origin_dest"><p>
	路线名称：比斯特购物村一日游（周六专线）【赠送购物九折卡】 [ 英国, 英国出发, 大众型 ]<br />
上客城市： 伯明翰(Birmingham)&nbsp;<br />
曼彻斯特（Manchester）<br />
北安普顿(Northampton)&nbsp;<br />
考文垂(Coventry)&nbsp;<br />
华威(Warwick)&nbsp;<br />
下客城市： 和出发城市相同<br />
行程索要：出发地-比斯特-出发地
</p>
<p>
	<br />
</p>
<p>
	<br />
</p>
<p>
	</div>
				<div class="title">
					<i></i>参考行程
				</div>
				<div class="fate_link" id="fate_link">
					<div class="fate_link_left" id="fate_link_left"
						style="display: none">
						<div class="wrap70"></div>
                        <a href="index.php-r=line%7Cview&amp;id=14.html#day_1">第1天</a>
                                            </div>
					<div class="day_list">
						<div id="day_list">
                                                            <div class="day"
								id="day_1">
								<div class="wrap70" style='display: block'></div>
								<div class="day_title">
									<div class="the_num">D1</div>
									<div class="name">第1天</div>
								</div>
								<div class="day_content"> 
</p>
<p>
	<br />
</p>
<p>
	Bicester Village（比斯特购物村）绝对称得上是买名牌的圣地。它位于英格兰牛津郡，是英国最受欢迎的打折购物村。
</p>
<p>
	<span style="font-family:Arial, 微软雅黑, 'Microsoft YaHei', Verdana, sans-serif;font-size:14px;line-height:22.4px;background-color:#FCF7E4;">Bicester Village（比斯特购物村）绝对称得上是买名牌的圣地。它位于英格兰牛津郡，是英国最受欢迎的打折购物村，深受留学生和中国游客的喜爱，几乎成为到英国游玩的必去之地。比斯特购物村是CHIC Outlet集团旗下的成员之一，除了比斯特外，CHIC Outlet旗下的打折村还分布在都柏林、巴黎、马德里、巴塞罗那、米兰、布鲁塞尔、法兰克福、慕尼黑、上海以及苏州。既然叫购物村，布局感觉也确实很像一个小村子，比斯特所有的品牌店铺都是独立的小房子，分布在一条主街的两侧，建筑颜色也很干净利落。</span> 
</p>
<p>
	<br />
</p>
<p>
	<br />
</p>
<p>
	<br />
</p>
<p>
	<br />
</p>
<p>
	<br />
</p>
<p>
	<br />
</p>
<p>
	<br />
</p></div>
							</div>
                            
                        </div>
						<div class="day_end">以上行程仅供参考，实际出行中遇航空/酒店不确定情况可能会调整，以实际行程为准。</div>
					</div>
				</div>
			</div>
			<div class="pro_det_con" id="pro_det_con2">
				<div class="big_title">
					费用说明<span></span>
				</div>
				<div class="content">
                    真实价格、行程完全透明                </div>
			</div>

			<div class="pro_det_con" id="pro_det_con3">
				<div class="big_title">
					预订须知<span></span>
				</div>
				<div class="title">
					<i></i>预订须知
				</div>
				<div class="content">
                    需提前3天预订，确认行程时间</div>
			</div>
		</div>

	</div>
</div>
<script type="text/javascript">
    
    //日期选择
    var ddate = new Date();
    ddate.setDate(ddate.getDate()+1);
    $('#dd').calendar({
        selectedRang:[ddate, null],
        data:[
            {date:"2016-10-31",value:"出行日期"},{date:"2016-11-06",value:"出行日期"},{date:"2016-11-13",value:"出行日期"},{date:"2016-11-20",value:"出行日期"},{date:"2016-11-27",value:"出行日期"},{date:"2016-12-16",value:"出行日期"},{date:"2017-01-18",value:"出行日期"},{date:"2017-02-16",value:"出行日期"},{date:"2017-03-18",value:"出行日期"}        ]
        ,        // trigger: '#dt',
        width: 490,
        zIndex: 999,
//        format: 'yyyy-mm-dd',
        onSelected: function (view, date, data) {
            $('.usedata').addClass('now');
            if($(this).hasClass('usedata'))
            {   
                $('#plan_reg_day').val(date.format("yyyy-mm-dd"));
                $(this).removeClass('now');
            }
            else
            {   
                $(this).removeClass('selected');
                alert('当前日期无出行计划');
            }
            return false;
        }

    });

    $('#adt_add').click(function () {
        var obj = $('#adt_num');
        var num = parseInt(obj.val())+1;
        if(num<0) num = 0;
        obj.val(num);
    });
    $('#adt_minus').click(function () {
        var obj = $('#adt_num');
        var num = parseInt(obj.val())-1;
        if(num<0) num = 0;
        obj.val(num);
    });

    $('#chd_add').click(function () {
        var obj = $('#chd_num');
        var num = parseInt(obj.val())+1;
        if(num<0) num = 0;
        obj.val(num);
    });
    $('#chd_minus').click(function () {
        var obj = $('#chd_num');
        var num = parseInt(obj.val())-1;
        if(num<0) num = 0;
        obj.val(num);
    });
    $('.numbtn').click(function () {
        var ad_fee = parseInt('12.00');
        var ch_fee = parseInt('11.00');
        var amount = parseInt($('#adt_num').val())*ad_fee+parseInt($('#chd_num').val())*ch_fee;
        $('#plan_adult_num').val(parseInt($('#adt_num').val()));
        $('#plan_children_num').val(parseInt($('#chd_num').val()));
        $('#total_amount').html(amount);


    });
    $(document).ready(function () {
  	    $('#plan_line_name').val('比斯特购物村一日游（周六专线，含9折购物卡）');
        $('#plan_line').val('14');
    })


</script>
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
				<img src="images/ewm.jpg" width="85" height="85"> <span>扫描二维码<br>关注微信公众号
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