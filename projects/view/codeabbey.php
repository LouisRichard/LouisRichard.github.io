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
              <img src="../assets/img/portfolio/codeabbey.jpg" alt="CodeAbbey's front page">
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
            <li><strong>Public profile</strong>: <a href="https://www.codeabbey.com/index/user_profile/louis-richard">Louis Richard on CoadeAbbey</a>
            <li><img src="https://www.codeabbey.com/index/user_banner/louis-richard.png"></li>
          </ul>
        </div>
        <div class="portfolio-description">
          <h2>Series of programming challenges to solve</h2>
          <p>
          Yet another website I like to go to to challenge myself and learn new tricks.<br/>
          You'll see here that I mainly use PHP to solve the challenges. That is because PHP is a language I feel really confortable with. In web application not so much but I really like the scripting abilities of this language.<br/>
          Some of the challenges have been resolved as a team of two with my classmate Jonas Hautier. We both still try to do them by ourself.
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