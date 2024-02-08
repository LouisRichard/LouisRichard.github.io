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
      <li>macbook pro 1502 repairs</li>
    </ol>
    <h2>MacBook Pro 1502 Repairs</h2>

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
            <li><strong>Project date</strong>: 2023 - FEB 2024</li>
            <li><strong>More info</strong>: <a href="projects.php?p=more_mbprepairs">More info</a></li>
          </ul>
        </div>
        <div class="portfolio-description">
          <h2>First one on apple machines</h2>
          <p>
          As the title suggests, this marks my first experience working on an Apple machine, apart from the occasional encounter with an iPhone 4 from years ago.<br/>
          Interestingly, this particular machine was handed to me by my dad, labeled as "not working." However, to my surprise, it functioned perfectly fine—at least initially.<br/><br/>
          Soon, I encountered a peculiar issue: whenever pressure was applied near the I/O Board connector, the computer would instantly crash.<br/>
          This problem persisted even when the computer was placed on a flat surface.<br/>
          In an attempt to address this issue, I decided to take matters into my own hands. Armed with a drill and a file, I carved a hole in the bottom cover where the connector is located (see img-3).<br/><br/>
          Unfortunately, this makeshift fix proved to be short-lived, and the issue worsened over time. Eventually, even with the I/O board disconnected and the computer opened up, the problem persisted sporadically.<br/>
          My current hypothesis is that at least one of the memory modules is faulty, leading to kernel panics with slight movement.<br/><br/>
          In 2024, after loosing many auctions to get another laptop, I ordered a new logic board along with a few tools on AliExpress and took it upon myself to replace the faulty board.<br/>
          This ended up costing me more than one of these second hand but you can't really put a price on a new experience.
          </p>
        </div>
      </div>

    </div>

  </div>
</section><!-- End Portfolio Details Section -->

<?php
$content = ob_get_clean();
require "_template.php";