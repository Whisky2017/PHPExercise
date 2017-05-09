<?php
/**
 * Created by PhpStorm.
 * User: wskyt
 * Date: 2017/2/15
 * Time: 20:21
 */
    $tireqty = $_POST['tireqty'];
    $oilqty = $_POST['oilqty'];
    $sparkqty = $_POST['sparkqty'];
    $address = $_POST['address'];
    $DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];
    date_default_timezone_set("Asia/Shanghai");
    echo "<p>Order proccessed  at ";
    echo date('H:i, jS F Y');
    echo "</p>";

    echo "<p>Your order is as follow: </p>";
    echo $tireqty." tires<br/>";
    echo $oilqty. " bottles of oil<br/>";
    echo $sparkqty. " spark plugs<br/>";

//    echo $DOCUMENT_ROOT;

//    $fp = @fopen("$DOCUMENT_ROOT/PHPProject/test1/orders/orders.txt",'ab');
//
//    if (!$fp){
//        echo "<p><strong>Your order could not be proccessed at this time.
//            Please try again later.</strong></p>";
//        exit;
//    }
//
//    fwrite($fp,"你好");

//$toaddress = "wskyt@foxmail.com";
//$subject = "testsubject";
//$mailcontent = "testcontent";
//$fromaddress = "From: webserver@example.com";
//
//mail($toaddress, $subject, $mailcontent, $fromaddress);
//$to = "test@163.com";//收件人
//$subject = "Test";//邮件主题
//$message = "This is a test mail!";//邮件正文
//ini_set('SMTP','smtp.163.com');//发件SMTP服务器
//ini_set('smtp_port',25);//发件SMTP服务器端口
//ini_set('sendmail_from',"admin@163.com");//发件人邮箱
//mail($to,$subject,$message);
//
////引入发送邮件类
//require("smtp.php");
////使用163邮箱服务器
//$smtpserver = "smtp.qq.com";
////163邮箱服务器端口
//$smtpserverport = 25;
////你的163服务器邮箱账号
//$smtpusermail = "";
////收件人邮箱
//$smtpemailto = "";
////你的邮箱账号(去掉@163.com)
//$smtpuser = "";//SMTP服务器的用户帐号
////你的邮箱密码
//$smtppass = ""; //SMTP服务器的用户密码
//
////邮件主题
//$mailsubject = "测试邮件发送";
////邮件内容
//$mailbody = "PHP+MySQL";
////邮件格式（HTML/TXT）,TXT为文本邮件
//$mailtype = "TXT";
////这里面的一个true是表示使用身份验证,否则不使用身份验证.
//$smtp = new smtp($smtpserver,$smtpserverport,true,$smtpuser,$smtppass);
////是否显示发送的调试信息
//$smtp->debug = TRUE;
////发送邮件
//$smtp->sendmail($smtpemailto, $smtpusermail, $mailsubject, $mailbody, $mailtype);

include "mail.php";


if (!empty($_POST['to'])  && !empty($_POST['fromname']) && !empty($_POST['title']) && !empty($_POST['content'])) {


    send_mail($_POST['to'],$_POST['fromname'],$_POST['title'],$_POST['content']);


}

?>
<form action="#" method="post">
    接收人：<input type="text" name="to" /><br>
    发件人昵称：<input type="text" name="fromname" /><br>
    标题：<input type="text" name="title" /><br>
    内容：<input type="text" name="content" style="width:400px;height:100px;" /><br>
    <input type="submit" value="提交" />

</form>
