<?php if (!defined('THINK_PATH')) exit();?>
<!doctype html>
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
<style>
    .add{
        background: #FF9900;
        display: block;
        text-align: center;
        color: #fff;
        width: 200px;
        height: 40px;
        line-height: 40px;
        border-radius: 5px;
        font-size: 18px;
        margin-top: 20px;
        margin-left: 40px;
        position: absolute;
        bottom: 25px
    }
</style>
<body style="background: #f4f4f4">
<div class="header">
    <a href="<?php echo U('Home/Index/index');?>" class="logo"><img src="/seeworld/Public/home/images/logo.jpg" /></a>
    <div class="navbar">
        <ul>
            <li><a href="<?php echo U('Home/Index/index');?>"  >首页</a></li>
            <li><a href="<?php echo U('Home/Private/private1');?>" class="nav_active">私人定制</a></li>
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
<input id="current_num" type="hidden" value="1" name="current_num" /><script src="/seeworld/Public/home/js/jquery.nicescroll.min.js"></script>
<div class="per_travel per_travel1">
    <div class="per_travel_tit">
        私人定制&nbsp;<span>— Personal Tailor</span>
    </div>
    <div class="wrap1000">
        <div class="left">
            <div class="tab1_1 tab1">
                <div class="lx-dingzhi-xianlu">
                    <div class="lx-dingzhi-title">
                        <!--<span>基本线路</span>-->
                        <span class="lx-current-xianlu">线路规划</span>
                    </div>
                    <form method="post" id="plan_post">
                        <div class="lx-lab-leixing lx-lab-cxrs">
                            <h3>请选择出行人数</h3>
                            <div class="lx-day-box">
                                <div class="lx-icon-minus" id="p_minus"></div>
                                <input type="text" disabled="disabled" name="" id="p_num" value="0" />
                                <div class="lx-icon-plus" id="p_add"></div>
                            </div>
                        </div>
                        <div class="lx-lab-leixing" id="lx-lab-leixing">
                            <h3>请添加线路规划</h3>

                            <div class="lx-day-paihang" id="planlist">
                                <!--<input id="i_hotels_1" type="hidden" value="" name="hotels[1]" /><input id="i_jingdian_1" type="hidden" value="" name="jingdian[1]" />                            <div class="clear"></div>-->
                                <!--<div>-->
                                    <!--<label for="">DAY1：</label>-->
                                    <!--<ul class="lx-day-jindian">-->
                                        <!--<li id="jd_add_1" class="jingdian_add">-->
                                            <!--<div class="lx-add-club" onclick="setJd(1)">+</div>-->
                                            <!--<span>添加景点</span>-->
                                        <!--</li>-->
                                        <!--<li id="hotel_add_1" class="jiudian_add">-->
                                            <!--<div class="lx-add-club" onclick="setHotel(1)">+</div>-->
                                            <!--<span>添加酒店</span>-->
                                        <!--</li>-->
                                    <!--</ul>-->
                                <!--</div>-->

                            </div>

                    </form>
                </div>


            </div>
         <input type="button" name="" style="margin-left: 80px;" id="sub_btn" class="clear lx-xianlu-next" value="下一步" />
        </div>
    </div>
    <div class="center">
        <div class="tishi_wrap" id="tishi_wrap">
            <span>← 请点击左侧选择</span>
        </div>
        <div id="jingdian_wrap" style="display: none;">
            <h2>热门景点</h2>
            <div class="spots_con" id="spots_con">

                <div class="spots_list1 active" id="jingdian" style="overflow: auto;height: 500px; ">
                    <!--<h3><a href="javascript:;" class="spots_tit" name="title"> 伦敦</a></h3>-->
                    <!--<a href="javascript:;" onclick="show_jd(8)">-->
                        <!--<img src="/upload/attached/thumb/20160901/57c7f606c2431.jpg">-->
                        <!--<span>大英博物馆</span></a>-->
                    <!--<a href="javascript:;" onclick="show_jd(9)">-->
                    <!--<img src="/upload/attached/thumb/20160901/57c7f4f2d15e6.jpg"><span>伦敦塔桥</span></a>-->
                    <!--<a href="javascript:;" onclick="show_jd(10)"><img src="/upload/attached/thumb/20160901/57c7f6af75847.png">-->
                        <!--<span>伦敦眼</span></a>-->
                </div>                </div>
        </div>
        <div id="jiudian_wrap" style="display: none;">
            <h2>热门酒店</h2>
            <div class="spots_con" id="jiudian_con" >

                <div class="spots_list1 active" id="hotel">
                    <h3><a href="javascript:;" class="spots_tit" name="title"> 伦敦</a></h3>
                    <!--<a href="javascript:;" onclick="show_hotel(4)">-->
                        <!--<img src="/upload/attached/thumb/20160901/57c7fa3a39f0f.png">-->
                        <!--<span>千禧国际伦敦格洛斯特酒店</span></a>-->
                    <!--<a href="javascript:;" onclick="show_hotel(5)">-->
                        <!--<img src="/upload/attached/thumb/20160901/57c7f89add3c7.png">-->
                        <!--<span>皇家花园酒店</span></a>-->
                </div>                </div>
        </div>


    </div>
    <div class="right" id="right_content" >

    </div>

</div>
</div>
<script>
    function unique(arr){      //得到所有不同的酒店、景点
// 遍历arr，把元素分别放入tmp数组(不存在才放)
        var tmp = new Array();
        for(var i in arr){
//该元素在tmp内部不存在才允许追加
            if(tmp.indexOf(arr[i])==-1){
                tmp.push(arr[i]);
            }
        }
        return tmp.join(' ');
    }
</script>
<script>

    var day=Cookies.get('day');
    for(var i=0;i<day;i++){
        $('#planlist').append(
                '<input id="i_hotels_'+(i+1)+'" type="hidden" value="" name="hotels['+(i+1)+']" /><input id="i_jingdian_'+(i+1)+'" type="hidden" value="" name="jingdian['+(i+1)+']" /> ' +
                '<div class="clear"></div> <div> <label for="">DAY'+(i+1)+'：</label> ' +
                '<ul class="lx-day-jindian"> ' +
                '<li id="jd_add_'+(i+1)+'" class="jingdian_add"> ' +
                '<div class="lx-add-club" onclick="setJd('+(i+1)+')">+</div> ' +
                '<span>添加景点</span> ' +
                '</li> ' +
                '<li id="hotel_add_'+(i+1)+'" class="jiudian_add"> ' +
                '<div class="lx-add-club" onclick="setHotel('+(i+1)+')">+</div> ' +
                '<span>添加酒店</span> ' +
                '</li> ' +
                '</ul> ' +
                '</div>'

        );

    }
    $("#jingdian").niceScroll({styler:"fb",cursorcolor:"#ddd"});

</script>
<script>
    $(function(){
//        loadTab();
        $("#jingdian_add").click(function(){
            $("#jingdian_wrap").css("display","block");
            $("#jiudian_wrap").css("display","none");
            $("#tishi_wrap").css("display","none");
        });
        $("#spots_con a").not(".spots_tit").click(function(){
            $("#spots_con a").not(".spots_tit").removeClass("active");
            $(this).addClass("active");
            $("#jingdian_det").css("display","block");
            $("#jiudian_det").css("display","none");
        });
        $("#jingdian_det_btn").click(function(){
            $("#jingdian_add").before('<li><img src="images/new_det_img.jpg"/><span>大英博物馆</span><a href="#" class="lx-round-jindian-del" onclick="$(this).parent().remove();">x</a></li>');
        });

        $("#jingdian_del").click(function(){
            $("#jingdian_day1_1").css("display","none");
        });
        $("#p_minus").click(function(){

            var obj = $('#p_num');
            var num = parseInt(obj.val())-1;
            if(num<0) num = 0;
            obj.val(num);

        });
        $("#p_add").click(function(){

            var obj = $('#p_num');
            var num = parseInt(obj.val())+1;
            if(num<0) num = 0;


            obj.val(num);

        });
        $("#jiudian_add").click(function(){
            $("#jiudian_wrap").css("display","block");
            $("#jingdian_wrap").css("display","none");
            $("#tishi_wrap").css("display","none");
        });
        $("#jiudian_con a").not(".jiudian_tit").click(function(){
            $("#jiudian_con a").not(".jiudian_tit").removeClass("active");
            $(this).addClass("active");
            $("#jiudian_det").css("display","block");
            $("#jingdian_det").css("display","none");
        });
        $("#jiudian_det_btn").click(function(){
            $("#jingdian_add").before('<li><img src="images/jiudian_det_img.jpg"/><span>骑士三码头酒店</span><a href="#" class="lx-round-jindian-del" onclick="$(this).parent().remove();">x</a></li>');
        });
        $(".spots_tit").click(function(){
            $("#spots_con .spots_list1").removeClass("active");
            $(this).parent().parent().addClass("active");
        });
        $(".jiudian_tit").click(function(){
            $("#jiudian_con .spots_list1").removeClass("active");
            $(this).parent().parent().addClass("active");
        });

    });
</script>

<script type="application/javascript">
    var city_id=Cookies.get('city_id_0');
    var city=Cookies.get('city_name_0');
    var intro_name_0=Cookies.get('intro_name_0');
    var intro_name_1=Cookies.get('intro_name_1');
    var start_day=Cookies.get('start_day');
    var day=Cookies.get('day');
    var jd=[];
    var hotel=[];
    var hotel_num=0;
    $(document).ready(function() {
        $("#lx-lab-leixing").niceScroll({styler:"fb",cursorcolor:"#ddd"});
        $("#spots_con").niceScroll({styler:"fb",cursorcolor:"#ddd"});
        $("#city_det_con").niceScroll({styler:"fb",cursorcolor:"#ddd"});
        $("#jiudian_det_con").niceScroll({styler:"fb",cursorcolor:"#ddd"});
        $("#jiudian_con").niceScroll({styler:"fb",cursorcolor:"#ddd"});
//        $("#jingdian").niceScroll({styler:"fb",cursorcolor:"#ddd"});
//        $("#jah").niceScroll({styler:"fb",cursorcolor:"#ddd"});


    });

    $(document).ready(function () {
        $('#sub_btn').click(function () {
            if($('#p_num').val()==0){
                alert('出行人数至少一人');
                return false;
            }
            if(unique(jd)==''){
                alert('至少填写一处景点');
                return false;
            }
            $('#yytc_bg').show();
//            $('#i_type').val(2);

            $('#plan_inter').val(Cookies.get('inter_id'));
            $('#plan_days').val(Cookies.get('day'));
            $('#plan_reg_day').val(start_day);
            $('#plan_peo_num').val($('#p_num').val());
            $('#plan_city').val(city);
            $('#plan_inter').val(intro_name_0+' '+intro_name_1);
            $('#plan_day_num').val(day);
            $('#plan_jd').val(unique(jd));
            $('#plan_hotel').val(unique(hotel));

//            $('#plan_desc').val($("#plan_post").serialize());

        });
//        $("#sub_btnl").click(function(){
//            location.href = "/index.php?r=line/custom";
//        });
    })
    Cookies.set('plan', { foo: 'bar' });

    var a = Cookies.getJSON('plan');

    function setHotel(num) {

        $('#current_num').val(num);
        $('#tishi_wrap').hide();
        $('#jiudian_wrap').show();
        $('#jingdian_wrap').hide();
        $('#right_content').html('');
        $.ajax({
            url:'<?php echo U("Home/Private/getHotel");?>',
            type:'get',
            data:{'city_id':city_id},
            dataType:'json',
            success:function (res) {
                $('#hotel').html('<h3><a href="javascript:;" class="spots_tit" name="title"> '+city+'</a></h3>');
                for(var i=0;i<res.length;i++){
                    console.log(res[i].ser_name);
                    $('#hotel').append('<a href="javascript:;" onclick="show_hotel('+res[i].ser_id+')" title="'+res[i].ser_name+'">' +
                            ' <img src="/seeworld/'+res[i].ori_img+'"> ' +
                            '<span>'+res[i].ser_name+'</span></a>');
                }

            }
        })
    }
    function setJd(num) {
        $('#current_num').val(num);
        $('#tishi_wrap').hide();
        $('#jiudian_wrap').hide();
        $('#jingdian_wrap').show();
        $('#right_content').html('');
        $.ajax({
            url:'<?php echo U("Home/Private/getJd");?>',
            type:'get',
            data:{'city_id':city_id,'intro_name_0':intro_name_0,'intro_name_1':intro_name_1},
            dataType:'json',
            success:function (res) {
              $('#jingdian').html('<h3><a href="javascript:;" class="spots_tit" name="title"> '+city+'</a></h3>');
                for(var i=0;i<res.length;i++){
                    $('#jingdian').append('<a href="javascript:;" onclick="show_jd('+res[i].j_id+')" title="'+res[i].j_name+'">' +
                            ' <img src="/seeworld/'+res[i].j_src+'"> ' +
                            '<span>'+res[i].j_name+'</span></a>');
                }

            }
        })
    }

    function show_hotel(id) {
        $('#city_det_btn').show();
        $.ajax({
            url:"<?php echo U('Home/Private/showHotel');?>",
            type:'get',
            data:{'ser_id':id},
            dataType:'json',
            success:function (res) {
                $('#right_content').html('<div id="jah" style=" height:81%;padding-left: 20px;margin-top: 30px;padding-right:20px;overflow: auto;height: 500px;text-indent: 30px">'+res.ser_js+'</div>'+
                        '<a href="javascript:add_hotel(\''+res.ser_name+'\',\''+res.ser_id+'\',\'/seeworld/'+res.ser_img+'\')" class="add"  >添加酒店</a>');
                $("#jah").niceScroll({styler:"fb",cursorcolor:"#ddd"});
            }
        })



    }
    function show_jd(id) {
        $('#city_det_btn').show();
        $.ajax({
            url:"<?php echo U('Home/Private/showJd');?>",
            type:'get',
            data:{'j_id':id},
            dataType:'json',
            success:function (res) {
                $('#right_content').html('<div id="jah" style=" height:81%;padding-left: 20px;margin-top: 30px;padding-right:20px;overflow: auto; height: 500px;text-indent: 30px;">'+res.j_intro+'</div>'+
                        '<a href="javascript:add_jd(\''+res.j_name+'\',\''+res.j_id+'\',\'/seeworld/'+res.j_src+'\')" class="add"  >添加景点</a>');
                $("#jah").niceScroll({styler:"fb",cursorcolor:"#ddd"});
            }
        })


    }
    function add_jd(name,id,img) {
        $('#i_jingdian_'+$('#current_num').val()).val(id);
        $('#city_det_btn').hide();
        $("#jd_add_"+$('#current_num').val()).hide().before('<li><img src="'+img+'"/><span>'+name+'</span><a href="javascript:;" class="lx-round-jindian-del" onclick="$(this).parent().next().show();$(this).parent().remove();$(\'#city_det_btn\').show();">x</a></li>')
        jd[id]=name;

    }

    function add_hotel(name,id,img) {


        $('#city_det_btn').hide();
        $('#i_hotels_'+$('#current_num').val()).val(id);
        $("#hotel_add_"+$('#current_num').val()).hide().before('<li><img src="'+img+'"/><span>'+name+'</span><a href="javascript:;" class="lx-round-jindian-del" onclick="$(this).parent().next().show();$(this).parent().remove();$(\'#city_det_btn\').show();">x</a></li>')
        hotel[id]=name;
    }

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
<form id="p_submit_form" action="<?php echo U('Home/Plan/private');?>" method="post">
    <input type="hidden" value="14357be429ec3fa1c0685806bc4b6cc4c324f3dc" name="YII_CSRF_TOKEN" /><div class="yytc_bg" id="yytc_bg">
    <div class="yytc">
        <i onClick="document.getElementById('yytc_bg').style.display='none';">X</i>
        <span>姓名</span> <input name="name" id="s_name" type="text"
                               maxlength="10"><br> <span>手机</span> <input name="phone" id="s_phone"
                                                                          type="text" maxlength="11"><br> <span>qq</span> <input name="qq"
                                                                                                                                 id="s_qq" type="text" maxlength="11"><br> <span>邮箱</span> <input
            name="mail" id="s_mail" type="text" maxlength="30"><br>

        <input type="hidden" name="plan_reg_day" id="plan_reg_day" >
        <input type="hidden" name="plan_peo_num" id="plan_peo_num">
        <input type="hidden" name="plan_city" id="plan_city">
        <input type="hidden" name="plan_inter" id="plan_inter">
        <input type="hidden" name="plan_day_num" id="plan_day_num">
        <input type="hidden" name="plan_jd" id="plan_jd">
        <input type="hidden" name="plan_hotel" id="plan_hotel">
        <a id=i_plan_sub class="yy_but">立即预约</a>
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
            alert('预约成功');
        })
    })

    // prepare the form when the DOM is ready
    $(document).ready(function() {
        var options = {
            dataType:'json',
            success:       function (responseText, statusText, xhr, $form) {
                $('#yytc_bg').hide();
//                alert(responseText.errormessage);
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