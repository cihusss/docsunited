<?php

$name = $_REQUEST['name'];
$contact = $_REQUEST['contact'];
$city = $_REQUEST['city'];
$state = $_REQUEST['state'];
$telephone = $_REQUEST['telephone'];
$drop = $_REQUEST['drop'];
$position = $_REQUEST['position'];
$body =
	'Name of Facility: ' . $name . '<br>' . 
	'Primary Contact: ' . $contact . '<br>' .
	'City: ' . $city . '<br>' .
	'State: ' . $state . '<br>' .
	'Telephone: ' . $telephone . '<br>' .
	'Drop: ' . $drop . '<br>' .
	'Position: ' . $position . '<br>'
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

$mail->Subject = 'New Facility Application';
$mail->Body = $body;

var_dump($mail->send());

?>