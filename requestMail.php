<?php
    
$Name = $_POST['fullName-1'];
$mail = $_POST['Email-1'];
$companyName = $_POST['companyName-1'];
// $phone = $_POST['phoneNo'];
// "Phone No: $phoneNo.\n" .
$website = $_POST['Website'];
$message = $_POST['Message-1'];

$email_from = 'contact@infoweby.com';
$email_subject = 'New Form Submission';
$email_body = "User Name: $Name.\n". "User Email: $mail.\n". "Company Name: $companyName.\n" . "User Message: $message .\n";
$to = 'Official.infoweby@gmail.com';
$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $mail \r\n";

mail($to,$email_subject, $email_body, $headers) ;
header("Location: index.php") ;

?>