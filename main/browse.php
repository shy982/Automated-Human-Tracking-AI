<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Browse People - God's Eye</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Free Website Template" name="keywords">
        <meta content="Free Website Template" name="description">

        <!-- Favicon -->
        <link href="img/GEicon.jpg" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">

        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>
        <!-- Top Bar Start -->
         <div class="top-bar d-none d-md-block">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <div class="top-bar-left">
                            <div class="text">
                                <h2>God's Eye</h2>
                                <p>Automated Tracking</p>
                            </div>
                            <div class="text">
                                <h2>+123 456 7890</h2>
                                <p>Call Us For Queries/Issues</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="top-bar-right">
                            <div class="social">
                                <a href=""><i class="fab fa-twitter"></i></a>
                                <a href=""><i class="fab fa-facebook-f"></i></a>
                                <a href=""><i class="fab fa-linkedin-in"></i></a>
                                <a href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Top Bar End -->

        <!-- Nav Bar Start -->
        <div class="navbar navbar-expand-lg bg-dark navbar-dark">
            <div class="container-fluid">
                <a href="index.html" class="navbar-brand">GodView <span>X</span></a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav ml-auto">
                        <a href="home.php" class="nav-item nav-link">Home</a>
                        <a href="about.php" class="nav-item nav-link">Photo Based Search</a>
                        <a href="cityfootage.php" class="nav-item nav-link">View City Footage</a>
                        <a href="browse.php" class="nav-item nav-link">Browse People</a>
                        <a href="rating.php" class="nav-item nav-link">Ratings & Feedback</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Nav Bar End -->

        <!-- Page Header Start -->
        <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Browse People</h2>
                    </div>
                    <div class="col-12">
                        <a href="">Home</a>
                        <a href="">Browse People</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->


        <!-- Portfolio Start -->
        <div class="portfolio">
            <div class="container">
                <div class="section-header text-center">
                    <p>Some Images of People Searched on God's Eye </p>
                    <h2>God's Eye Gallery</h2>
                </div>
                <div class="row">
                    <div class="col-12">
                        <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active">All</li>
                            <li data-filter=".first">Most Recent</li>
                            <li data-filter=".second">Most Searched</li>
                            <!-- <li data-filter=".third">Color & Wash</li> -->
                        </ul>
                    </div>
                </div>
                <div class="row portfolio-container">
                    <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item first">
                        <div class="portfolio-wrap">
                            <a href="RecentPeople/img1.jpeg" data-lightbox="portfolio">
                                <img height = "200px" width = "200px" src="RecentPeople/img1.jpeg" alt="Portfolio Image">
                            </a>
                            
                        </div>
                        <form action = "loadingpagebrowse.php" method="post">
                                    <button name="test1" class = "nowbutton" >Run God's Eye for this Person!</button>
                        </form>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item second">
                        <div class="portfolio-wrap">
                            <a href="RecentPeople/img2.jpeg" data-lightbox="portfolio">
                                <img height = "200px" width = "200px" src="RecentPeople/img2.jpeg" alt="Portfolio Image">
                            </a>
                            
                        </div>
                        <form action = "loadingpagebrowse.php" method="post">
                                    <button name="test2" class = "nowbutton" >Run God's Eye for this Person!</button>
                        </form>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item third">
                        <div class="portfolio-wrap">
                            <a href="RecentPeople/img3.jpeg" data-lightbox="portfolio">
                                <img height = "200px" width = "200px" src="RecentPeople/img3.jpeg" alt="Portfolio Image">
                            </a>
                            
                        </div>
                        <form action = "loadingpagebrowse.php" method="post">
                                    <button name="test3" class = "nowbutton" >Run God's Eye for this Person!</button>
                            </form>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item first">
                        <div class="portfolio-wrap">
                            <a href="RecentPeople/img4.jpeg" data-lightbox="portfolio">
                                <img height = "200px" width = "200px" src="RecentPeople/img4.jpeg" alt="Portfolio Image">
                            </a>
                            
                        </div>
                        <form action = "loadingpagebrowse.php" method="post">
                                    <button name="test4" class = "nowbutton" >Run God's Eye for this Person!</button>
                            </form>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item second">
                        <div class="portfolio-wrap">
                            <a href="RecentPeople/img5.jpeg" data-lightbox="portfolio">
                                <img height = "200px" width = "200px" src="RecentPeople/img5.jpeg" alt="Portfolio Image">
                            </a>
                            
                        </div>
                        <form action = "loadingpagebrowse.php" method="post">
                                    <button name="test5" class = "nowbutton" >Run God's Eye for this Person!</button>
                            </form>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item third">
                        <div class="portfolio-wrap">
                            <a href="RecentPeople/img6.jpeg" data-lightbox="portfolio">
                                <img height = "200px" width = "200px"  src="RecentPeople/img6.jpeg" alt="Portfolio Image">
                            </a>
                            
                        </div>
                        <form action = "loadingpagebrowse.php" method="post">
                                    <button name="test6" class = "nowbutton" >Run God's Eye for this Person!</button>
                            </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Start -->


        <!-- Footer Start -->
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="footer-contact">
                                    <h2>God's Eye Inc.</h2>
                                    <p><i class="fa fa-map-marker-alt"></i>NIE, Manandavadi Road, Mysore, India</p>
                                    <p><i class="fa fa-phone-alt"></i>+91 9876543210</p>
                                    <p><i class="fa fa-envelope"></i>sagarca777@gmail.com</p>
                                    <div class="footer-social">
                                        <a href=""><i class="fab fa-twitter"></i></a>
                                        <a href=""><i class="fab fa-facebook-f"></i></a>
                                        <a href=""><i class="fab fa-youtube"></i></a>
                                        <a href=""><i class="fab fa-instagram"></i></a>
                                        <a href=""><i class="fab fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="footer-link">
                                    <h2>Quick Links</h2>
                                    <a href="">Terms of use</a>
                                    <a href="">Privacy policy</a>
                                    <a href="">Cookies</a>
                                    <a href="">Help</a>
                                    <a href="">FAQs</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="footer-newsletter">
                            <h2>Disclaimer</h2>
                            <p>
                                God's Eye Inc. & Its developers are neither responsible nor liable to any damage or personal loss that may occur due to
                                the use of the data provided.  
                            </p>
                            <div class="form">
                                <input class="form-control" placeholder="Email ID for newsletter">
                                <button class="btn">Subscribe</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container copyright">
                <div class="row">
                    <div class="col-md-6">
                        <p>&copy; <a href="#">God's Eye Inc.</a>, All Right Reserved.</p>
                    </div>
                    <div class="col-md-6">
                        <p>Designed By <a href="home.php">Team God's Eye</a></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->

        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/isotope/isotope.pkgd.min.js"></script>
        <script src="lib/lightbox/js/lightbox.min.js"></script>

        <!-- Contact Javascript File -->
        <script src="mail/jqBootstrapValidation.min.js"></script>
        <script src="mail/contact.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>

            
    </body>
</html>
