<?php
ob_start();
?>
<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
  <div class="container">

    <ol>
      <li><a href="../../index.html">Home</a></li>
      <li><a href="projects.php">projects</a></li>
      <li><a href="projects.php?p=cat_web">web</a></li>
      <li>tpi - news website</li>
    </ol>
    <h2>News Website</h2>

  </div>
</section><!-- End Breadcrumbs -->

<!-- ======= Portfolio Details Section ======= -->
<section id="portfolio-details" class="portfolio-details">
  <div class="container">

    <div class="row gy-4">

      <div class="col-lg-8">
        <div class="portfolio-details-slider swiper">
          <div class="swiper-wrapper align-items-center">

            <div class="swiper-slide">
              <img src="../assets/img/portfolio/web/tpinews/home.jpg" alt="Home page">
            </div>

            <div class="swiper-slide">
              <img src="../assets/img/portfolio/web/tpinews/comments.jpg" alt="Comments">
            </div>

            <div class="swiper-slide">
              <img src="../assets/img/portfolio/web/tpinews/filter.jpg" alt="filters on article page">
            </div>

            <div class="swiper-slide">
              <img src="../assets/img/portfolio/web/tpinews/addarticle.jpg" alt="Adding an article">
            </div>
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="portfolio-info">
          <h3>Project information</h3>
          <ul>
            <li><strong>Category</strong>: Web</li>
            <li><strong>Client</strong>: Me / <a href="https://cpnv.ch/">CPNV</a></li>
            <li><strong>Project date</strong>: MAY 2, 2022 - May, 31 2022</li>
            <li><strong>Project Source</strong>: <a href="https://github.com/LouisRichard/tpi-news-website">Project on GitHub</a></li>
            <li><strong>Project URL</strong>: Server taken down</li>
          </ul>
        </div>
        <div class="portfolio-description">
          <h2>Final project of my formation</h2>
          <p>
          This website was developed during my computer science education at the<a href="https://cpnv.ch">CPNV</a>.<br/>
          It's a straightforward website built using PHP and a MariaDB database to manage users and articles.<br/><br/>
          Regrettably, the website was never completed. I came to the realization rather late that I lacked both the time and the necessary skills to fulfill my vision for the website.</br>
          (The pictures shown were taken during the project's conception)
          At present, I have no plans to revisit it.
          </p>
        </div>
      </div>

    </div>

  </div>
</section><!-- End Portfolio Details Section -->

<?php
$content = ob_get_clean();
require "_template.php";