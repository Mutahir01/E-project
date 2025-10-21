<?php
$name =$_POST['name'];
$visitor_email = $_POST['email'];
$datetime = $_POST['datetime'];
$message = $_POST['message'];

$email_from = 'mmutahir378@gmail.com';

$email_datetime = 'New Date TIme';

$email_body = "User Name: $name.\n".
                "User email: $visitor_email.\n".
                "User datetime: $datetime.\n".
                "User message: $message.\n"

$to = "mmutahir378@gmail.com";

$headers = "From: $email_from\r\n";
$headers .= "Reply-To: $visitor_email\r\n";

mail($to, $email_datetime, $email_body,$headers);

header("location: locationmap.html")

?>