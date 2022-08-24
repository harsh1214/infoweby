<?php

$name = $_POST['fullName'];
$visitor_email = $_POST['email'];
$companyName = $_POST['companyName'];
$phoneNo = $_POST['phoneNo'];
$websiteLink = $_POST['websiteLink'];
$message = $_POST['message'];

$email_from = 'contact@infoweby.com';
$email_subject = 'New Form Submission';
$email_body = "User Name: $name.\n". "User Email: $visitor_email.\n". "Phone No: $phoneNo.\n" . "Company Name: $companyName.\n" . "User Message: $message .\n";
$to = 'Official.infoweby@gmail.com';
$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $visitor_email \r\n";

mail($to,$email_subject, $email_body, $headers) ;
header("Location: contact.php") ;

?>