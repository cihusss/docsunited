<?php

$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$phone = $_REQUEST['phone'];
$subject = $_REQUEST['subject'];
$message = $_REQUEST['message'];
$body =
	'Your Name: ' . $name . '<br>' . 
	'Your E-mail Address: ' . $email . '<br>' . 
	'Phone Number: ' . $phone . '<br>' . 
	'Subject: ' . $subject . '<br>' . 
	'Message: ' . $message . '<br>'
;

require 'lib/PHPMailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

$mail->isSMTP();
$mail->SMTPAuth = true;
$mail->SMTPDebug = 2;

$mail->Host = 'mail.docsunited.net';    
$mail->Username = 'info@docsunited.net';
$mail->Password = 'ELtPjPy2';
$mail->SMTPSecure = 'STARTTLS';
$mail->Port = '587';

$mail->From = 'info@docsunited.net';
$mail->FromName = 'DocsUnited Mailer';
$mail->addAddress('info@docsunited.net');

$mail->isHTML(true);

$mail->Subject = 'New Contact Inquiry';
$mail->Body = $body;

var_dump($mail->send());

?>