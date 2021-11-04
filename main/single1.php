<!DOCTYPE html>
<html lang="en">
<!-- C:\Users\SPECTER\AppData\Local\Programs\Python\Python36 -->
        <?php
            $secondsWait = 15;
            header("Refresh:$secondsWait");
        ?>
    <head>
        <meta charset="utf-8">
        <title>Tracking Information - God's Eye</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Free Website Template" name="keywords">
        <meta content="Free Website Template" name="description">

        <!-- Favicon -->
        <link href="GEicon.jpg" rel="icon">

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
                <a href="index.html" class="navbar-brand">GodTrack<span>X</span></a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav ml-auto">
                        <a href="index.php" class="nav-item nav-link">Home</a>
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
                        <h2>Tracking Information</h2>
                    </div>
                    <div class="col-12">
                        <a href="">Home</a>
                        <a href="">Tracking Information</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->

       
        
         <p>&nbsp;&nbsp;&nbsp;&nbsp;<em>God's Eye Running in Background</em>
        <svg height="60" width="50" class="blinking">
          <circle cx="20" cy="28" r="10" fill="red" />
          Sorry, your browser does not support inline SVG.  
        </svg> </p>
       
        <!-- Single Page Start -->
        <div class="single">
            <div class="container">
                <div class="section-header text-center">
                    <h3>Tracking Information of Requested Person</h3>
                     <h6> (Note: This page will take time to populate and thus may 
        reload multiple times to capture the  most recent data)</h6>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class = "our-guy-img">
                            <img src="Database\InputImage\img.jpeg" alt="Image">
                            <h4>Our Search Algorithm Mapped this Face to be present <br> in the following Location(s)</h4>
                        </div>
                        <?php
                            error_reporting(0);
                            $target_dir = "Database/InputImage/";
                            $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
                            $uploadOk = 1;
                            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

                            // Check if image file is a actual image or fake image
                            if(isset($_POST["submit"])) {
                              $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
                              if($check !== false) {
                                //echo "File is an image - " . $check["mime"] . ".";
                                $uploadOk = 1;
                              } else {
                                echo "File is not an image.";
                                $uploadOk = 0;
                              }
                            }

                            // Check if file already exists
                            if (file_exists($target_file)) {
                              //echo "Sorry, file already exists.";
                              $uploadOk = 0;
                            }

                            // Check file size
                            if ($_FILES["fileToUpload"]["size"] > 500000) {
                              //echo "Sorry, your file is too large.";
                              $uploadOk = 0;
                            }

                            // Allow certain file formats
                            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                            && $imageFileType != "gif" ) {
                              //echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                              $uploadOk = 0;
                            }

                            // Check if $uploadOk is set to 0 by an error
                            if ($uploadOk == 0) {
                              //echo "Sorry, your file was not uploaded.";
                            // if everything is ok, try to upload file
                            } else {
                              if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                                //echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                              } else {
                                //echo "Sorry, there was an error uploading your file.";
                              }
                            }
                            rename($target_dir.basename($_FILES["fileToUpload"]["name"]),"Database/InputImage/img.jpeg");
                        ?>
                       <!--  <?php
                       // $script_exec = "python C:\Users\SPECTER\Desktop\Bio_Mapping_Module\just_checking_stuff.py";
                        //exec($script_exec);
                        ?> -->
                        <div class = "subject-table">
                            <table class = "styled-table">
                            <tr class = "active-row">
                            <th>Last Seen Locations </th>
                            <th>Last Seen at (Time)</th>
                            </tr>
                            <?php
                                    $servername = "localhost";
                                    $username = "root";
                                    $password = "";
                                    $dbase="fyp";
                                    $conn = mysqli_connect($servername, $username, $password);

                                    // Check connection
                                    if (!$conn) {
                                        echo 'Could Not Connect to the Database server';
                                    }
                                    if(!mysqli_select_db($conn,'fyp'))
                                    {
                                    echo 'Oops, Database not selected';
                                    }
                                    $sql="select area,time from our_guy_table2 order by time desc";
                                    $result=mysqli_query($conn,$sql);
                                    if(mysqli_num_rows($result)>0)
                                    {
                                        while($row=$result->fetch_assoc())
                                        {
                                            echo "<tr><td>".$row["area"]."</td><td>".$row["time"]."</td></tr>";
                                        }
                                        // echo "</table>";
                                    }
                            ?>
                            </table>
                        </div>
                        <ul class='loading-frame'>
                          <div class='circle'></div>
                          <div class='circle'></div>
                          <div class='circle'></div>
                          <div class='circle'></div>
                          <div class='circle'></div>
                          <div class='circle'></div>
                          <div class='circle'></div>
                          <div class='circle'></div>
                          <div class='circle'></div>
                          <div class='circle'></div>
                        </ul>
                        <!--  -->
                         <div class="mapouter">
                            <div class="gmap_canvas">
                             <?php
                                    $servername = "localhost";
                                    $username = "root";
                                    $password = "";
                                    $dbase="fyp";
                                    $conn = mysqli_connect($servername, $username, $password);

                                    // Check connection
                                    if (!$conn) {
                                        echo 'Could Not Connect to the Database server';
                                    }
                                    if(!mysqli_select_db($conn,'fyp'))
                                    {
                                    echo 'Oops, Database not selected';
                                    }
                                    $sql="select * from our_guy_table2 order by time desc limit 1";
                                    $result=mysqli_query($conn,$sql);
                                    if(mysqli_num_rows($result)>0)
                                    {
                                        while($row=$result->fetch_assoc())
                                        {   $gmap = $row["iframe"];
                                            $area = $row["area"];
                                            echo "<iframe width=\"500\" height=\"400\" id=\"gmap_canvas\"  src = $gmap \"
                                            frameborder=\"0\" scrolling=\"no\" marginheight=\"0\"marginwidth=\"0\"></iframe>";
                                            echo "<h6>As per our Geolocation data, Subject was most recently found at <strong>$area</strong></h6>";
                                        }
                                    }
                                    
                            ?>
                            <style>.mapouter{position:relative;text-align:center;left: 600px;top:60px;height:400px;width:500px;}
                            .mapouter h6{ position: absolute; left: 10px; top: 420px; }
                            </style>
                                <a href="https://www.embedgooglemap.net"></a>
                                <style>.gmap_canvas {overflow:hidden;background:none!important;height:400px;width:500px;left: 600px;top:60px;}
                            </style>
                        </div>
                    </div>
                    
            

                     <!-- The Video of the guy in the most recent location -->
                    <div class="hero" style= "top: 200px;">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-sm-12 col-md-6" style = "background-image: url(img/bg.png);">
                                    <div class="hero-text" style = "background-image: url(img/bg.png);">
                                        <h1>CCTV Footage of the person spotted at the most recent location</h1>
                                        <p>
                                            This is one of the many CCTV Footages examined by God's Eye in search of the requested person!
                                        </p>
                                       <!--  <a class="btn" href="">Download Now</a> -->
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6 d-none d-md-block" style = "background-image: url(img/bg.png);">
                                    <div class="hero-image" style = "background-image: url(img/bg.png);">
                                        <img src="Database\InputImage\img.jpeg" alt="Hero Image">
                                    </div>
                                </div>
                            </div>
                            <?php
                                    $servername = "localhost";
                                    $username = "root";
                                    $password = "";
                                    $dbase="fyp";
                                    $conn = mysqli_connect($servername, $username, $password);

                                    // Check connection
                                    if (!$conn) {
                                        echo 'Could Not Connect to the Database server';
                                    }
                                    if(!mysqli_select_db($conn,'fyp'))
                                    {
                                    echo 'Oops, Database not selected';
                                    }
                                    $sql="select * from our_guy_table2 order by time desc limit 1";
                                    $result=mysqli_query($conn,$sql);
                                    $path = "Database/OutputVideo/";
                                    if(mysqli_num_rows($result)>0)
                                    {
                                        while($row=$result->fetch_assoc())
                                        {   $output = $row["output"];
                                            $mp4 = ".mp4";
                                           echo "<button type=\"button\" class=\"btn-play\" data-toggle=\"modal\" data-src= \"$path$output$mp4\"
                                            data-target=\"#videoModal\"><span></span></button>";
                                        }
                                    }
                            
                            ?>
                            
                        </div>
                    </div>
                    <!-- Hero End -->

                    <!-- Video Modal Start-->
                    <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>        
                                    <!-- 16:9 aspect ratio -->
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <iframe class="embed-responsive-item" src="" id="video"  allowscriptaccess="always" allow="autoplay"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
        


                    </div>
                </div>
            </div>
        </div>
       

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
                        <p>Designed By <a href="https://htmlcodex.com">Team God's Eye</a></p>
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
