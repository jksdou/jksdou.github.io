<?php
// Check for empty fields
if (empty($_POST['name']) || empty($_POST['email']) || empty($_POST['message']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    echo "No arguments Provided!";
    return false;
}
$name = $_POST['name'];
$email_address = $_POST['email'];
$message = $_POST['message'];
// Create the email and send the message
$to = 'jksdou@qq.com';
$email_subject = "Received a New Message[收到网站消息]: {$name}";
$email_body = "You have received a new message from your website contact form\n[您收到一个来自网站表单提交的信息]\n";
$email_body .= "Details:\n";
$email_body .= "Name: {$name}\n";
$email_body .= "Email: {$email_address}\n";
$email_body .= "Message:\n{$message}\n\n";
$email_body .= "Reply-To: {$email_address}";
$email_headers = "From: admin@crogram.com\n";
$email_headers .= "回复到(Reply-To): {$email_address}";
mail($to, $email_subject, $email_body, $email_headers);
return true;