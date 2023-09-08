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
        $recipient = "shitalw2031@gmail.com";
        $email_subject = "Contact Form";

        $mailheader = "From: $email\r\n";

        if (mail($recipient, $email_subject, $formcontent, $mailheader)) {
            // Email sent successfully, redirect with success query parameter
            header('Location: contact_us.php?success=true');
            exit(); // Ensure script execution stops after redirection
        } else {
            // Email sending failed, redirect with error query parameter
            header('Location: contact_us.php?success=false');
            exit();
        }
    } else {
        // Invalid email address, redirect with error query parameter
        header('Location: contact_us.php?success=false');
        exit();
    }
} else {
    // Handle GET request or other methods, if necessary
    header('Location: contact_us.php');
    exit();
}
?>
