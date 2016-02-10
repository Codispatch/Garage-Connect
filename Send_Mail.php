<?php
function Send_Mail($to,$subject,$body)
{
require 'PHPMailer/PHPMailerAutoload.php';
 
$mail = new PHPMailer;
$mail->SMTPDebug = 2; 
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'slashconsole@gmail.com';
$mail->Password = 'SH07ZXNRQ';
$mail->SMTPSecure = 'tls';
 
$mail->From = 'slashconsole@gmail.com';
$mail->FromName = 'Shravan C';
$mail->addAddress('c.shravan.acharya@gmail.com','Varun');
 
$mail->addReplyTo('slashconsole', 'Shravan C');
 
$mail->WordWrap = 50;
$mail->isHTML(true);
 
$mail->Subject = $subject;
$mail->Body    = $body;
 
if(!$mail->send()) {
   echo 'Message could not be sent.';
   echo 'Mailer Error: ' . $mail->ErrorInfo;
   exit;
}
 
echo 'Message has been sent';

}
?>