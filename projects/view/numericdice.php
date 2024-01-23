<?php
ob_start();
?>
<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
  <div class="container">

    <ol>
      <li><a href="../../index.html">Home</a></li>
      <li>projects</li>
      <li>hardware</li>
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
          This project was the first where I had the chance to program hardware. The objective was to write the program that would run on the micro controller for a numeric dice.</br>
          The board was designed by the CPNV. It used two 7 segments displays to print the numbers. The dice has the ability to switch between 4, 6, 8, 12 and 20 sided dices.</br>
          To develop this program and test it, the CPNV had us use the PIC16F818 micro controller on the EasyPic 7 development board. They had us solder the components on the PCB prior to programming.<br/>
          <br/>
          Note : This project was made pretty early on my coding "career". The code is written in french and the all variables are globals. If you wish to take a look at it, shoot me an email.
          </p>
        </div>
      </div>

    </div>

  </div>
</section><!-- End Portfolio Details Section -->

<?php
$content = ob_get_clean();
require "_template.php";