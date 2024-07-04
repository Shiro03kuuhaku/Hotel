<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="homepage.css">
	<link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
	<title>Home Page Nothing's Hotel</title>
</head>

<body>

<?php
	session_start();
	if(isset($_POST['book'])){
		$_SESSION['tgl_cekin'] = $_POST['tgl_cekin'];
		$_SESSION['tgl_cekout'] = $_POST['tgl_cekout'];
		$_SESSION['adult'] = $_POST['adult'];
		$_SESSION['child'] = $_POST['child'];
		}
?>
	<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
	  	<div class="container-fluid">
	  		<a class="navbar-brand" style="font-weight: bold; font-size: 20pt; color: #F0A500; margin-left: 50px;" href="#">
	  			<i class="fas fa-hotel"></i> | Nothing'S Hotel</i>
		    </a>
		    <!-- Links -->
		    <ul class="navbar-nav" style="margin-right: 50px;">
			    <li class="nav-item">
			        <a class="nav-link" href="homepage.php"><i class="fas fa-home"></i> Home</a>
			    </li>
			    <li class="nav-item">
			        <a class="nav-link" href="aboutus.html"><i class="fas fa-address-card"></i> About Us</a>
			    </li>
			    <li class="nav-item">
			        <a class="nav-link" href="rooms.html"><i class="fas fa-bed"></i> Rooms</a>
			    </li>
			    <li class="nav-item">
			        <a class="nav-link" href="fasilitas.html"><i class="fas fa-tv"></i></i> Facilities</a>
			    </li>
			    <li class="nav-item">
			        <a class="nav-link" href="contact-us.html"><i class="fas fa-address-book"></i></i> Contact |</a>
			    </li>
			    <li class="nav-item">
			        <a class="nav-link" href="#"><i class="fas fa-user fa-lg" style="margin-right: 20px;"></i></a>
			    </li>
		    </ul>
  		</div>
	</nav>
	<br>

	<h1 style="margin-top: 40px; margin-bottom: 30px; margin-left: 55px;">Booking Detail</h1>
	<!-- FORM INPUT -->
	<div class="container" style="background-color: #00215E; border-radius: 15px;">
		<form action="/action_page.php" style="display: flex; ">
			<div class="mb-4 mt-3" style="margin-left: 110px;">
			    <label for="cekin" class="form-label">Check In:</label>
			    <input type="date" class="form-control" rows="5" id="tgl_cekin" name="tgl_cekin" readonly="readonly" value="<?php echo $_SESSION['tgl_cekin']; ?>"/>
			</div>
			
			<div class="mb-4 mt-3" style="margin-left: 50px;">
			    <label for="cekout" class="form-label">Check Out:</label>
			    <input type="date" class="form-control" rows="5" id="tgl_cekout" name="tgl_cekout" readonly="readonly" value="<?php echo $_SESSION['tgl_cekout']; ?>"/>
			</div>

			<div class="mb-4 mt-3" style="margin-left: 50px;">
			    <label for="adult" class="form-label">Adult:</label>
			    <input type="number" class="form-control" rows="5" id="adult" placeholder="Enter number" name="adult" readonly="readonly" value="<?php echo $_SESSION['adult']; ?>"/>
			</div>

			<div class="mb-4 mt-3" style="margin-left: 50px;">
			    <label for="child" class="form-label">Children:</label>
			    <input type="number" class="form-control" rows="5" id="child" placeholder="Enter number" name="child" readonly="readonly" value="<?php echo $_SESSION['child']; ?>"/>
			</div>
		</form>
	</div>
	<br>

	<!-- CONTENT -->
	<div class="container" style="text-align: left; background-color: white;  box-shadow: 7px 7px 10px 5px; border: 1px solid black;">
		<form action="/action_page.php" style="padding: 20px;">
			<div class="mb-4 mt-3" style="margin-left: 10px;">
			    <label for="name" class="form-label">Name :</label>
			    <input type="text" class="form-control" rows="5" id="name" name="name" required>
			</div>
			
			<div class="mb-4 mt-3" style="margin-left: 10px;">
			    <label for="lname" class="form-label">Last Name :</label>
			    <input type="text" class="form-control" rows="5" id="lname" name="lname" required>
			</div>

			<div class="mb-4 mt-3" style="margin-left: 10px;">
			    <label for="phone" class="form-label">Phone Number :</label>
			    <input type="number" class="form-control" rows="5" id="phone" placeholder="Enter number" name="phone" required>
			</div>

			<div class="mb-4 mt-3" style="margin-left: 10px;">
			    <label for="email" class="form-label">Email :</label>
			    <input type="email" class="form-control" rows="5" id="email" placeholder="Enter email" name="email" required>
			</div>

			<div class="mb-4 mt-3" style="margin-left: 10px;">
			    <label for="roomtype" class="form-label">Room Type : </label>
			    <select class="form-select" id="roomtype" name="roomtype" required>
		            <option value="standard" selected disabled hidden> Select Room Type </option>
		            <option value="standard"> Standard Room </option>
		            <option value="deluxe"> Deluxe Room </option>
		            <option value="executive"> Executive Room </option>
        		</select>
			</div>

			<div class="mb-4 mt-5" style="margin-left: 40px;">
			    <button type="submit" class="btn" style="background-color: #F0A500; color: navy; width: 200px;">Book Now</button>
			</div>
		</form>
	</div>
	<br>


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
<script src="js/bootstrap.min.js"></script>
</body>
</html>