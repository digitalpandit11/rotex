<?php
session_start(); // Start or resume the session

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile_number = $_POST['mobile_number'];
    $message = $_POST['message'];

    // Validate email
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $formcontent = "From: $name\nEmail: $email\nMobile No: $mobile_number\nMessage: $message";
        $recipient = "rotexengineers@gmail.com";
        $cc = "support@vbdigitech.com,info@vbdigitech.com,vbdigitech.notifications@gmail.com";
        $email_subject = "Contact Form";

        $mailheader = "From: $email\r\n";
        $mailheader .= "Cc: $cc\r\n"; // Add CC header

        if (mail($recipient, $email_subject, $formcontent, $mailheader)) {
            // Email sent successfully, store success status in session
            $_SESSION['contact_status'] = 'success';
        } else {
            // Email sending failed, store error status in session
            $_SESSION['contact_status'] = 'error';
        }
    } else {
        // Invalid email address, store error status in session
        $_SESSION['contact_status'] = 'error';
    }

    // Redirect back to contact.php
    header('Location: contact.php');
    exit();
} else {
    header('Location: contact.php');
    exit();
}
?>
