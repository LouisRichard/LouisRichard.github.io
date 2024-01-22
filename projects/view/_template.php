<?php
/**
 * Contains everything "static" in the web pages (menu, footer, etc...)
 * Author   : louis.richard@tutanota.com
 * Project  : louisrichard.github.io / richard486.ch
 * Created  : JAN. 22 2024
 * Info     : This file has been adapted from another project : https://github.com/LouisRichard/tpi-news-website/
 *
 * Source       :   https://github.com/LouisRichard/louisrichard.github.io
 */
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Louis Richard - Projects ~ </title>
  <script type='text/javascript'>
      (function titleScroller(text) {
          document.title = text;
          setTimeout(function () {
              titleScroller(text.substr(1) + text.substr(0, 1));
          }, 500);
      }("Louis Richard - Projects ~ "));
  </script>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../assets/img/favicon.png" rel="icon">
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Day
  * Updated: Jan 09 2024 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/day-multipurpose-html-template-for-free/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope-fill"></i><a href="mailto:louis@richard486.ch">louis@richard486.ch</a>
      </div>
      <div class="social-links d-none d-md-block">
        <a href="https://youtube.com/@aur.louisrichard" class="youtube"><i class="bi bi-youtube"></i></a>
        <a href="https://www.linkedin.com/in/louis-richard-8079b21a3/" class="linkedin"><i class="bi bi-linkedin"></i></a>
        <a href="https://github.com/louisrichard" class="github"><i class="bi bi-github"></i></a>
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="../index.html">Louis Richard</a></h1>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="../../index.html#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="../../index.html#about">About</a></li>
          <li><a class="nav-link scrollto " href="../../index.html#portfolio">Portfolio</a></li>
          <li class="dropdown"><a href="#"><span>Projects</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li class="dropdown"><a href="#"><span>Ongoing</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Thinkpad X60 repairs</a></li>
                  <li><a href="#">MacBook Pro 1502 repairs</a></li>
                </ul>
              </li>
              <li class="dropdown"><a href="#"><span>Apps</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="projects.php?p=gamelib">Game Library</a></li>
                  <li><a href="projects.php?p=awsscheduler">AWS Scheduler</a></li>
                  <li><a href="#">DWM</a></li>
                </ul>
              </li>
              <li class="dropdown"><a href="#"><span>Hardware</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="projects.php?p=numericdice">Numeric Dice</a></li>
                  <li><a href="#">Thinkpad X60 repairs</a></li>
                  <li><a href="#">MacBook Pro 1502 repairs</a></li>
                  <li><a href="#">Dell laptops repairs</a></li>
                </ul>
              </li>
              <li class="dropdown"><a href="#"><span>System</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">TrueNas Setup</a></li>
                  <li><a href="#">Linux Daily Driver</a></li>
                  <li><a href="#">Windows Server Setup</a></li>
                  <li><a href="#">DomoticZ</a></li>
                  <li><a href="#">Apache local server</a></li>
                </ul>
              </li>
              <li class="dropdown"><a href="#"><span>Web</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="projects.php?p=githubio">richard486.ch</a></li>
                  <li><a href="#">TPI - News Website</a></li>
                </ul>
              </li>
              <li class="dropdown"><a href="#"><span>Challenges</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="projects.php?p=codeabbey">CodeAbbey</a></li>
                  <li><a href="projects.php?p=hackerrank">HackerRank</a></li>
                  <li><a href="projects.php?p=rootme">Root-Me</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

  <?php
    echo $content;
  ?>

</main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-8 col-md-6">
            <div class="footer-info">
              <h3>Louis Richard</h3>
              <p>
                <strong>Email:</strong> louis@richard486.ch<br>
              </p>
              <div class="social-links mt-3">
                <a href="https://youtube.com/@aur.louisrichard" class="youtube"><i class="bx bxl-youtube"></i></a>
                <a href="https://www.linkedin.com/in/louis-richard-8079b21a3/" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                <a href="https://github.com/louisrichard" class="github"><i class="bx bxl-github"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="../index.html">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="../index.html#about">About me</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="../index.php#portfolio">portfolio</a></li>
            </ul>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Louis Richard</span></strong> <script>document.write(new Date().getFullYear())</script>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/day-multipurpose-html-template-for-free/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
<div id="preloader"></div>

<!-- Vendor JS Files -->
<script src="../assets/vendor/aos/aos.js"></script>
<script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="../assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="../assets/js/main.js"></script>

</body>

</html>

