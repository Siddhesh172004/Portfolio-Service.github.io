<?php $name = $_POST['Username'];
$email = $_POST['Useremail'];
$message = $_POST['message'];
$formcontent="From: $name \n Message: $message";
$recipient = "jondhale172004@gmail.com";
$subject = "Thanks for contacting us";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!";
?>
