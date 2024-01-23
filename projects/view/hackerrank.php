<?php
ob_start();
?>
<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
  <div class="container">

    <ol>
      <li><a href="../../index.html">Home</a></li>
      <li>projects</li>
      <li>challenges</li>
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
          A nice thing to do when you have time to kill is to try and improve your performances in your domain.<br/>
          That's basically what I'm doing here. I like to practice and learn on HackerRank. I mainly used it to revise SQL and learn a bit of ruby. I still have a lot of things to explore there.<br/>
          Some of the challenges have been resolved as a team of two with my classmate <a href="https://github.com/jonashau/">Jonas Hautier</a>. We both still try to do them by ourselves.
          <br/><br/>
          No solution will be provided unless asked for.
          </p>
        </div>
      </div>

    </div>

  </div>
</section><!-- End Portfolio Details Section -->

<?php
$content = ob_get_clean();
require "_template.php";