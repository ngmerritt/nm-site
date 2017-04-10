<?php
 
// Get values from form
$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];
 
$to = "nick@nick-merritt.com";
$subject = "Website Contact Form";
$message = " Name: " . $name . "\r\n Email: " . $email . "\r\n Message: " . $message;
 
 
$from = "FutureTutorials";
$headers = "From:" . $from . "\r\n";
$headers .= "Content-type: text/plain; charset=UTF-8" . "\r\n";  
 
?>