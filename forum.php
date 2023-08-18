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
            <img src="images/jatra10.jpg" alt="Image 1">
            <div class="gallery-description">Pahachare festival</div>
        </div>
        <div class="gallery-item">
            <img src="images/jatra5.jpg" alt="Image 2">
            <div class="gallery-description">Sindure jatra at Nuwakot</div>
        </div>
        <div class="gallery-item">
            <img src="images/jatra22.jpg" alt="Image 3">
            <div class="gallery-description">Vintage image of Taktuke jatra</div>
        </div>
        <div class="gallery-item">
            <img src="images/jatra12.jpg" alt="Image 4">
            <div class="gallery-description">NeGha jatra which literally means SaatGaule jatra</div>
        </div>
        
        <!-- Row 2 -->
        <div class="gallery-item">
            <img src="images/jatra16.jpg" alt="Image 1">
            <div class="gallery-description">Thimi Biska: jatra</div>
        </div>
        <div class="gallery-item">
            <img src="images/jatra20.jpg" alt="Image 2">
            <div class="gallery-description">Mi Pwa lakhey of Patan</div>
        </div>
        <div class="gallery-item">
            <img src="images/jatra21.jpg" alt="Image 3">
            <div class="gallery-description">Devotees surrounding temple during Baagbhairav jatra</div>
        </div>
        <div class="gallery-item">
            <img src="images/jatra26.jpg" alt="Image 4">
            <div class="gallery-description">Ghode Jatra</div>
        </div>

        <!-- Row 3 -->
        <div class="gallery-item">
            <img src="images/jatra18.jpg" alt="Image 1">
            <div class="gallery-description">12 Bhairav Jatra from Pokhara</div>
        </div>
        <div class="gallery-item">
            <img src="images/jatra15.jpg" alt="Image 2">
            <div class="gallery-description">Bajrayoging Jatra_Sankhu</div>
        </div>
        <div class="gallery-item">
            <img src="images/jatra30.jpg" alt="Image 3">
            <div class="gallery-description">Shree Kumari Chariot during Indrajatra</div>
        </div>
        <div class="gallery-item">
            <img src="images/jatra28.jpg" alt="Image 4">
            <div class="gallery-description">GaiJatra</div>
        </div>
    </div>
    <?php include'footer.php'?>
</body>
</html>