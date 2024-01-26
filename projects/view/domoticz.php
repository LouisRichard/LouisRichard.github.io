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
      <li>domoticz</li>
    </ol>
    <h2>DomoticZ</h2>

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
              <img src="../assets/img/portfolio/system/domoticz/img-1.jpg" alt="">
            </div>
            
            <div class="swiper-slide">
              <img src="../assets/img/portfolio/system/domoticz/img-2.jpg" alt="">
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
            <li><strong>Client</strong>: Me, <a href="https://cpnv.ch/">CPNV</a></li>
            <li><strong>Collaborator</strong>: <a href="https://github.com/jonashau">Jonas Hautier</a></li>
            <li><strong>Project date</strong>: 2019</li>
          </ul>
        </div>
        <div class="portfolio-description">
          <h2>Automate the lights!</h2>
          <p>
            This project was conducted as part of my studies at the <a href="https://cpnv.ch/">CPNV</a>.<br/><br/>
            For this endeavor, we employed a Raspberry Pi setup with Raspbian and DomoticZ, along with two dongles: one for Z-Wave and the other for EnOcean protocols.<br/>
            We simulated an apartment using a wooden model, which we wired up with electrical sockets, lamps, light switches, and an old-school doorbell.<br/>
            Subsequently, we incorporated wireless light switches, smart bulbs, smart sockets, smart switches, and various sensors to automate circuits within the house.<br/><br/>
            Utilizing the software, we scripted different events using the sensors and switches, replicating real-life scenarios within an apartment setting.
        </div>
      </div>

    </div>

  </div>
</section><!-- End Portfolio Details Section -->

<?php
$content = ob_get_clean();
require "_template.php";