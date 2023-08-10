<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Bootstrap -->
    <!-- Online -->

    <!-- end -->
    <!-- offline -->
    <script src="jq/jquery-3.3.1.min.js"></Script>
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet" />
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- end -->
    <link rel="stylesheet" href="style.css" type="text/css">
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
</head>
<body>
  <?php include'header.php';?>
  <?php
    include'connectDB.php';
    if(isset($_POST['register'])){
        $fullname  = $_POST['fullname'];
        $email     = $_POST['email'];
        $dob       = $_POST['dob'];
        $address = $_POST['address'];
        $uname     = $_POST['username'];
        $password  = $_POST['password'];
        $repass    = $_POST['repass'];
        
        $regqry = "INSERT INTO registration VALUES('','$fullname','$email','$dob',' $address','$uname','$password')";
        if (!$conn->query($regqry))
        { 
            die("Errorindatainsert". !$conn->error);
        }
        echo "<div class='bg-success text-white text-center pass' style=' width: 100%; padding: 10px; position: relative;'>User Registered Successfully</div>";
    }
  ?>
<div class="container mainc">
    <div class="row">
        <div class="col-lg-6 text-dark">
            <h2 class="mt-5 jatra-theme"><u>Join our Jatra Community</u></h2>
            <p class="jatra-theme">Connect with a vibrant community passionate about Jatra, Nepal's captivating cultural tradition. Share, learn, and immerse yourself in the colorful world of Jatra.</p>
        </div>
        <div class="col-lg-6">
        <div class="card mt-5 formCointainer">
                <div class="card-header bg-info jatra-theme">
                    <h2>Register</h2>
                    <p><strong>Join</strong> our vibrant community</p>
                </div>
                
                <div class="card-body cbody">
            <form method="post">
              <div class="form-group">
                  <input type="text" name="fullname" class="form-control form-control-sm" id="fname" placeholder="Full Name" required>
              </div>
              <div class="form-group">
                  <input type="email" name="email" class="form-control form-control-sm" id="fname" placeholder="Email Address" required>
              </div>
              <div class="form-group">
                  <input type="date" name="dob" class="form-control form-control-sm" id="fname" placeholder="Date of birth" required>
              </div>
              <div class="form-row" style="margin-bottom: 15px;">
                <div class="col">
                    <input type="text"  name="address" class="form-control form-control-sm" placeholder="Address" required>
                </div>
              </div>
              <div class="form-group">
                  <input type="text" name="username" id="userAlreadytaken" class="form-control form-control-sm" id="uname" placeholder="User Name" required>
                  <div id="valid" style="color: red;"> </div>
              </div>
              <div class="form-group">
                  <input type="password" name="password" class="form-control form-control-sm" id="typePassword" placeholder="Password" required>
                  <small id="emailHelp" class="form-text text-left text-muted">please insert 8 letter password to make it more Strong</small>
              </div>
              <div class="form-group">
                  <input type="password" name="repass" class="form-control form-control-sm" id="repassword" placeholder="Confirm Password" required>
                  <div id="CheckPasswordMatch" style="color: red;"></div>
                  <div id="CheckPasswordMatch1" style="color: green;"></div>
              </div>
              <input class="btn btn-success btn-block" type="submit" name="register" value="Register"><br>
              <small id="emailHelp" class="form-text text-muted">Already Registered?<a href="login.php">Login.</a></small>
            </form>
          </div>

            </div>
        </div>
    </div>
</div>
  <?php include'footer.php'?>
  <script>
    $(document).ready(function () {
        // hiding message popup
        $(".pass").delay(6000).hide(2000);
        // checking if user aleready exists
        $("#userAlreadytaken").keyup(function(){
            var user = $("#userAlreadytaken").val()
            $.ajax({
                type: "GET",
                url : "userValid.php",
                data: {"existingUser":user},
                success: function(res){
                    $("#valid").html(res);
                }
            });
        });
       //checking matching password
         $("#repassword").keyup(function(){
            if($(this).val() == $("#typePassword").val()){
                $("#CheckPasswordMatch").hide();
                $("#CheckPasswordMatch1").html("Password match.");
                
            }
            else{
                $("#CheckPasswordMatch").html("Passwords do not match!");
            }
        });
    });
  </script>
</body>
</html>