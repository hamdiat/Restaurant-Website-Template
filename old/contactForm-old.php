<?php
// define variables and set to empty values
$fname = $lname = $email = $phone = $message="";
echo("sending email");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $fname = cleanInput($_POST["fname"]);
  $lname = cleanInput($_POST["lname"]);
  $email = cleanInput($_POST["email"]);
  $phone = cleanInput($_POST["phone"]);
  $message = cleanInput($_POST["message"]);
}
$message =$fname ." ". $lname ."\r\n".$message ."\r\n".$phone;
$to = "eagalion8@gmail.com";
$subject = "Reservation";
$headers = "From: ".$email."\r\n";
mail($to,$subject,$message,$headers);
function cleanInput($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>