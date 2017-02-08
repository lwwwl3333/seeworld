<?php
import('Com.Email.PHPMailer');
import('Com.Email.SMTP');

function send_mail($title, $content, $from, $to, $attachment = '' , $chart = 'utf-8' ) {
    $mail = new PHPMailer ();
    $mail->CharSet = $chart; // 设置采用gb2312中文编码
    $mail->IsSMTP ( 'smtp' ); // 设置采用SMTP方式发送邮件
    $mail->Host = "smtp.163.com"; // 设置邮件服务器的地址
    $mail->Port = 25; // 设置邮件服务器的端口，默认为25
    $mail->From = $from; // 设置发件人的邮箱地址
    $mail->FromName = "面朝大海，春暖花开"; // 设置发件人的姓名
    $mail->SMTPAuth = true; // 设置SMTP是否需要密码验证，true表示需要
    $mail->Username = "18810758459@163.com"; // 设置发送邮件的邮箱
    $mail->Password = "wo5653132"; // 设置邮箱的密码 授权密码
    $mail->Subject = $title; // 设置邮件的标题
    $mail->AltBody = "text/html"; // optional, comment out and test
    $mail->Body = $content; // 设置邮件内容
    $mail->IsHTML ( true ); // 设置内容是否为html类型
    $mail->WordWrap = 50; // 设置每行的字符数
    $mail->AddReplyTo ( "地址", "名字" ); // 设置回复的收件人的地址
    $mail->AddAddress ( $to, "" ); // 设置收件的地址
    if ($attachment != '') {
        $mail->AddAttachment ( $attachment, $attachment );
    }
    if ($mail->Send ()) {
        //$status1 = "$to" . '&nbsp;&nbsp;已投送成功<br />';
        $status = 1;

    } else {
        //$status2 = "$to" . '&nbsp;&nbsp;发送邮件失败<br />';
        $status = 0;
    }
    return $status;
}


// 公共检测验证
function check_yzm($yzm){
    $Verify = new \Think\Verify();

    if($Verify->check($yzm)){
        return true;
    }else{
        echo "验证码错误";
        exit();
    }
}

//公用检测name 的cookie的东西
function cookie_check(){
    if(md5(cookie('username').C('salt')) == cookie('code')){
        return 1;
    }else{
        return 0;
    }
}
