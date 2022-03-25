<?php
$name = $_POST['name'];
$user_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = "info@gmail.com";
$email_subject = "new form submition";
$email_body = "UserName: $name.\n".
            "UserEmail: $user_email.\n".
            "Subject: $subject".
            "Message: $message";
$to = "aliparsa883@gmail.com";
$headers ="From: $email_from \n\r";
$headers.="Replay-To : $user_email \r\n";;
mail($to,$email_subject,$email_body,$headers);
header("location: contact.html");   

?>