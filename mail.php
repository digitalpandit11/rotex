<?php header('Access-Control-Allow-Origin: *'); ?>
<?php 
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['subject'];
$msg =  $_POST['message'];
$formcontent="From: $name \n Address: $email \n Phone: $phone \n Message: $msg";
$recipient = "shitalw2031@gmail.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
header('Location: contact_us.php');
?>