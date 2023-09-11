<?php
header('Access-Control-Allow-Origin: *');

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile_number = $_REQUEST['mobile_number'];
    $message = $_POST['message'];

    // Validate email
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $formcontent = "From: $name\nEmail: $email\Mobile No: $mobile_number\nMessage: $message";
      //  $recipient =   "rotexengineers@gmail.com"; 
        $recipient = "shitalw2031@gmail.com";
       // $cc = "info@vbdigitech.com"; 
        $cc = "shitalw2031@gmail.com"; 
       $email_subject = "Contact Form";

        $mailheader = "From: $email\r\n";
        $mailheader .= "Cc: $cc\r\n"; // Add CC header

        if (mail($recipient,$email_subject,  $formcontent, $mailheader)) {
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
<?php


// if (isset($_REQUEST['contactus'])) {
	
// 	$to = "mktg@cadmech.co.in";
//  	$subject = "You have a message from Cad-Mech";
//  	$name = $_REQUEST['name'];
//  	$contact_number = $_REQUEST['contact_number'];
//  	$email = $_REQUEST['email'];
//  	$messagess = $_REQUEST['messagec'];
//  	$subjectsss = $_REQUEST['subject'];
 	
 	

//  	$message = "<b>You have a message from Cad-Mech</b><br>";
//  	$message .= "<b>Name:</b> {$name}<br>";
//  	$message .= "<b>Email:</b> {$email}<br>";
//  	$message .= "<b>Phone:</b> {$contact_number}<br>";
//  	$message .= "<b>Subject:</b> {$subjectsss}<br>";
//  	$message .= "<b>Message:</b> {$messagess}<br>";
 
//  	$header = "From:$email\r\n";
//  	$header .= "MIME-Version: 1.0\r\n";
//  	$header .= "Content-type: text/html\r\n";
//     $header .= "Cc:info@vbdigitech.com"; 

//  	$retval = mail ($to,$subject,$message,$header);
 
//  	header('Location: https://rotexengineers.com/contact.php');
	
//     }

?>

<script>

</script>