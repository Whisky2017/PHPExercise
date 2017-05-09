<?php
/**
 * Created by PhpStorm.
 * User: wskyt
 * Date: 2017/2/21
 * Time: 21:11
 */

header("content-type:text/html;charset=utf-8");
ini_set("magic_quotes_runtime",0);
require 'php_mail/class.phpmailer.php';
require 'php_mail/class.smtp.php';


function send_mail($to,$fromname,$title,$content){
    try {
        $mail = new PHPMailer(true);
        $mail->IsSMTP();
        $mail->CharSet='UTF-8'; //设置邮件的字符编码，这很重要，不然中文乱码
        $mail->SMTPAuth = true; //开启认证
        $mail->Port = 25; //端口请保持默认
        $mail->Host = "smtp.qq.com"; //使用QQ邮箱发送
        $mail->Username = ""; //这个可以替换成自己的邮箱
        $mail->Password = ""; //注意 这里是写smtp的授权码 写的不是QQ密码，此授权码不可用
//$mail->IsSendmail(); //如果没有sendmail组件就注释掉，否则出现“Could not execute: /var/qmail/bin/sendmail ”的错误提示
        $mail->AddReplyTo("","mckee");//回复地址
        $mail->From = "";
        $mail->FromName = $fromname;
        $to = $to;
        $mail->AddAddress($to);
        $mail->Subject = $title;
        $mail->Body = $content;
        $mail->AltBody = "To view the message, please use an HTML compatible email viewer!"; //当邮件不支持html时备用显示，可以省略
        $mail->WordWrap = 80; // 设置每行字符串的长度
//$mail->AddAttachment("f:/test.png"); //可以添加附件
        $mail->IsHTML(true);
        $mail->Send();
        echo '邮件已发送';

    } catch (phpmailerException $e) {
        echo "邮件发送失败：".$e->errorMessage();
    }


    return true;
}
//环境 PHP5.3亲测可用
?>