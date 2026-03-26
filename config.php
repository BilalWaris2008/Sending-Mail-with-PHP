<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "sendmail";

$connection = mysqli_connect($servername,$username,$password,$database);

if(!$connection){
    die("connection not connected" . mysqli_connect_error());
}

// echo "connected sucessfully";

?>