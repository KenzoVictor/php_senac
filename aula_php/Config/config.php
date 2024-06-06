<?php

$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "imc";

$con = mysqli_connect($hostname, $username, $password, $dbname) or die("<html><script language= 'JavaScript>alert('Unable to connect to database!' Please try again. ')</script></html>");

//Check connection
if (!$con){
    die("Connection failed: " . mysqli_connect_error());
}


?>