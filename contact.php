<?php
$errors = '';
$myemail = 'dailywake@hotmail.com';
if(empty($_POST['name'])  ||
   empty($_POST['email']) ||
   empty($_POST['message']))
{
    $errors .= "\n Error: all fields are required";
}
$host = "mail.mate-co.com";
$username = "tech@mate-co.com";
$password = "ironmask";
$port = "465";
$name = $_POST['name'];
$email_address = $_POST['email'];
$message = $_POST['message'];
if (!preg_match(
"/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i",
$email_address))
{
    $errors .= "\n Error: Invalid email address";
}

if( empty($errors))
{
$to = $myemail;
$email_subject = "Contact AhmadAli.cf from : $name";
$email_body = "You have received a new message. ".
" Here are the details:\n Name: $name \n ".
"Email: $email_address\n Message \n $message";
$headers = "From: $myemail\n";
mail($to,$email_subject,$email_body,$headers);
header('Location:http://www.ahmadali.cf/index.html?section=10');
}
?>