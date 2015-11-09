<?php
$firstname = $_POST['fname'];
$lastname = $_POST['lname'];
$text = $_POST['text'];

$to = "youremail@gmail.com";
$subject = "Hello World";
$message = "Firstname: $firstname \n\n Lastname: $lastname";
$from = "sender@example.com";
$headers = "From:" . $from;

mail($to,$subject,$message,$headers, $text);
echo "Mail Sent.";
?>