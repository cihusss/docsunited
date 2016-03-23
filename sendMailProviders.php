<?php

$firstname = $_REQUEST['firstname'];
$lastname = $_REQUEST['lastname'];
$email = $_REQUEST['email'];
$address = $_REQUEST['address'];
$city = $_REQUEST['city'];
$state = $_REQUEST['state'];
$zip = $_REQUEST['zip'];
$mobile = $_REQUEST['mobile'];
$phone = $_REQUEST['phone'];
$preferred_contact_method = $_REQUEST['preferred_contact_method'];
$preferred_contact_times = $_REQUEST['preferred_contact_times'];
$locations_of_interest = $_REQUEST['locations_of_interest'];
$additional_location1 = $_REQUEST['additional_location1'];
$additional_location2 = $_REQUEST['additional_location2'];
$how = $_REQUEST['how'];
$comments = $_REQUEST['comments'];
$body =
	'First Name: ' . $firstname . '<br>' . 
	'Last Name: ' . $lastname . '<br>' . 
	'Email: ' . $email . '<br>' . 
	'Address: ' . $address . '<br>' . 
	'City: ' . $city . '<br>' . 
	'State: ' . $state . '<br>' . 
	'Zip Code: ' . $zip . '<br>' . 
	'Mobile Phone: ' . $mobile . '<br>' . 
	'Home Phone: ' . $phone . '<br>' . 
	'Preferred Contact Method: ' . $preferred_contact_method . '<br>' . 
	'Preferred Contact Times: ' . $preferred_contact_times . '<br>' . 
	'Locations of Interest: ' . $locations_of_interest . '<br>' . 
	'Additional Location 1: ' . $additional_location1 . '<br>' . 
	'Additional Location 2: ' . $additional_location2 . '<br>' . 
	'How did you hear about us?: ' . $how . '<br>' . 
	'Comments: ' . $comments . '<br>'
;

require 'lib/PHPMailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

$mail->isSMTP();
$mail->SMTPAuth = true;
$mail->SMTPDebug = 2;

$mail->Host = 'mail.docsunited.net';    
$mail->Username = 'info@docsunited.com';
$mail->Password = 'ELtPjPy2';
$mail->SMTPSecure = 'STARTTLS';
$mail->Port = '587';

$mail->From = 'info@docsunited.com';
$mail->FromName = 'DocsUnited Mailer';
$mail->addAddress('info@docsunited.com');

$mail->isHTML(true);

$mail->Subject = 'New Provider Application';
$mail->Body = $body;

var_dump($mail->send());

?>