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
      <li>numeric dice<li>
    </ol>
    <h2>Numeric Dice</h2>

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
              <img src="../assets/img/portfolio/hardware/numericdice.jpg" alt="Front of the dice">
            </div>

            <div class="swiper-slide">
              <img src="../assets/img/portfolio/hardware/numericdice/back.jpg" alt="Back of the dice">
            </div>
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="portfolio-info">
          <h3>Project information</h3>
          <ul>
            <li><strong>Category</strong>: Hardware</li>
            <li><strong>Client</strong>: Me / <a href="https://cpnv.ch">CPNV</a></li>
            <li><strong>Project date</strong>: AUG, 2019</li>
          </ul>
        </div>
        <div class="portfolio-description">
          <h2>My first embedded system project</h2>
          <p>
          This project marked the first opportunity I had to program hardware. The objective was to write the program to run on the microcontroller for a numeric dice.</br>
          The board, designed by the CPNV, utilized two 7-segment displays to showcase the numbers. The dice had the capability to switch between 4, 6, 8, 12, and 20-sided dice.</br>
          To develop and test this program, CPNV had us utilize the PIC16F818 microcontroller on the EasyPic 7 development board. Prior to programming, we soldered the components onto the PCB.<br/>
          <br/>
          Note: This project was undertaken quite early in my coding journey. The code is written in French, and all variables are global. If you wish to take a look at it, shoot me an email.
          </p>
        </div>
      </div>

    </div>

  </div>
</section><!-- End Portfolio Details Section -->

<?php
$content = ob_get_clean();
require "_template.php";