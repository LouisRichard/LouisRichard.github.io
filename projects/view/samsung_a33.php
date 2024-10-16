<?php
ob_start();
?>
<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
  <div class="container">

    <ol>
      <li><a href="../../index.html">Home</a></li>
      <li><a href="projects.php">projects</a></li>
      <li><a href="projects.php?p=cat_hardware">hardware</a></li>
      <li>Samsung Galaxy A33 Repairs</li>
    </ol>
    <h2>Samsung Galaxy A33 Repairs</h2>

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
              <img src="../assets/img/portfolio/hardware/samsung_a33/inpieces.jpg" alt="">
            </div>
            <div class="swiper-slide">
              <img src="../assets/img/portfolio/hardware/samsung_a33/newframe.jpg" alt="">
            </div>
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="portfolio-info">
          <h3>Project information</h3>
          <ul>
            <li><strong>Category</strong>: Hardware, ongoing</li>
            <li><strong>Client</strong>: me</li>
            <li><strong>Project date</strong>: July 2024 - now</li>
            <li><strong>More info</strong>: <a href="https://blog.richard486.ch/index.php?page=post&id=2">on my blog</a></li>
          </ul>
        </div>
        <div class="portfolio-description">
          <h2>Not quite my first phone repair</h2>
          <p>
          This is the second time I took it upon myself to fix a broken phone. The first time was an iPhone 4 with a defective Wi-Fi antenna.<br/>
          My friend had this phone fail on him at the wrong time and he took his anger to the screen. The job was a simple screen and battery replacement.<br/>
          I bought the replacement parts on Aliexpress which turned out to be a mistake for the screen.<br/><br/>
          The screen I ordered was of much lower quality and missing the heatsink for the CPU. The job turned out to be good enough as it was only meant to work good enough to get the data out of it.<br/><br/>
          I am very disatisfied with this project. If I were to give it another try, I'd order official replacement parts and get the appropriate tools for the job.<br/>
          Samsung loves to use a ton of glue so I'd better prep the phone before taking it apart.

          </p>
        </div>
      </div>

    </div>

  </div>
</section><!-- End Portfolio Details Section -->

<?php
$content = ob_get_clean();
require "_template.php";