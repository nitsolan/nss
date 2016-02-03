<?php
// check if fields passed are empty
if(empty($_POST['name'])  		||
   empty($_POST['email']) 		||
   empty($_POST['message'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }
	
$name = $_POST['name'];
$email_address = $_POST['email'];
$message = $_POST['message'];


// create email body and send it	
$to = 'colin.ingram@dpaw.wa.gov.au'; // ****PUT YOUR EMAIL ADDRESS HERE****
$email_subject = "Website feedback Our WA Parks:  $name";
$email_body = "You have received feedback via Our WA Parks.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nMessage:\n$message";
$headers  = 'MIME-Version: 1.0' . "\r\n" . 'Content-type: text/plain; charset=UTF-8' . "\r\n";
$headers .= "From: no-reply@dpaw.wa.gov.au\n";
//$headers .= 'Cc: webcontent@dpaw.wa.gov.au' . "\r\n";
//$headers .= 'Bcc: test@test.com\r\n';
$headers .= "Reply-To: $email_address";	
mail($to,$email_subject,$email_body,$headers);
return true;			
?>