<?php
//get data from form  

$name = $_POST['Name'];
$email= $_POST['Email'];
$message= $_POST['Message'];
$subject= $_POST['Subject'];
$number= $_POST['Phonenumber'];
$to = "aakashganga.tungnath@gmail.com";
$subject = "Mail from customer";
$txt ="Name = ". $name . "\r\n  Email = " . $email  . "\r\n  Phone Number = " . $Phonenumber. "\r\n Subject =" . $subject . "\r\n Message =" . $message;
$headers = "From: ndarudra1@gmail.com" . "\r\n" .
"CC: aviraljnvrpg@gmail.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:tungnath/thankyou.html");
?>
