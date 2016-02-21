<?php

$email = $_REQUEST['email'] ;
$message = $_REQUEST['message'] ;
$body = $email . "<br><br>" . $message;

//echo $email

require 'lib/PHPMailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

$mail->isSMTP();
$mail->SMTPAuth = true;
$mail->SMTPDebug = 2;

$mail->Host = 'smtp.gmail.com';    
$mail->Username = 'cihusss@gmail.com';
$mail->Password = 'jedigovna11';
$mail->SMTPSecure = 'ssl';
$mail->Port = '465';

$mail->From = $email;
$mail->FromName = 'minisaxophone.com mailer deamon';
$mail->addAddress('cihusss@gmail.com');

$mail->isHTML(true);

$mail->Subject = 'New Message from minisaxophone.com';
$mail->Body = $body;

var_dump($mail->send());

/*if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
 } else {
    echo 'Message has been sent';
}*/
?>