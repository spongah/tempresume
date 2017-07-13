<?php $name = $_POST['name'];
$email = $_POST['email'];
$number = $_POST['number'];
$message = $_POST['msg'];
$formcontent="From: $name\nNumber: $number\nMessage: $message";
$recipient = "ericeschelbach@gmail.com";
$subject = "Contact Form from EricEschelbach.com";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
header("Location: ../index.html");
?>
