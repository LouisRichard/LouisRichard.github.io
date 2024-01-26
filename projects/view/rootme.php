<?php
ob_start();
?>
<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
  <div class="container">

    <ol>
      <li><a href="../../index.html">Home</a></li>
      <li><a href="projects.php">projects</a></li>
      <li><a href="projects.php?p=cat_challenges">challenges</a></li>
      <li>rootme<li>
    </ol>
    <h2>Root-Me</h2>

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
              <img src="../assets/img/portfolio/challenges/rootme.jpg" alt="">
            </div>
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="portfolio-info">
          <h3>Project information</h3>
          <ul>
            <li><strong>Category</strong>: Challenges</li>
            <li><strong>Client</strong>: Me</li>
            <li><strong>Project date</strong>: 2019 - Today</li>
            <li><strong>Public profile</strong>: <a href="https://www.root-me.org/Yukami">Yukami</a>
          </ul>
        </div>
        <div class="portfolio-description">
          <h2>Series of challenges to solve</h2>
          <p>
          Yet another website I like to go to to challenge myself and learn new tricks.<br/>
          This platform tends to be more advanced, focusing on hacking techniques and real-world scenarios (including what to avoid).<br/>
          I must confess that it's been a while since I last visited this website, though...<br/>
          Some of the challenges have been tackled collaboratively with my classmate <a href="https://github.com/jonashau/">Jonas Hautier</a>. However, we both strive to tackle them individually.
          <br/><br/>
          Please note that solutions will not be provided unless requested.
          </p>
        </div>
      </div>

    </div>

  </div>
</section><!-- End Portfolio Details Section -->

<?php
$content = ob_get_clean();
require "_template.php";