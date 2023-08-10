<?php
$hostName="localhost";
$userName="root";
$password="";
$database="jatra";

$conn = new mysqli($hostName,$userName,$password,$database);

if($conn->connect_error)
{
die("Connection Failed : ". $conn->connect_error);
}
?>
