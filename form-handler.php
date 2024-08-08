<?php
$name = $_POST['name'];
$visitor_phone = $_POST['phone'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'ornekmail@gmail.com';
$email_subject = 'Yeni Form Gönderimi';
$email_body = "User Name: $name.\n"
            "User Phone: $visitor_phone.\n"
            "User Email: $visitor_email.\n"
            "Subject :$subject.\n"
            "User Message: $message.\n";

 $to = 'ornekmail@ornekmail.com';
 $headers = "From:$email_from \r\n";
 $headers = "Reply-To:$visitor_email \r\n";
 mail($to, $email_subject, $email_body, $headers);
 header("Location: contact.html"); 
?>