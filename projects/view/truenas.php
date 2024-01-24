<?php
ob_start();
?>
<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
  <div class="container">

    <ol>
      <li><a href="../../index.html">Home</a></li>
      <li><a href="projects.php">projects</a></li>
      <li><a href="projects.php?p=cat_system">system</a></li>
      <li>truenas setup</li>
    </ol>
    <h2>TrueNas Setup</h2>

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
              <img src="../assets/img/portfolio/system/truenas/img-1.jpg" alt="">
            </div>
            <div class="swiper-slide">
              <img src="../assets/img/portfolio/system/truenas.jpg" alt="">
            </div>
            <div class="swiper-slide">
              <img src="../assets/img/portfolio/system/truenas/img-2.jpg" alt="">
            </div>
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="portfolio-info">
          <h3>Project information</h3>
          <ul>
            <li><strong>Category</strong>: System</li>
            <li><strong>Client</strong>: Me</li>
            <li><strong>Project date</strong>: JUL, 2022</li>
          </ul>
        </div>
        <div class="portfolio-description">
          <h2>Just really needed a NAS</h2>
          <p>
          As the title says, I just really needed a NAS to store video files and to someday automize backups.<br/>
          I chose TrueNas Scale due to the system requirement and because I'm more comfortable using Linux than BSD. The server was a Shuttle with a Core 2 Duo and 8GB of DDR3 1066.<br/><br/>
          The setup is pretty simple. I used a simple RAID Z1 among two 1TB HDD and created a user with access to it.<br/><br/>
          In the end, I took down the server due to reliability issues with the hardware. I also had the opportunity of getting an old QNAP 1U server.
          </p>
        </div>
      </div>

    </div>

  </div>
</section><!-- End Portfolio Details Section -->

<?php
$content = ob_get_clean();
require "_template.php";