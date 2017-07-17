<?php
function checkInput($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

$name = checkInput($_POST['name']);
$email = checkInput($_POST['email']);
$number = checkInput($_POST['number']);
$message = checkInput($_POST['msg']);
$formcontent="From: $name\nNumber: $number\nMessage: $message";
$recipient = "ericeschelbach@gmail.com";
$subject = "Contact Form from EricEschelbach.com";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
header("Location: ../index.ejs");
?>
