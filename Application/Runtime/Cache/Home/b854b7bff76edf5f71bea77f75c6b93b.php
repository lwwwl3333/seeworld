<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="Description" content="私人定制 个性定制 旅游" />
<script type="text/javascript" src="/seeworld/Public/Home/assets/797febb8/jquery.js"></script>
<title>看世界旅行</title>
<link rel="stylesheet" href="/seeworld/Public/Home/css/home.css" />
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
			<li><a href="<?php echo U('Home/Service/service');?>" class="nav_active"
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
<style type="text/css">#day_list a {
	background-color: white;
}
</style>
<link rel="stylesheet" type="text/css" href="/seeworld/Public/Home/css/calendar.css" />
<link rel="stylesheet" type="text/css" href="/seeworld/Public/Home/css/font-awesome.min.css" />
<script src="/seeworld/Public/Home/js/calendar.js" type="text/javascript" charset="utf-8"></script>
<script>

    function menuFixed(id){
        var obj = document.getElementById(id);
        var _getHeight = obj.offsetTop;

        window.onscroll = function(){
            changePos(id,_getHeight);
        }
    }
    function changePos(id,height){
        var obj = document.getElementById(id);
        var scrollTop = document.documentElement.scrollTop || document.body.scrollTop;
        if(scrollTop < height){
            obj.style.position = 'relative';
            document.getElementById('price_area').style.display='none';
            $('.wrap70').css('display', 'none');
            $('.fate_link_left').css('display', 'none');
        }else{
            obj.style.position = 'fixed';
            document.getElementById('price_area').style.display='block';
            $('.wrap70').css('display', 'block');
            $('.fate_link_left').css('display', 'block');

        }
    }

    window.onload = function(){
        menuFixed('pro_det_nav');

//		menuFixed('fate_link_left');

    }


</script>

<script>
    $(function(){
        $("#pro_det_nav ul li").click(function(){
            $("#pro_det_nav ul li").removeClass("on");
            $(this).addClass("on");

        });
        $("#fate_link_left a").click(function(){
            $("#fate_link_left a").removeClass("on");
            $(this).addClass("on");

        });


    });

</script>

<div class="pro_det hotel_det">
	<div class="wrap1000">
                <div class="crumbs">
			<a href="<?php echo U('Home/Index/index');?>">首页</a> &gt;<a href="index.php-r=book%7Cindex.html">出行服务</a>> <a href="index.php-r=book%7Cindex&amp;type_id=2.html">景点</a>
			&gt; <span><?php echo ($atts['ser_name']); ?></span>
		</div>
		<div class="title">
			<h1><?php echo ($atts['ser_name']); ?></h1>
			<span  class="price">￡<?php echo ($atts['ser_price']); ?><em>/人起</em></span>
			<div class="clear"></div>
		</div>
		<div class="wrap_left">
			<div class="image">
				<img src="/seeworld/<?php echo (html_entity_decode($atts['ser_img'])); ?>">
			</div>
			<div class="city"><?php echo ($atts['ser_pos']); ?></div>
			
			<div class="desc"><?php echo (html_entity_decode($atts['ser_intro'])); ?></div>
		
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
				<div id="pro_det_con0"></div>
			</div>
		</div>
		<div class="clear"></div>
		<div class="pro_det_march">
			<div class="pro_det_nav" id="pro_det_nav">
				<ul>
					<li class="on"><a href="#pro_det_con0">相关介绍</a></li>
					<li><a href="#pro_det_con2">费用说明</a></li>
					<li><a href="#pro_det_con3">预订须知</a></li>
				</ul>
				<div class="price_area" style="display: none;" id="price_area">
					<div class="btn js_gobuy"
						onClick="document.getElementById('yytc_bg').style.display='block';">立即预约</div>
				</div>
				<div class="clear"></div>
			</div>

			<div class="pro_det_con" id="pro_det_con1">
				<div class="big_title">相关介绍</div>
				<div class="title">
					<i></i>相关介绍
				</div>

			<div class="content">
                   <?php echo (html_entity_decode($atts['ser_js'])); ?>

				 <div class="clear"></div>
			</div>

			</div>
			<div class="pro_det_con" id="pro_det_con2">
				<div class="big_title">
					费用说明<span></span>
				</div>
				<!--<div class="title">-->
					<!--<i></i>费用包含-->
				<!--</div>-->
				<div class="content">
					<?php echo (html_entity_decode($atts['ser_fy'])); ?>
				</div>
				<!--
				<div class="title">
					<i></i>费用不包含
				</div>
				<div class="content">
					1、护照费用；<br> 2、酒店内电话、传真、洗熨、收费电视、饮料等费用； <br>
					3、服务项目未提到的其他一切费用，例如特种门票（夜总会、博览会、缆车等）； <br>

				</div>-->
			</div>

			<div class="pro_det_con" id="pro_det_con3">
				<div class="big_title">
					预订须知<span></span>
				</div>
				<div class="title">
					<i></i>预订须知
				</div>
				<div class="content">
					<?php echo (html_entity_decode($atts['ser_yd'])); ?>
				</div>
			</div>
		</div>

	</div>
    </div>
    
<script type="text/javascript">

    var ddate = new Date();
    ddate.setDate(ddate.getDate()+1);
    //日期选择
    $('#dd').calendar({
        selectedRang:[ddate, null],
        // trigger: '#dt',
        width: 490,
        zIndex: 999,
        format: 'yyyy-mm-dd',
        onSelected: function (view, date, data) {
            
                $('#plan_reg_day').val(date.format("yyyy-mm-dd"));
           
        },
        onClose: function (view, date, data) {

        }
    });

    $(document).ready(function () {

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
        	//var price = $('.price').html();
        	//console.log(price);
            var ad_fee = parseInt('<?php echo ($atts[ser_price]); ?>');
            var ch_fee = parseInt('<?php echo ($atts[ser_price]/2); ?>');
            var amount = parseInt($('#adt_num').val())*ad_fee+parseInt($('#chd_num').val())*ch_fee;
            $('#plan_adult_num').val(parseInt($('#adt_num').val()));
            $('#plan_children_num').val(parseInt($('#chd_num').val()));
            $('#total_amount').html(amount);


        });

        $('#plan_attractions').val('10');
        $('#plan_attractions_name').val('伦敦眼');
        })

</script>




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

<form id="p_submit_form" action="<?php echo U('Home/Plan/ser');?>" method="post">
<div class="yytc_bg" id="yytc_bg">
	<div class="yytc">
		<i onClick="document.getElementById('yytc_bg').style.display='none';">X</i>
		<span>姓名</span> <input name="name" id="s_name" type="text" maxlength="10"><br>
			 
		<span>手机</span> <input name="phone" id="s_phone" type="text" maxlength="11"><br> 
			
		<span>qq</span> <input name="qq"
			id="s_qq" type="text" maxlength="11"><br> <span>邮箱</span> <input
			name="mail" id="s_mail" type="text" maxlength="30"><br>
        <!--<input id="plan_inter" type="hidden" value="" name="plan_inter" />        -->
		<!--<input id="plan_line" type="hidden" value="" name="plan_line" />        -->
		<!--<input id="plan_line_name" type="hidden" value="" name="plan_line_name" />       -->
		<!--<input id="plan_hotel" type="hidden" value="" name="plan_hotel" />       -->
		<!--<input id="plan_hotel_name" type="hidden" value="" name="plan_hotel_name" />       -->
		<!--<input id="plan_attractions" type="hidden" value="" name="plan_attractions" />      -->
		<!--<input id="plan_attractions_name" type="hidden" value="" name="plan_attractions_name" />       -->
		<!--<input id="i_type" type="hidden" value="1" name="type" />       -->
		<!--<input id="plan_desc" type="hidden" value="" name="plan_desc" />     -->
		<!--<input id="plan_days" type="hidden" value="" name="plan_days" />       -->
		<input id="plan_reg_day" type="hidden" value="" name="plan_reg_day" />
		<input id="plan_adult_num" type="hidden" value="" name="plan_adult_num" />
		<!--<input id="theater" type="hidden" value="" name="theater" />-->
		<!--<input id="theater_name" type="hidden" value="" name="theater_name" />-->
		<!--<input id="driver" type="hidden" value="" name="driver" />-->
		<!--<input id="driver_name" type="hidden" value="" name="driver_name" />-->
		<!--<input id="guide" type="hidden" value="" name="guide" />-->
		<!--<input id="guide_name" type="hidden" value="" name="guide_name" />-->
		<!--<input id="gdriver" type="hidden" value="" name="gdriver" />-->
        <!--<input id="gdriver_name" type="hidden" value="" name="gdriver_name" />-->
        <input id="plan_children_num" type="hidden" value="" name="plan_children_num" />
		<input type="hidden" name="ser_id" value="<?php echo ($atts[ser_id]); ?>">
		<input type="hidden" name="ser_name" value="<?php echo ($atts[ser_name]); ?>">
		<a href="javascript:;" id=i_plan_sub class="yy_but">立即预约</a>
        
	</div>
</div>
</form>
<script type="application/javascript">
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