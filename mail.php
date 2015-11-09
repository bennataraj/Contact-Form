<?php
$firstname = $_POST['fname'];
$email = $_POST['email'];
$text = $_POST['text'];

$to = "youremail@gmail.com";
$subject = "Hello World";
$message = "Firstname: $firstname \n\n Email: $email";
$from = "sender@example.com";
$headers = "From:" . $from;

mail($to,$subject,$message,$headers, $text);
echo "Mail Sent.";
?>
