<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Login Hotel</title>
    <link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>

     <!-- header -->
  <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
      <div class="container-fluid">
        <a class="navbar-brand" style="font-weight: bold; font-size: 20pt; color: #F0A500; margin-left: 50px;" href="#">
          <i class="fas fa-hotel"></i> | Nothing'S Hotel</i>
        </a>
        <!-- Links -->
        <ul class="navbar-nav" style="margin-right: 50px;">
          <li class="nav-item">
              <a class="nav-link" href="#"><i class="fas fa-home"></i> Home</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="#"><i class="fas fa-address-card"></i> About Us</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="#"><i class="fas fa-bed"></i> Rooms</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="#"><i class="fas fa-tv"></i></i> Facilities</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="#"><i class="fas fa-address-book"></i></i> Contact |</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="#"><i class="fas fa-user fa-lg" style="margin-right: 20px;"></i></a>
          </li>
        </ul>
      </div>
  </nav>    
  <!-- header end -->

<section class="home">
    <div class="content">
        <h2>Welcome To Nothing's Hotel</h2>
        <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
        <a href="#">Get Started</a>
    </div>    

    <div class="wrapper-login">
        <h2>Login</h2>
        <form action="proses_login.php" method="post">
            <div class="input-box">
                <span class="icon"><ion-icon name="person"></ion-icon></span>
                <input type="text" name="username" required>
                <label>Enter your username</label>
            </div>
             <div class="input-box">
                <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                <input type="password" name="password" required>
                <label>Enter your password</label>
            </div>
            <div class="remember-forgot">
                <label><input type="checkbox">Remember Me</label>
                <a href="#">Forgot Password?</a>
            </div>
            <button type="submit" value="login" class="btn">Login</button>
            <div class="register-link">
                <p>Not a member?<a href="sign_up.php">Sign up now</a></p>
            </div>
        </form>
    </div>
</section>

   <!-- FOOTER -->
    <section class="">
        <footer>
            
            <div class="container p-4">
                <div class="row">
                    <!--Grid column-->
                    <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                        <h5 class="text-uppercase">Nothing's Hotel</h5>
                        <p>
                           Welcome to our sanctuary of comfort and convenience, where every room reservation is a promise of a memorable stay. Book your perfect escape today and embark on a journey of relaxation and luxury.  
                        </p>
                    </div>

                    <!--Grid column-->
                    <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                        <h5 class="text-uppercase">Our Social Media</h5>
                        <ul class="list-unstyled mb-0" style="display: flex;">
                            <li style="padding-left: 15px;">
                                <a href="#">
                                    <i class="fa-brands fa-youtube fa-lg"></i>
                                </a>
                            </li>
                            <li style="padding-left: 15px;">
                                <a href="#">
                                    <i class="fa-brands fa-instagram fa-lg"></i>
                                </a>
                            </li>
                            <li style="padding-left: 15px;">
                                <a href="#">
                                    <i class="fa-brands fa-twitter fa-lg"></i>
                                </a>
                            </li>
                            <li style="padding-left: 15px;">
                                <a href="#">
                                    <i class="fa-brands fa-facebook-f fa-lg"></i> 
                                </a>
                            </li>
                        </ul>
                    </div>

                    <!--Grid column-->
                    <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                        <h5 class="text-uppercase">Address</h5>
                        <ul class="list-unstyled mb-0">
                            <li>
                                <a href="#">123 Main Street</a>
                            </li>
                            <li>
                                <a href="#">Surabaya, Jawa Timur</a>
                            </li>
                            <li>
                                <a href="#">Indonesia</a>
                            </li>
                        </ul>
                    </div>
                    <!--Grid column-->
                </div>
                <!--Grid row-->
            </div>
            <!-- Grid container -->

            <!-- Copyright -->
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                © Copyright :
                <a class="text-white" href="#">Nothing's</a>
            </div>
            <!-- Copyright -->
        </footer>
        <!-- Footer -->
    </section>

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>
</html>