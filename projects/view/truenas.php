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
          I opted for TrueNAS Scale due to its system requirements and my greater comfort with Linux compared to BSD. The server I used was a Shuttle with a Core 2 Duo processor and 8GB of DDR3 1066 RAM.<br/><br/>
          The setup was straightforward. I configured a simple RAID Z1 using two 1TB HDDs and created a user with access to it.<br/><br/>
          Ultimately, I decommissioned the server due to reliability issues with the hardware. Additionally, I had the opportunity to acquire an old QNAP 1U server.
          </p>
        </div>
      </div>

    </div>

  </div>
</section><!-- End Portfolio Details Section -->

<?php
$content = ob_get_clean();
require "_template.php";