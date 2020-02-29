<?php
 header('Access-Control-Allow-Origin: *');
 header('Access-Control-Allow-Methods: POST, GET');
 header('Access-Control-Max-Age: 1000');
 
 header('content-type: application/json; charset=utf-8');
require_once("db.php");
$fname = $lname = $email = $phone = $desc = $dish="";

if ($_SERVER["REQUEST_METHOD"] == "POST") { 
  $name = cleanInput($_POST["fname"]);
  $email = cleanInput($_POST["email"]);
  $phone = cleanInput($_POST["phone"]);
  $addit = cleanInput($_POST["message"]);
  $dish = cleanInput($_POST["dish"]);
  $posting_date = cleanInput($_POST["rpDate"]);
  $address = cleanInput($_POST["address"]);
}

$sql = "insert orders (name, email, phone, addit, dish, posting_date, address) values
('$name', '$email', '$phone', '$addit', '$dish', '$posting_date', '$address')";
$desc =$fname . $lname ."\r\n" .$desc. "\r\n".$phone;
$to = "eagalion8@gmail.com";
$subject = "Reservation";
$headers = "From: ".$email."\r\n";

//mail($to,$subject,$desc,$headers);
$result = mysqli_query($con,$sql);
if($result){
    $error_code = 0;
    $desc= $desc . "<p>Succeeded to insert a order record!</p>";
    
}
else{
    $error_code = 2;
    $desc = $desc . "<p>Failed to insert a order record! </p>";
    $desc = $desc . "<p>Error Description " . mysqli_error($con) . "</p>";

}
$info["code"] = $error_code;
$info["desc"] = $desc;

echo json_encode($info);
function cleanInput($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>