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
        <li>hardware</li>
      </ol>
      <h2>Hardware</h2>

    </div>
  </section><!-- End Breadcrumbs -->

  <section class="inner-page">
    <div class="container">
      <div class="section-title">
        <span>Hardware</span>
        <h2>Hardware</h2>
        <p>Embedded systems, repairs and upgrades</p>
      </div>

      <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="150">
          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <a href="projects.php?p=gamelib">
              <img src="../assets/img/portfolio/hardware/numericdice.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Numeric dice</h4>
              </div>
            </a>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <a href="projects.php?p=mbprepairs">
              <img src="../assets/img/portfolio/hardware/mbprepairs.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>MacBook Pro 1502 repairs</h4>
              </div>
            </a>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <a href="projects.php?p=dellupre">
              <img src="../assets/img/portfolio/hardware/dellupre.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Dell laptops updgrades and repairs</h4>
              </div>
            </a>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <a href="projects.php?p=a1286">
              <img src="../assets/img/portfolio/hardware/a1286.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>MacBook Pro 1286 repairs</h4>
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