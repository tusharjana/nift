<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = "info.delhi@nift.ac.in";
$email_subject = "New Form Submission";
$email_body = "User : $name.\n"."User Email : $visitor_email.\n"."Subject : $subject.\n"."Message : $message.\n";

$to = "tushar.jana@bcah.christuniversity.in";
$headers = "From : $email_from \r\n";
$headers .= "Reply-To : $visitor_email \r\n";

mail($to, $email_subject, $email_body, $headers);
header("Location : ./contact.html")
?>