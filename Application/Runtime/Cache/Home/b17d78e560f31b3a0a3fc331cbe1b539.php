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
<script src="/seeworld/Public/home/js/calendar.js" type="text/javascript" charset="utf-8"></script>
<script>
    $(function(){
        $(".city_more_but").click(function(){
            $(".city_more").toggle();
            $(this).html($(this).html()=="收起&nbsp;&nbsp;︿"?"展开&nbsp;&nbsp;﹀":"收起&nbsp;&nbsp;︿");


        });
    });
</script>
<div class="pro_list hotel_list">
	<div class="wrap1000">
		<div class="crumbs">
			<a href="/">首页</a> &gt;<span>出行服务</span>
		</div>
		<div class="wrap_left">
			<div class="pro_list_menu">
				<p>
					<span>国家：</span>
                    <?php if(is_array($nation)): foreach($nation as $key=>$gj): ?><a class="active" href="<?php echo U('Home/Service/service',array('coun_id'=>$gj['coun_id']));?>"><?php echo ($gj['coun_name']); ?></a><?php endforeach; endif; ?>
				</p>
				<!--<p>-->
					<!--<span>城市：</span>-->

					<!--<?php if(is_array($citys)): foreach($citys as $key=>$city): ?>-->
						<!--<a class="" href="<?php echo U('Home/Service/service',array('coun_id'=>$city['coun_id'],'city_id'=>$city['city_id']));?>"><?php echo ($city['city_name']); ?></a>-->
					<!--<?php endforeach; endif; ?>-->
				<p>
					<span>类型：</span>
					<?php if(is_array($types)): foreach($types as $key=>$type): ?><a
						href="<?php echo U('Home/Service/service',array('coun_id'=>$type['coun_id'],'t_name'=>$type['t_name']));?>"

						class=""><?php echo ($type['t_name']); ?></a><?php endforeach; endif; ?>	
				</p>

			</div>
			<div class="pro_list_menu1">
				<p>
					<a href="javascript:;" class="active">综合排序</a><a
						href="javascript:;">价格↓</a>
				</p>
			</div>
			<?php if(is_array($service)): foreach($service as $key=>$serv): ?><div class="pro_list_con hotel_list_con">
				<div class="base">
					<div class="image">
						<a
							href="<?php echo U('Home/Service/seratts',array('ser_id'=>$serv['ser_id']));?>"><img
							class="lazy_img j_lazyImg"
							src="/seeworld/<?php echo ($serv['ser_thumb']); ?>"></a>
					</div>
					<div class="detail">
						<div class="left">
							<div class="title">
								<a
									href="<?php echo U('Home/Service/seratts',array('ser_id'=>$serv['ser_id']));?>"><?php echo ($serv['ser_name']); ?></a>
							</div>

						</div>

						<div class="right">
							<div class="price">￡<?php echo ($serv['ser_price']); ?><span>/起</span>
							</div>
							<a class="btn"
								href="<?php echo U('Home/Service/seratts',array('ser_id'=>$serv['ser_id']));?>">
								立即预约</a>

						</div>
					</div>
					<div class=" clear"></div>
				</div>
			</div><?php endforeach; endif; ?>                   




                    
            <div class="clear"></div>
			<div class="clink_pager"> <?php echo ($page); ?></div>

           
		</div>

		<div class="clear"></div>
	</div>

</div>

<script type="application/javascript">
    $(document).ready(function () {
        
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