<?php
 header('Access-Control-Allow-Origin: *');
 header('Access-Control-Allow-Methods: POST, GET');
 header('Access-Control-Max-Age: 1000');
 
 header('content-type: application/json; charset=utf-8');
require_once("db.php");
$fname = $lname = $email = $phone = $desc= $rpDate = $message="";


if ($_SERVER["REQUEST_METHOD"] == "POST") { 
  $fname = cleanInput($_POST["fname"]);
  $lname = cleanInput($_POST["lname"]);
  $email = cleanInput($_POST["email"]);
  $phone = cleanInput($_POST["phone"]);
  $message = cleanInput($_POST["message"]);
  $rpDate = cleanInput($_POST["rpDate"]);
}

$sql = "insert contact (first_name, last_name, email, phone, posting_date, message) values
('$fname', '$lname', '$email', '$phone', '$rpDate', '$message')";
//$desc =$fname . $lname ."\r\n" .$desc. "\r\n".$phone;
//$to = "eagalion8@gmail.com";
//$subject = "Reservation";
//$headers = "From: ".$email."\r\n";

//mail($to,$subject,$desc,$headers);
$result = mysqli_query($con,$sql);
if($result){
    $error_code = 0;
    $desc= $desc . "<p>Succeeded to insert contact record!</p>";
    
}
else{
    $error_code = 2;
    $desc = $desc . "<p>Failed to insert a contact record! </p>";
    $desc = $desc . "<p>Error Description " . mysqli_error($con) . "</p>";
    $desc = $desc . "<p>SQL Description " . ($sql) . "</p>";

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