<?php
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = $email;
$email_to = 'ncryptedcat@gmail.com'; // replace with your email

$body = 'Name: ' . $name . "\n\n" . 'Email: ' . $email . "\n\n" . 'Subject: ' . $subject . "\n\n" . 'Message: ' . $message;

$success = mail($email_to, $subject, $body, 'From: <'.$email_from.'>');

echo $success ? "success" : "error";
?>
