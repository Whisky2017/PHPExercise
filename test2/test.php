<?php
require("class.phpmailer.php");

$mail = new PHPMailer();

//pop3 :  mail.kangq.com
//smtp :  mail.kangq.com


$mail->IsSMTP();                                      // set mailer to use SMTP
$mail->Host = "";  // specify main and backup server
$mail->SMTPAuth = true;     // turn on SMTP authentication
$mail->Username = "";  // SMTP username
$mail->Password = ""; // SMTP password

$mail->From = "";
$mail->FromName = "wskyt";
$mail->AddAddress("", "");
//$mail->AddAddress("liuhui@kangq.com");                  // name is optional
//$mail->AddReplyTo("liuhui@kangq.com", "Information");

$mail->WordWrap = 50;                                 // set word wrap to 50 characters
//$mail->AddAttachment("/var/tmp/file.tar.gz");         // add attachments
//$mail->AddAttachment("/tmp/image.jpg", "new.jpg");    // optional name
$mail->IsHTML(true);                                  // set email format to HTM


$mail->CharSet="gb2312";
//$mail->Encoding = "base64";

$mail->Subject = "title==标题";
//$mail->Body    = "title==标题body==内容";

$mail->Body    = '<div class="text">
		  <div class="profile-pic">
		  	<span id="msg"/>
			<div><img style="width: 120px; height: 120px;" src="http://img.kangq.com/blog/photo/183_090623/120/a2_ec43bf7796d6495.jpg"/></div>
		  </div>

		</div>';

$mail->AltBody = "This is the body in plain text for non-HTML mail clients";

if(!$mail->Send())
{
   echo "Message could not be sent. <p>";
   echo "Mailer Error: " . $mail->ErrorInfo;
   exit;
}
echo $mail->Body;
echo "Message has been sent";
?>
