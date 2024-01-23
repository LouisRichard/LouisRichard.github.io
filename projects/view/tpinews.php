<?php
ob_start();
?>
<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
  <div class="container">

    <ol>
      <li><a href="../../index.html">Home</a></li>
      <li>projects</li>
      <li>web</li>
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
            This website was made in the context of my computer science formation at the <a href="https://cpnv.ch">CPNV</a>.<br/>
            It's a pretty basic website using PHP and a MariaDB database to store users and articles.<br/><br/>
            The website was unfortunately never finished. I realised quite late that I was lacking both time and skills to make the website what I wanted it to be.</br>
            (the picture shown were made during the conception of the project)
            I have no plan at this time to come back to it.
          </p>
        </div>
      </div>

    </div>

  </div>
</section><!-- End Portfolio Details Section -->

<?php
$content = ob_get_clean();
require "_template.php";