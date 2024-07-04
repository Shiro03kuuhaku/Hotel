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
					<a class="nav-link" href="rooms.php"><i class="fas fa-bed"></i> Rooms</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="index.html"><i class="fas fa-tv"></i></i> Facilities</a>
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

	<!-- Carousel -->
	<div id="demo" class="carousel slide" data-bs-ride="carousel">
		<!-- Indicators/dots -->
		<div class="carousel-indicators">
			<button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
			<button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
			<button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
		</div>

		<!-- The slideshow/carousel -->
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="img/pic6.jpg" class="d-block w-100">
				<div class="carousel-caption d-none d-md-block">
					<h1 class="h1_jumbotron text-white">Welcome To <span class="font-weight-bold">NOTHING"S HOTEL</span> Website</h1>
					<hr class="my-4">
					<p class="p">Indulge in Unforgettable Moments of Luxury and Comfort</p>
					<button type="submit" class="btn btn-dark btn-lg" style="color: #F0A500;">Book Now</button>
					<!-- <a class="btn  " href="#" style="color: #F0A500;" role="button">Book Now</a> -->
				</div>
			</div>
			<div class="carousel-item">
				<img src="img/pic2.jpg" class="d-block w-100">
			</div>
			<div class="carousel-item">
				<img src="img/pic3.jpg" class="d-block w-100">
			</div>
		</div>

		<!-- Left and right controls/icons -->
		<button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
			<span class="carousel-control-prev-icon"></span>
			<span class="visually-hidden">Previous</span>
		</button>
		<button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
			<span class="carousel-control-next-icon"></span>
			<span class="visually-hidden">Next</span>
		</button>
	</div>
	<br>

	<!-- FORM INPUT -->
	<div class="container" style="background-color: #00215E; border-radius: 15px;">
		<form action="reservasi.php" method="post" style="display: flex;">
			<div class="mb-4 mt-3" style="margin-left: 50px;">
				<label for="tgl_cekin" class="form-label">Check In:</label>
				<input type="date" class="form-control" rows="5" id="tgl_cekin" name="tgl_cekin">
			</div>

			<div class="mb-4 mt-3" style="margin-left: 10px;">
				<label for="tgl_cekout" class="form-label">Check Out:</label>
				<input type="date" class="form-control" rows="5" id="tgl_cekout" name="tgl_cekout">
			</div>

			<div class="mb-4 mt-3" style="margin-left: 10px;">
				<label for="adult" class="form-label">Adult:</label>
				<input type="number" class="form-control" rows="5" id="adult" placeholder="Enter number" name="adult">
			</div>

			<div class="mb-4 mt-3" style="margin-left: 10px;">
				<label for="child" class="form-label">Children:</label>
				<input type="number" class="form-control" rows="5" id="child" placeholder="Enter number" name="child">
			</div>
			<div class="mb-4 mt-5" style="margin-left: 40px;">
				<button type="submit" name="book" class="btn" style="background-color: #F0A500; color: navy; width: 200px;">Book Now</button>
			</div>
		</form>
	</div>
	<br>

	<!-- CONTENT -->
	<div class="container" style="display: flex; ">
		<img src="img/aston.jpg" class="aston">
		<h2>"Escape to Exquisite Elegance: Where Every Stay Unfolds a Symphony of Serenity and Opulence"</h2>
	</div>
	<br>

	<div class="container" style="text-align: center;">
		<h1 style="margin-top: 40px; margin-bottom: 50px;">Room and Rates</h1>
		<div class="container" style="display: flex;">
			<div class="card" style="width:400px; margin-left: 50px;">
				<img class="card-img-top" src="img/bed3.jpg" alt="Card image">
				<div class="card-body">
					<h4 class="card-title">Standart Room</h4>
					<p class="card-text">The room area is approximately 25-30 square meters, equipped with a TV, air conditioning, and a sofa.</p>
					<a href="#" class="btn" style="background-color: #F0A500;">$100</a>
				</div>
			</div>
			<div class="card" style="width:400px; margin-left: 20px;">
				<img class="card-img-top" src="img/bed2.jpg" alt="Card image">
				<div class="card-body">
					<h4 class="card-title">Executive Room</h4>
					<p class="card-text">The room area is approximately 35-40 square meters, equipped with a TV, air conditioning, a coffee maker, and a sofa.</p>
					<a href="#" class="btn" style="background-color: #F0A500;">$180</a>
				</div>
			</div>
			<div class="card" style="width:400px; margin-left: 20px;">
				<img class="card-img-top" src="img/bed4.jpg" alt="Card image">
				<div class="card-body">
					<h4 class="card-title">Deluxe Room</h4>
					<p class="card-text">The room area is approximately 35-40 square meters, equipped with a TV, air conditioning, a coffee maker, a bathtub, and a sofa.</p>
					<a href="#" class="btn" style="background-color: #F0A500;">$150</a>
				</div>
			</div>
		</div>

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