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
        <li>projects</li>
      </ol>
      <h2>All my projects</h2>

    </div>
  </section><!-- End Breadcrumbs -->

  <section class="inner-page">
    <div class="container">
      <div class="section-title">
        <span>Projects</span>
        <h2>Projects</h2>
        <p>Here are the different project categories</p>
      </div>

      <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="150">
          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <a href="projects.php?p=cat_ongoing">
              <img src="../assets/img/portfolio/_categories/ongoing.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Ongoing projects</h4>
              </div>
            </a>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <a href="projects.php?p=cat_apps">
              <img src="../assets/img/portfolio/_categories/apps.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App</h4>
              </div>
            </a>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <a href="projects.php?p=githubio">
              <img src="../assets/img/portfolio/_categories/hardware.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Hardware</h4>
              </div>
            </a>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <a href="projects.php?p=githubio">
              <img src="../assets/img/portfolio/_categories/system.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>System</h4>
              </div>
            </a>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <a href="projects.php?p=githubio">
              <img src="../assets/img/portfolio/_categories/web.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Web</h4>
              </div>
            </a>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <a href="projects.php?p=githubio">
              <img src="../assets/img/portfolio/_categories/challenges.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Challenges</h4>
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