<?php
$hostname = "geogws003.ad.umd.edu";
$username = "hbadam";
$pwd = "user2#db";
$dbname = "hbadam";

//To open connection to database on server
$con = mysqli_connect($hostname, $username, $pwd, $dbname);

//Stop running script and print error message when it fails to connect to database
if (!$con){
    die("Database connection error! " .mysqli_connect_error());
}
?>