<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "attendence_system";

$conn = mysqli_connect($server, $username, $password, $database);
if (!$conn){
    die("Error". mysqli_connect_error());
}

?>