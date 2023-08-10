<?php
include 'connectDB.php';
$usr = $_GET['existingUser'];
$qry = "SELECT * FROM registration WHERE UserName = '$usr'";
$res = $conn->query($qry);
if($res->num_rows>0){
  echo"This User name is already taken: Please select another.";
}
?>