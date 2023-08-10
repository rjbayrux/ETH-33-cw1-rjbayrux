    <!-- bootstrap link -->
    <script src="jq/jquery-3.3.1.min.js"></Script>
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet" />
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="bootstrap/fontawesome/css/all.min.css" rel="stylesheet" />
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- end -->
    <link rel="stylesheet" href="headerStyle.css" type="text/css">
    <style>
       .loggedMem{
           margin: 0 70px 0 0;
       }

    .brand-container {
        display: flex;
        align-items: center;
    }

    #menuS .nav-link {
        font-size: 1.2rem; 
    }

    .iconP {
        margin-bottom: 0; /* Remove margin to align better with icons */
    }
</style>
    <nav id="a" class="navbar navbar-expand-lg navbar-light bg-light">
    <!-- Logo and Brand -->
    <a href="index.php" class="navbar-brand brand-container">
        <img src="images/icon.png" alt="" height="40" width="80">
    </a>

    <!-- Links -->
    <div class="collapse navbar-collapse" id="collapseDIv">
        <ul class="navbar-nav" id="menuS">
            <li class="nav-item">
                <a href="index.php" class="nav-link icon home <?php if(basename($_SERVER['PHP_SELF'])=="index.php") echo "homeActive active";?>">
                    <p class="iconP">Home</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="forum.php" class="nav-link icon forum <?php if(basename($_SERVER['PHP_SELF'])=="forum.php") echo "forumActive active";?>">
                    <p class="iconP">Gallery</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="events.php" class="nav-link icon events <?php if(basename($_SERVER['PHP_SELF'])=="events.php") echo "eventsActive active";?>">
                    <p class="iconP">Festivals</p>
                </a>
            </li>
        </ul>
    </div>

        <?php
        if(isset($_SESSION['usrid'])){
       
        }
        if(isset($_POST['logout'])){
            if( session_destroy()){
             header("location: index.php?message=LogedOut");
            }
         }
        ?>
        <!-- toggle for register and login -->
        <?php
        if(!isset($_SESSION['usrid'])){
        echo"<div class='dropdown'>
                <button class='btn btn-danger dropdown-toggle mr-4' type='button' id='regSign' data-target='#join' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                    login/Register
                </button>
                <div class='dropdown-menu' aria-labelledby='regSign' id='join'>
                    <a class='dropdown-item' href='register.php'>Register</a>
                    <div class='dropdown-divider'></div>
                    <a class='dropdown-item' href='login.php'>Login</a>
                </div>
            </div>";
        }else{
        echo"<div class='dropdown loggedMem'>
                <button class='btn dropdown-toggle bg-light' type='button' id='regSign' data-target='#join' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                <i class='fas fa-user'></i> <span class='pl-1'>Profile : ".$_SESSION['usr']."</span>
                </button>
                <div class='dropdown-menu' aria-labelledby='regSign' id='join'>
                    <form method='post'>
                        <a class='dropdown-item' href='editProfile.php'>Change Password</a>
                        <div class='dropdown-divider'></div>
                        <input type='submit' class='dropdown-item' name='logout' value='Logout' style='cursor: pointer;'>
                    </form>
                </div>
            </div>";
            if(isset($_POST['logout'])){
                if( session_destroy()){
                 header("location: index.php?message=LogedOut");
                }
             }
        }
        ?>
    </nav>
    <!-- END OF NAV-BAR -->
    <script>
        $(document).ready(function(){
            // hiding all the error and successfull message {
            $(".logSuccess").delay(6000).hide(2000);
            $(".logFailed").delay(4000).hide(2000);
            $(".locked").delay(30000).hide(2000);
    </script>


