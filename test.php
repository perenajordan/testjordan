<?php

// ini_set("SMTP", "smtp.gmail.com");
//     // Set up parameters
// $to = "jordanperena@gmail.com";
// $subject = "Your password";
// $message = "Hello Jordie, thanks for registering. Your password is: springfield";
// $from = "perena78@yahoo.com";
// $headers = "From: $from";

// // Send email
// mail($to,$subject,$message,$headers);

// // Inform the user
// echo "Thanks for registering! We have just sent you an email with your password.";
$post = array('one'=>'1111', 'two'=>'22222');

print_r($post);
$post['three'] = '3333'; echo '<br>';
print_r($post);
?>