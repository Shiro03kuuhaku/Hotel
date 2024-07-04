<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Rooms Nothing's Hotel</title>
    <link rel="stylesheet" type="text/css" href="rooms.css">
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
    <br>
    <br>
    <!-- header end -->

    <!-- rooms -->

    <!-- FORM INPUT -->
    <div class="container" style="background-color: #00215E; border-radius: 15px;">
        <form action="" style="display: flex;">
            <div class="mb-4 mt-3" style="margin-left: 50px;">
                <label for="roomtype" class="form-label">Room Type:</label>
                <select class="form-select" id="roomtype" name="roomtype">
                    <option value="standard" selected disabled hidden>Select room type</option>
                    <option value="standard">Standard Room</option>
                    <option value="deluxe">Deluxe Room</option>
                    <option value="executive">Executive Room</option>
                </select>
            </div>

            <div class="mb-4 mt-3" style="margin-left: 10px;">
                <label for="numberofroom" class="form-label">Number Of Room:</label>
                <input type="number" class="form-control" rows="5" id="numberofroom" placeholder="Enter number" name="numberofroom">
            </div>

            <div class="mb-4 mt-3" style="margin-left: 10px;">
                <label for="cekin" class="form-label">Check In:</label>
                <input type="date" class="form-control" rows="5" id="cekin" name="cekin">
            </div>

            <div class="mb-4 mt-3" style="margin-left: 10px;">
                <label for="cekout" class="form-label">Check Out:</label>
                <input type="date" class="form-control" rows="5" id="cekout" name="cekout">
            </div>

            <div class="mb-4 mt-5" style="margin-left: 40px;">
                <button type="submit" class="btn" style="background-color: #F0A500; color: navy; width: 200px;">Search</button>
            </div>
        </form>
    </div>
    <br>
    <br>

    <div class="container" style="text-align: center;">
        <h1 style="margin-top: 40px; margin-bottom: 50px; text-align: left;">Standart Room</h1>
        <div class="row">
            <div class="col-md-6">
                <div class="card" style="margin-bottom: 20px;">
                    <img class="card-img-top" src="asset/images/bed3.jpg" alt="Card image" style="width: 100%;">
                </div>
            </div>
            <div class="col-md-6">
                <div class="card" style="margin-bottom: 20px;">
                    <div class="card-body">
                        <h4 class="card-title">Detail Room</h4>
                        <p class="card-text">Bed: Comfortable double bed with high-quality linens.</p>

                        <p class="card-text">Bathroom: Private bathroom with shower, clean towels, and toiletries.</p>

                        <p class="card-text">Amenities: Flat-screen TV with cable channels for in-room entertainment, air conditioning to keep the room comfortable, an electric kettle for making tea or coffee, a work desk, a chair, a wardrobe, and a reading lamp. Free Wi-Fi access to stay connected with family and friends.</p>

                        <a href="#" class="btn" style="background-color: #F0A500;float: right;">BOOK NOW</a>
                    </div>
                </div>
            </div>
        </div>
        <h1 style="margin-top: 40px; margin-bottom: 50px; text-align: left;">Deluxe Room</h1>
        <div class="row">
            <div class="col-md-6">
                <div class="card" style="margin-bottom: 20px;">
                    <img class="card-img-top" src="asset/images/bed2.jpg" alt="Card image" style="width: 100%;">
                </div>
            </div>
            <div class="col-md-6">
                <div class="card" style="margin-bottom: 20px;">
                    <div class="card-body">
                        <h4 class="card-title">Detail Room</h4>
                        <p class="card-text">Bed: Spacious and comfortable king-size bed.</p>

                        <p class="card-text">Bathroom: Private bathroom with shower, separate bathtub, luxurious towels, and premium toiletries.</p>

                        <p class="card-text">Amenities: Large flat-screen TV with cable channels for in-room entertainment, air conditioning, coffee maker, minibar with a selection of drinks and snacks, work desk, chair, sofa, large wardrobe, and reading lamp. Free Wi-Fi access and charging station for electronic devices.</p>

                        <a href="#" class="btn" style="background-color: #F0A500;float: right;">BOOK NOW</a>
                    </div>
                </div>
            </div>
        </div>
        <h1 style="margin-top: 40px; margin-bottom: 50px; text-align: left;">Executive Room</h1>
        <div class="row">
            <div class="col-md-6">
                <div class="card" style="margin-bottom: 20px;">
                    <img class="card-img-top" src="asset/images/bed4.jpg" alt="Card image" style="width: 100%;">
                </div>
            </div>
            <div class="col-md-6">
                <div class="card" style="margin-bottom: 20px;">
                    <div class="card-body">
                        <h4 class="card-title">Detail Room</h4>

                        <p class="card-text">Bed: King-size bed with high-quality linens.</p>

                        <p class="card-text">Bathroom: Private bathroom with shower, separate bathtub, luxurious towels, and premium toiletries.</p>

                        <p class="card-text">Amenities: Separate sitting area with a comfortable sofa, large flat-screen TV with premium cable channels, air conditioning, coffee maker, minibar with a selection of drinks and snacks, spacious work desk, ergonomic chair, large wardrobe with a safe, and reading lamp. Free Wi-Fi access, charging station for electronic devices, and telephone with 24-hour room service.</p>

                        <a href="#" class="btn" style="background-color: #F0A500;float: right;">BOOK NOW</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
</body>

</html>