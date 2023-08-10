<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
    <style>
        .gallery {
            display: flex;
            flex-wrap: wrap;
        }

        .gallery-item {
            position: relative;
            width: calc(25% - 8px); /* Subtracting for margin */
            margin: 4px;
            overflow: hidden;
            cursor: pointer;
        }

        .gallery-item img {
            width: 100%;
            transition: transform 0.3s;
        }

        .gallery-item:hover img {
            transform: scale(1.1);
        }
        .headsection {
    background-color: #B17234;
    padding: 20px;
    text-align: center;
    color: white;
}

        .gallery-description {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background-color: rgba(0, 0, 0, 0.6); /* Semi-transparent black */
            color: white;
            padding: 10px;
            transform: translateY(100%);
            transition: transform 0.3s;
        }

        .gallery-item:hover .gallery-description {
            transform: translateY(0);
        }
    </style>
</head>
<body>
 <?php
    include 'connectDB.php';
    // checking wheather user is logged in or not via session
    session_start();
    if(!isset($_SESSION['usrid'])){
        header("location: login.php?message=LoginToContinue");
        echo"You have to login first";
    }
      include'header.php';
  ?>

<div class="headsection">
        <h1>Jatras Gallery</h1>
</div>

    <div class="gallery">
        <!-- Row 1 -->
        <div class="gallery-item">
            <img src="images/jatra1.jpg" alt="Image 1">
            <div class="gallery-description">Description for Image 1</div>
        </div>
        <div class="gallery-item">
            <img src="images/jatra1.jpg" alt="Image 2">
            <div class="gallery-description">Description for Image 2</div>
        </div>
        <div class="gallery-item">
            <img src="images/jatra1.jpg" alt="Image 3">
            <div class="gallery-description">Description for Image 3</div>
        </div>
        <div class="gallery-item">
            <img src="images/jatra1.jpg" alt="Image 4">
            <div class="gallery-description">Description for Image 4</div>
        </div>
        
        <!-- Row 2 -->
        <div class="gallery-item">
            <img src="images/jatra1.jpg" alt="Image 1">
            <div class="gallery-description">Description for Image 1</div>
        </div>
        <div class="gallery-item">
            <img src="images/jatra1.jpg" alt="Image 2">
            <div class="gallery-description">Description for Image 2</div>
        </div>
        <div class="gallery-item">
            <img src="images/jatra1.jpg" alt="Image 3">
            <div class="gallery-description">Description for Image 3</div>
        </div>
        <div class="gallery-item">
            <img src="images/jatra1.jpg" alt="Image 4">
            <div class="gallery-description">Description for Image 4</div>
        </div>

        <!-- Row 3 -->
        <div class="gallery-item">
            <img src="images/jatra1.jpg" alt="Image 1">
            <div class="gallery-description">Description for Image 1</div>
        </div>
        <div class="gallery-item">
            <img src="images/jatra1.jpg" alt="Image 2">
            <div class="gallery-description">Description for Image 2</div>
        </div>
        <div class="gallery-item">
            <img src="images/jatra1.jpg" alt="Image 3">
            <div class="gallery-description">Description for Image 3</div>
        </div>
        <div class="gallery-item">
            <img src="images/jatra1.jpg" alt="Image 4">
            <div class="gallery-description">Description for Image 4</div>
        </div>
    </div>
    <?php include'footer.php'?>
</body>
</html>