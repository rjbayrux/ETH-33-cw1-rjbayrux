<?php
include 'connectDB.php';
$pass = $_GET['valPass'];
$qry = "SELECT * FROM registration WHERE password = '$pass'";
$res = $conn->query($qry);
if($res->num_rows>0){
  echo"<span style='color: green'>old password matched</span>";
}
else{
  echo"<span style='color: red'>old password didnot matched</span>";
}
?>