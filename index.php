<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Bootstrap -->
    <!-- offline -->
    <script src="jq/jquery-3.3.1.min.js"></Script>
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet" />
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css" type="text/css">
    <!-- end -->
    <style>
    .main{
        background-color: white;
        box-shadow:  0px 0px 20px 0px rgba(0,0,0,0.3);
    }
    body{
        background-color: #fafafa;
    }
    .aboutImg{
        height: 300px;
    }
    .aboutImg img{
        height: 100%;
        width: 100%;
    }
    .desc{
    }
    b{
        font-size: 20px;
    }
</style>
</head>
<body>
<?php
    $conn = new mysqli("localhost","root","");
    $flag_file = 'setup_complete.txt';

    // If the flag file doesn't exist, run the setup
    if (!file_exists($flag_file)) {
    $dbname = "jatra";

    $conn = new mysqli("localhost","root","");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "CREATE DATABASE IF NOT EXISTS $dbname";

    if ($conn->query($sql) === TRUE) {
        echo "Database created successfully or already exists!";
        
        // Create the flag file to signal that setup has run
        file_put_contents($flag_file, 'Setup complete on ' . date('Y-m-d H:i:s'));
        header("location: setup.php");
    } else {
        echo "Error creating database: " . $conn->error;
    }

    $conn->close();
    }

?>
<?php
session_start();
include'connectDB.php';
?>
<?php
include'header.php';
?>
<?php 
include'slider.php';
?>

<div class="container mb-5 main">
   
    <div class="container p-3">
        <div class="row">
            <div class="col-md-6 mr-1 aboutImg">
                <img src="images/jatra20.jpg" alt="Picture of Jatra in Nepal">
            </div>
            <div class="col-md-5 text-justify desc">
                <h1>About Jatra</h1>
                <p><b>Jatra</b> is a traditional festival and street theatre form of Nepal, celebrated with dance, music, and plays. It often revolves around stories of gods, goddesses, and legends. Held especially in the Kathmandu Valley, Jatra festivals showcase intricate costumes, profound arts, and vibrant processions.<br>
                The Jatra celebrations can last for several days and nights, drawing large crowds from across the region and becoming a major cultural event.
                </p>
            </div>
        </div>
    </div>
    
    <div class="container mem mt-5">
        <div class="row">
            <div class="col-lg-6">
                <h4 class="text-center text-info">Interested in Nepal's Cultural Festivities?</h4>
                <h5 class="text-center text-info">Join our Jatra Group</h5>
                <p  class="text-justify pt-2 pb-2 pl-4 pr-5">Be part of a community that celebrates Jatra, understand its history, importance, and vibrancy in Nepali culture. As a <strong>member</strong>, you'll get access to exclusive Jatra events, workshops, and much more. Your support will help in preserving this beautiful tradition.<br><br><small class="text-success"></small></p>
            </div>
            <div class="col-lg-6 aboutImg mb-3">
            <img src="images/jatra5.jpg" alt="Picture of Jatra in Nepal">
            </div>
        </div>
    </div>
</div>


<?php include'footer.php';?>
</body>
</html>
<!-- include'chat.php'; -->
