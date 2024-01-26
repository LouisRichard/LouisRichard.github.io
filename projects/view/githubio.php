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
      <li>this website</li>
    </ol>
    <h2>This website!</h2>

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
              <img src="../assets/img/portfolio/web/githubio/V1.jpg" alt="V1.0">
            </div>

            <div class="swiper-slide">
              <img src="../assets/img/portfolio/web/githubio/V2.jpg" alt="V2.0">
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
            <li><strong>Client</strong>: Me</li>
            <li><strong>Project date</strong>: FEB, 2020 - Today</li>
            <li><strong>Project Source</strong>: <a href="https://github.com/LouisRichard/louisrichard.github.io">Project on GitHub</a></li>
            <li><strong>Project URL</strong>: <a href="https://richard486.ch">richard486.ch</a></li>
            <li><strong>Project URL</strong>: <a href="https://louisrichard.github.io">Website on github.io</a></li>
          </ul>
        </div>
        <div class="portfolio-description">
          <h2>Is this some kind of recursion joke?</h2>
          <p>
          This project initially began because it was recommended for us to create a portfolio, so here we are.</br>
          I quite enjoy keeping it up to date now, and I can see the benefits of having your own website.</br>
          Initially, I intended not to use a template and do everything by myself. Unfortunately, I'm not that proficient in web design, so I ended up using one anyway. Oopsy~~
          </p>
        </div>
      </div>

    </div>

  </div>
</section><!-- End Portfolio Details Section -->

<?php
$content = ob_get_clean();
require "_template.php";