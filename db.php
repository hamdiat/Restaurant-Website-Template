<?php
$hostname = "*********";
$username = "********";
$pwd = "*****";
$dbname = "*****";

//To open connection to database on server
$con = mysqli_connect($hostname, $username, $pwd, $dbname);

//Stop running script and print error message when it fails to connect to database
if (!$con){
    die("Database connection error! " .mysqli_connect_error());
}
?>
