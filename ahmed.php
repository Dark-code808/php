<?php
$recipient_email = "azezo50000@gmail.com";
$subject = "Subject of the email";
$message = "This is the body of the email.";

$sender_email = "azezo6040@gmail.com";
$sender_name = "Your Name";

$headers = "From: $sender_name <$sender_email>\r\n";
$headers .= "Reply-To: $sender_name <$sender_email>\r\n";
$headers .= "Content-type: text/html\r\n";

// Send email
$mail_success = mail($recipient_email, $subject, $message, $headers);

if ($mail_success) {
    echo "Email sent successfully!";
} else {
    echo "Error sending email.";
}
?>
