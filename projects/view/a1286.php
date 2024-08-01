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
      <li>macbook pro a1286 repairs</li>
    </ol>
    <h2>MacBook Pro a1286 Repairs</h2>

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
              <img src="../assets/img/portfolio/hardware/mbp/mbp3.jpg" alt="">
            </div>
            <div class="swiper-slide">
              <img src="../assets/img/portfolio/hardware/mbp/mbp1.jpg" alt="">
            </div>
            <div class="swiper-slide">
              <img src="../assets/img/portfolio/hardware/mbp/mbp2.jpg" alt="">
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
            <li><strong>More info</strong>: <a href="projects.php?p=more_a1286">More info</a></li>
            <li><strong><a href="https://www.youtube.com/@aur.louisrichard">Project on YouTube</a></strong></li>
          </ul>
        </div>
        <div class="portfolio-description">
          <h2>GPU failure is my passion</h2>
          <p>
          Ever since I replaced the motherboard in my <a href="projects.php?p=mbprepairs">2013 MacBook Pro</a>, I've been really into Apple hardware.<br/>
          One of my current favorite past time is looking at auctions to try to find a good deal on MacBooks. I got this computer without knowing it's specs for 30CHF which is pretty cheap.<br/>
          It arrived with some missing screws, no hard drive, no ram and a dead battery. Nothing a bit of shopping can't fix.<br/>
          Of course, this being a 2011 15", the Radeon HD 6490M stopped functionning. But thanks to the legend DosDude1, I could <a href="https://dosdude1.com/gpudisable/">disable the GPU and use Intel UHD graphics instead</a>.<br/>
          This is not a permanant solution by any mean but it does the job for now. In the future, I plan on installing a <a href="https://www.cmizapper.com/products/tiresias-gpukiller.html">CMIzapper Tiresias</a> to automatically write the DosDude1 patch to the ROM. <br/>
          As for everything else missing, I ordered replacement screws, a power supply and a battery off AliExpress along with some of the tools I needed to execute this job. I found an old Intel SSD and some spare Samsung DDR3 and we were off to the races! <br/>
          This machine currently runs High Sierra. If and when I find the means to upgrade it to 16GB of ram, I might try to install Catalina on it. But realisticly, I will probably sell it to recoup the cost of making it functionnal.
          </p>
        </div>
      </div>

    </div>

  </div>
</section><!-- End Portfolio Details Section -->

<?php
$content = ob_get_clean();
require "_template.php";