<?php
require_once("db.php");
$name = $email = $phone = $addit = $dish = $posting_date = $address"";

if ($_SERVER["REQUEST_METHOD"] == "POST") { 
  $name = cleanInput($_POST["fname"]);
  $email = cleanInput($_POST["email"]);
  $phone = cleanInput($_POST["phone"]);
  $addit = cleanInput($_POST["message"]);
  $dish = cleanInput($_POST["dish"]);
  $posting_date = cleanInput($_POST["rpDate"]);
  $address = cleanInput($_POST["address"]);
}

$sql = "insert orders (fname, email, phone, message, dish, rpDate, address) values
('$name', '$email', '$phone', '$addit', '$dish', '$posting_date', '$address')";

$desc =$fname . $lname ."\r\n" .$desc. "\r\n".$phone;
$to = "eagalion8@gmail.com";
$subject = "Reservation";
$headers = "From: ".$email."\r\n";

//mail($to,$subject,$desc,$headers);

function cleanInput($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>