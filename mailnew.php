<?php
//get data from form  

$name = $_POST['name'];
$item = $_POST['item'];
$quantity = $_POST['Quantity'];
$email= $_POST['emailaddress'];
$adress = $_POST['subject'];
$destination = $_POST['destination'];
$phone = $_POST['phone'];
$message= $_POST['message'];
$to = "exports@nistala.in";
$subject = "Mail From website";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n  Item = " . $item. "\r\n  Quantity = " . $quantity. "\r\n  destination = " . $destination . "\r\n Phone = " . $phone  . "\r\n Message =" . $message;
$headers = "From: noreply@nistala.in" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:Quote.html");
?>