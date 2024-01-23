<?php
/**
 * //TODO
 * Author   : louis.richard@tutanota.com
 * Project  : louisrichard.github.io / richard486.ch
 * Created  : JAN. 22 2024
 * Info     : This file has been adapted from another project : https://github.com/LouisRichard/tpi-news-website/
 *
 * Source       :   https://github.com/LouisRichard/louisrichard.github.io
 */

ob_start();
?>

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
  <section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

      <ol>
        <li><a href="../index.html">Home</a></li>
        <li><a href="projects.php">projects</a></li>
        <li>challenges</li>
      </ol>
      <h2>Challenges</h2>

    </div>
  </section><!-- End Breadcrumbs -->

  <section class="inner-page">
    <div class="container">
      <div class="section-title">
        <span>Challenges</span>
        <h2>Challenges</h2>
        <p>Challenges to test your skills</p>
      </div>

      <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="150">
          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <a href="projects.php?p=codeabbey">
              <img src="../assets/img/portfolio/challenges/codeabbey.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>CodeAbbey</h4>
              </div>
            </a>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <a href="projects.php?p=hackerrank">
              <img src="../assets/img/portfolio/challenges/hackerrank.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>HackerRank</h4>
              </div>
            </a>
          </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <a href="projects.php?p=rootme">
              <img src="../assets/img/portfolio/challenges/rootme.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>RootMe</h4>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

</main><!-- End #main -->

<?php
$content = ob_get_clean();
require "_template.php";