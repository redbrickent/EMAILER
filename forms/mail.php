<?php
//get data from form  
$name = $_POST['name'];
$email= $_POST['email'];
$message= $_POST['message'];
$to = "redbrickent@gmail.com";
$subject = $_POST['subject'];
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Subject = " . $subject . "\r\n  Message =" . $message;
$headers = "From: welangaieric@gmail.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>