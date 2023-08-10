    <link href="bootstrap/fontawesome/css/all.min.css" rel="stylesheet" />

    <?php
      if(isset($_POST['newSignup'])){
          echo '<script language="javascript">';
          echo 'alert(" You are subscribed for daily newsletter.")';
          echo '</script>';
        }

    ?>
<footer class="page-footer font-small text-white bg-dark pt-4 mt-4">
    
    <div class="container text-center">
            <!-- Contact -->
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-6 col-xl-6 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 font-weight-bold">Contact</h5>
                    <p><i class="fa fa-home mr-3"></i> Kathmandu, KMNP 44600, NEPAL</p>
                    <p><i class="fa fa-envelope mr-3"></i> jatra@test.com</p>
                    <p><i class="fa fa-phone mr-3"></i> + 977 9891567088</p>
                    <p><i class="fa fa-print mr-3"></i> + 977 9898456231</p>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-6 mx-auto mt-3">
                <h3 class="text-center blockquote ">Subscribe To Our <span class="text-danger "> NewsLetter</span></h3>
          <ul class="list-unstyled list-inline text-center py-2">
            <li class="list-inline-item">
              <form class="form-row" method="post">
                <div class="input-group mb-3">
                  <input type="email" class="form-control input-small " name="email" placeholder="Enter your email address" aria-label="email" aria-describedby="basic-addon2" required>
                  <div class="input-group-append">
                    <input type="submit" class="btn btn-info" type="button" name="newSignup" value="Subscribe!">
                  </div>
                </div>
              </form>
            </li>
          </ul>
                </div>
            </div>
            
            <hr class="bg-white mb-4">
    
            <!-- Social buttons -->
            <ul class="list-unstyled list-inline text-center">
                <li class="list-inline-item">
                    <a href="#" class="btn-floating btn-fb mx-1">
                        <i class="fab fa-facebook"></i>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a href="#" class="btn-floating btn-tw mx-1">
                        <i class="fab fa-twitter"></i>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a href="#" class="btn-floating btn-gplus mx-1">
                        <i class="fab fa-google-plus"></i>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a href="#" class="btn-floating btn-li mx-1">
                        <i class="fab fa-linkedin"></i>
                    </a>
                </li>
            </ul>
    
            <!-- Copyright -->
            <div class="footer-copyright text-center py-1 copyright">
                © 2023 Copyright
            </div>
        </div>
    </footer>