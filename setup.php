<?php 
// setting up database automatically
$conn = mysqli_connect("localhost","root","");

$conn1 = mysqli_select_db($conn,"jatra");

//Create table query
    $createQuery = "CREATE TABLE `registration` (
        `uid` int(11) NOT NULL AUTO_INCREMENT,
        `fullName` varchar(255) NOT NULL,
        `email` varchar(150) NOT NULL,
        `dob` date NOT NULL,
        `address` varchar(150) NOT NULL,
        `userName` varchar(255) NOT NULL,
        `password` varchar(50) NOT NULL,
        PRIMARY KEY (`uid`),
        UNIQUE KEY `userName` (`userName`)
    )"; 
    
   //insert query
    $insertQuery  = "INSERT INTO `registration` (`uid`, `fullName`, `email`, `dob`, `address`, `userName`, `password`) VALUES
                    (1, 'Aryaman Rajbhandari', 'aryaman@gmail.com', '2002-09-26', ' Nuwakot', 'aryaman', 'aryaman')";

    mysqli_query($conn,$createQuery);
    mysqli_query($conn,$insertQuery);
    
    header("location: index.php");
?>