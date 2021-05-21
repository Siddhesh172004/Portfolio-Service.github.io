<?php 
    $name = $_POST['Username'];
    $email = $_POST['Useremail'];
    $message = $_POST['message'];

    $email_from = 'jondhale172004@gmail.com';
    $email_subject = 'Thanks for contacting us';
    $email_body = "User name : $name.\n";
                    "User Email : $email.\n";
                       "User Message : $message.\n";

    $to = "jondhale172004@gmail.com";
    $headers = "From:$email_from \r\n"; 
    $headers = "Reply-To: $email \r\n";
    
    mail($to,$email_subject,$email_body,$headers);
    header("Location:thank.html");

?>
