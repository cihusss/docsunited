<?php

$name = $_REQUEST['name'];
$contact = $_REQUEST['contact'];
$city = $_REQUEST['city'];
$state = $_REQUEST['state'];
$telephone = $_REQUEST['telephone'];
$contact_method = $_REQUEST['contact_method'];
$contact_times = $_REQUEST['contact_times'];
$position = $_REQUEST['position'];
$body =
	'Name of Facility: ' . $name . '<br>' . 
	'Primary Contact: ' . $contact . '<br>' .
	'City: ' . $city . '<br>' .
	'State: ' . $state . '<br>' .
	'Telephone: ' . $telephone . '<br>' .
	'Preferred contact method: ' . $contact_method . '<br>' .
	'Preferred contact times: ' . $contact_times . '<br>' .
	'Position: ' . $position . '<br>'
;

require 'lib/PHPMailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

$mail->isSMTP();
$mail->SMTPAuth = true;
$mail->SMTPDebug = 2;

$mail->Host = 'mail.docsunited.net';    
$mail->Username = 'teo@docsunited.net';
$mail->Password = 'ELtPjPy2';
$mail->SMTPSecure = 'STARTTLS';
$mail->Port = '587';

$mail->From = 'teo@docsunited.net';
$mail->FromName = 'DocsUnited Mailer';
$mail->addAddress('teo@docsunited.net');

$mail->isHTML(true);

$mail->Subject = 'New Facility Application';
$mail->Body = $body;

var_dump($mail->send());

?>