<?php
$id=$_GET['id'];
include('conn.php');
$con=$GLOBALS['connection'];
$query9999="SELECT * FROM portfolio WHERE id='$id'";
                  $result9999 = mysqli_query($con, $query9999);
                  if(!$result9999){
                      die('Query Failed' . mysqli_error($con));
                  } 
                  $count = mysqli_num_rows($result9999);
                  if($count==1){
                      while($row=mysqli_fetch_assoc($result9999)){

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?php echo $row['name']; ?>'s Portfolio</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Satisfy" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Laura - v2.1.0
  * Template URL: https://bootstrapmade.com/laura-free-creative-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top  d-flex justify-content-center align-items-center header-transparent">

    <nav class="nav-menu d-none d-lg-block">
      <ul>
        <li class="active"><a href="index.html">Home</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#resume">Resume</a></li>
        <li><a href="#services">Services</a></li>
        <li><a href="#portfolio">Portfolio</a></li>
        <li><a href="#contact">Contact</a></li>

      </ul>
    </nav><!-- .nav-menu -->

  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <h1><?php echo $row['name']; ?></h1>
      <h2>I have been <?php echo $row['job1']; ?>, <?php echo $row['job2']; ?>, <?php echo $row['job3']; ?>, <?php echo $row['job4']; ?></h2>
      <a href="#about" class="btn-scroll scrollto" title="Scroll Down"><i class="bx bx-chevron-down"></i></a>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Me Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <span>About Me</span>
          <h2>About Me</h2>
          <p><?php echo $row['about']; ?></p>
        </div>

        <div class="row">
          <div class="image col-lg-4 d-flex align-items-stretch justify-content-center justify-content-lg-start"></div>
          <div class="col-lg-8 d-flex flex-column align-items-stretch">
            <div class="content pl-lg-4 d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-lg-6">
                  <ul>
                    <li><i class="icofont-rounded-right"></i> <strong>Name:</strong> <?php echo $row['name']; ?></li>
                    <li><i class="icofont-rounded-right"></i> <strong>Birthday:</strong> <?php echo $row['dob']; ?></li>
                  <li><i class="icofont-rounded-right"></i> <strong>Email:</strong> <?php echo $row['email']; ?></li>
                  
                  </ul>
                </div>
                <div class="col-lg-6">
                  <ul>
                    <li><i class="icofont-rounded-right"></i> <strong>Degree:</strong> <?php echo $row['e1']; ?></li>
                  <li><i class="icofont-rounded-right"></i> <strong>Gender:</strong> <?php echo $row['gender']; ?></li>
                  <li><i class="icofont-rounded-right"></i> <strong>Phone:</strong> <?php echo $row['mob']; ?></li>
                  </ul>
                </div>
              </div>
              <div class="row mt-n4">
                <div class="col-md-6 mt-5 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="icofont-simple-smile" style="color: #20b38e;"></i>
                    <span data-toggle="counter-up">65</span>
                    <p><strong>Happy Clients</strong></p>
                  </div>
                </div>

                <div class="col-md-6 mt-5 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="icofont-document-folder" style="color: #8a1ac2;"></i>
                    <span data-toggle="counter-up">5</span>
                    <p><strong>Projects</strong></p>
                  </div>
                </div>

                <div class="col-md-6 mt-5 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="icofont-clock-time" style="color: #2cbdee;"></i>
                    <span data-toggle="counter-up">4</span>
                    <p><strong>Years of experience</strong></p>
                  </div>
                </div>

                <div class="col-md-6 mt-5 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="icofont-award" style="color: #ffb459;"></i>
                    <span data-toggle="counter-up">2</span>
                    <p><strong>Awards</strong></p>
                  </div>
                </div>
              </div>
            </div><!-- End .content-->

            <div class="skills-content pl-lg-4">
              <div class="progress">
                <span class="skill"><?php echo $row['s1']; ?> <i class="val">100%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

              <div class="progress">
                <span class="skill"><?php echo $row['s2']; ?> <i class="val">90%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

              <div class="progress">
                <span class="skill"><?php echo $row['s3']; ?> <i class="val">85%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
              <div class="progress">
                <span class="skill"><?php echo $row['s4']; ?> <i class="val">75%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
              <p>My other relevant skills are <?php echo $row['skills']; ?></p>
            </div>

          </div>
        </div>

      </div>
    </section><!-- End About Me Section -->

    <!-- ======= My Resume Section ======= -->
    <section id="resume" class="resume">
      <div class="container">

        <div class="section-title">
          <span>My Resume</span>
          <h2>My Resume</h2>
          <p><?php echo $row['about']; ?></p>
        </div>

        <div class="row">
          <div class="col-lg-6">
            <h3 class="resume-title">Sumary</h3>
            <div class="resume-item pb-0">
              <h4><?php echo $row['name']; ?></h4>
              <p><em><?php echo $row['about']; ?></em></p>
              <ul>
                
                <li><?php echo $row['mob']; ?></li>
                <li><?php echo $row['email']; ?></li>
              </ul>
            </div>

            <h3 class="resume-title">Education</h3>
            <div class="resume-item">
              <h4><?php echo $row['e1']; ?></h4>
              
              <p><?php echo $row['ed1']; ?></p>
            </div>
            <div class="resume-item">
              <h4><?php echo $row['e2']; ?></h4>
              
              <p><?php echo $row['ed2']; ?></p>
            </div>
          </div>
          <div class="col-lg-6">
            <h3 class="resume-title">Professional Experience</h3>
            <div class="resume-item">
              <h4><?php echo $row['job1']; ?></h4>
              
              <p><?php echo $row['jobd1']; ?></p>
            </div>
            <div class="resume-item">
              <h4><?php echo $row['job2']; ?></h4>
              
              <p><?php echo $row['jobd2']; ?></p>
            </div>
            <div class="resume-item">
              <h4><?php echo $row['job3']; ?></h4>
              
              <p><?php echo $row['jobd3']; ?></p>
            </div>
            <div class="resume-item">
              <h4><?php echo $row['job4']; ?></h4>
              
              <p><?php echo $row['jobd4']; ?></p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End My Resume Section -->

    <!-- ======= My Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title">
          <span>My Project</span>
          <h2>My Projects</h2>
          <p>Some of my awesome projects are mentioned as follows :</p>
        </div>

        <div class="row">
          <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4 class="title"><a href=""><?php echo $row['p1']; ?></a></h4>
              <p class="description"><?php echo $row['pd1']; ?></p>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4 class="title"><a href=""><?php echo $row['p2']; ?></a></h4>
              <p class="description"><?php echo $row['pd2']; ?></p>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4 class="title"><a href=""><?php echo $row['p3']; ?></a></h4>
              <p class="description"><?php echo $row['pd3']; ?></p>
            </div>
          </div>

          

        </div>

      </div>
    </section><!-- End My Services Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container">

        <div class="owl-carousel testimonials-carousel">

          <div class="testimonial-item">
            
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              <?php echo $row['a1']; ?>
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>

          <div class="testimonial-item">
            
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              <?php echo $row['a2']; ?>
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>
          <div class="testimonial-item">
            
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              <?php echo $row['a3']; ?>
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>
          <div class="testimonial-item">
            
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              <?php echo $row['a4']; ?>
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>

        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Pricing Section ======= -->
 
    <!-- ======= Contact Me Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <span>Contact Me</span>
          <h2>Contact Me</h2>
          <p>My Contact Info are as follows</p>
        </div>

        <div class="row">

          <div class="col-lg-6">

            <div class="row">
              <div class="col-md-12">
                <div class="info-box">
                  <i class="bx bx-share-alt"></i>
                  <h3>Social Profiles</h3>
                  <div class="social-links">
                    <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
                    <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
                    <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
                    <a href="#" class="google-plus"><i class="icofont-skype"></i></a>
                    <a href="#" class="linkedin"><i class="icofont-linkedin"></i></a>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-envelope"></i>
                  <h3>Email Me</h3>
                  <p><?php echo $row['email']; ?></p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-phone-call"></i>
                  <h3>Call Me</h3>
                  <p><?php echo $row['mob']; ?></p>
                </div>
              </div>
            </div>

          </div>

          <div class="col-lg-6">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="form-row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="6" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Me Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <h3><?php echo $row['name']; ?></h3>
      <p><?php echo $row['about']; ?></p>
      <div class="social-links">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
      <div class="copyright">
        &copy; Copyright <strong><span><?php echo $row['name']; ?></span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/laura-free-creative-bootstrap-theme/ -->
        Designed by <a href="#">Friday</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
<?php
}
}
?>