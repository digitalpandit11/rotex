<?php
header('Access-Control-Allow-Origin: *');

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Validate email
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $formcontent = "From: $name\nEmail: $email\nSubject: $subject\nMessage: $message";
        $recipient =   "rotexengineers@gmail.com";
        $cc = "info@vbdigitech.com"; 
        $email_subject = "Contact Form";

        $mailheader = "From: $email\r\n";
        $mailheader .= "Cc: $cc\r\n"; // Add CC header

        if (mail($recipient, $email_subject, $formcontent, $mailheader)) {
            // Email sent successfully, redirect with success query parameter
            header('Location:contact.php?success=true');
            exit(); 
        } 
        else
         {
            // Email sending failed, redirect with error query parameter
            header('Location:contact.php?success=false');
            exit();
        }
    }
    else
     {
        // Invalid email address, redirect with error query parameter
        header('Location:contact.php?success=false');
        exit();
    }
} 
else
{
    header('Location:contact.php');
    exit();
}
?>
