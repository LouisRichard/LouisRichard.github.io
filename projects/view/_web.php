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
        <li>web</li>
      </ol>
      <h2>Web applications</h2>

    </div>
  </section><!-- End Breadcrumbs -->

  <section class="inner-page">
    <div class="container">
      <div class="section-title">
        <span>Web</span>
        <h2>Web</h2>
        <p>Web apps, websites, etc</p>
      </div>

      <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="150">
          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <a href="projects.php?p=githubio">
              <img src="../assets/img/portfolio/web/githubio.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>github.io / richard486.ch</h4>
              </div>
            </a>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <a href="projects.php?p=tpinews">
              <img src="../assets/img/portfolio/web/tpinews.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>TPI - News website</h4>
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