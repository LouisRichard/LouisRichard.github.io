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
      <li>hackerrank<li>
    </ol>
    <h2>HackerRank</h2>

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
              <img src="../assets/img/portfolio/challenges/hackerrank.jpg" alt="">
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
            <li><strong>Project date</strong>: 2021 - Today</li>
            <li><strong>Public profile</strong>: <a href="https://www.hackerrank.com/profile/louis_richard">@louis_richard</a>
          </ul>
        </div>
        <div class="portfolio-description">
          <h2>Series of challenges to solve</h2>
          <p>
          A productive way to pass the time is by striving to enhance your skills within your field of expertise.<br/>
          That's precisely what I'm doing here. I enjoy practicing and learning on HackerRank. Initially, I used it to review SQL and delve into Ruby programming. However, there are still many areas on the platform that I have yet to explore.<br/>
          A few challenges have been tackled collaboratively with my classmate <a href="https://github.com/jonashau/">Jonas Hautier</a>. Nevertheless, we both endeavor to tackle them individually.
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