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
      <li>codeabbey<li>
    </ol>
    <h2>CodeAbbey</h2>

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
              <img src="https://codeabbey.com/img/facade.gif" alt="CodeAbbey's facade">
            </div>

            <div class="swiper-slide">
              <img src="../assets/img/portfolio/challenges/codeabbey.jpg" alt="CodeAbbey's front page">
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
            <li><strong>Public profile</strong>: <a href="https://www.codeabbey.com/index/user_profile/louis-richard">Louis Richard on CodeAbbey</a>
            <li><img src="https://www.codeabbey.com/index/user_banner/louis-richard.png"></li>
          </ul>
        </div>
        <div class="portfolio-description">
          <h2>Series of programming challenges to solve</h2>
          <p>
          This is yet another website where I challenge myself and learn new tricks.<br/>
          As you'll notice, I primarily utilize PHP to solve the challenges. This preference stems from my comfort level with PHP; while I may not be as proficient in web application development, I greatly appreciate the scripting capabilities of this language.<br/>
          A few challenges have been tackled collaboratively with my classmate <a href="https://github.com/jonashau">Jonas Hautier</a>. However, we both strive to solve them independently.
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