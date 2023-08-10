<?php
    include'connectDB.php'; 
    if(isset($_POST['Login'])){
        $uname = $_POST['uname'];
        $passw = $_POST['passw'];

        $qry = "SELECT * FROM registration WHERE userName= '$uname' && password = '$passw' ";
        $result = $conn->query($qry);
        //cheacking wrong input for three time in a row 
        if (isset($_COOKIE[$uname]) && ($_COOKIE[$uname]) >= 3) {        
            echo "<div class='bg-danger text-white text-center locked' style=' width: 100%; padding: 10px; position: relative;'>Invalid data inserted more than 3 times!! You have been locked for 3 Minute </div>";
            die();
        }

        if($result->num_rows == 1)
        {
        session_start();
        $data=$result->fetch_assoc();      
            $_SESSION['usr'] = $data['userName'];
            $_SESSION['type'] =$data['utype'];
            $_SESSION['usrid'] = $data['uid'];
        //checking admin and normal user
            if ($_SESSION['type'] == "admin"){
                header("location:admin.php?login=success");
            }else {
                header("location:index.php?login=success");
                echo "<div class='bg-success text-white text-center logSuccess' style=' width: 100%; padding: 10px; position: relative;'>Welcome".$_SESSION['usr']."</div>";
            }
        }else{
            echo "<div class='bg-warning text-white text-center logFailed' style=' width: 100%; padding: 10px; position: relative;'>Either Username or password is invalid</div>";
            setcookie($uname,1);
            if (isset($_COOKIE[$uname])) {
                setcookie($uname, $_COOKIE[$uname]+1,time()+180);
            }
        }
    }
?>
<!-- link of bootstrap is in header so no need to include it here also -->
<?php include'header.php'?>  
<style>
    body {
        background-image: url('images/jatraBackground.png');
        background-position: left;
        background-repeat: no-repeat;
        background-size: cover;
        background-attachment: fixed;
        background-color: #FFEBD5; /* A shade close to traditional Nepali colors */
    }

    .mainc {
        margin-bottom: 20px;
    }

    .formCointainer {
        border-radius: 7px;
        padding: 20px;
        box-shadow: 0px 0px 12px 0px rgba(0, 0, 0, 0.1);
        background-color: #FFF4E3; /* A softer shade */
    }

    .bg {
        position: relative;
        margin: 0 0 15px 0;
    }

    .jatra-theme {
        color: #B17234; /* A traditional shade */
    }

    </style>
    
<div class="container mainc">
    <div class="row">
      <div class="col-lg-6 text-dark">
        <h2 class="mt-5 jatra-theme"><u>Welcome to Jatra Community</u></h2>
        <p class="jatra-theme">Join us to dive deep into the mesmerizing world of Jatra - the heart of Nepal's cultural celebrations. Be a part of the vibrant community and share your experiences, stories, and love for Jatra.</p>
      </div>
      <div class="col-lg-6">
        <div class="card mt-5 formCointainer">
          <div class="card-header bg-info jatra-theme">
            <h2>Login</h2>
            <p>Enter your credentials to join the festivities.</p>
          </div>
          <div class="card-body cbody">
            <form method="post">   
                <div class="form-group">
                    <input type="text" name="uname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Username" required>
                </div>
                <div class="form-group">
                    <input type="password" name="passw" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
                </div>
                <input type="submit" name="Login" class="btn btn-primary btn-block" value="Log In">
                <small id="emailHelp" class="form-text text-muted jatra-theme">New to our Jatra community? <a href="register.php" class="jatra-theme">Register here.</a></small>
            </form>
          </div>
        </div>
      </div>
    </div>
</div>
<?php include'footer.php'?>