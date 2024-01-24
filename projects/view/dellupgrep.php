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
      <li>dell upgrades & repairs</li>
    </ol>
    <h2>Upgrades and Repairs of my Dell laptops</h2>

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
              <img src="../assets/img/portfolio/hardware/dellupre.jpg" alt="">
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
            <li><strong>Client</strong>: me</li>
            <li><strong>Project date</strong>: 2013 - Today</li>
            <li><strong>More info</strong>: <a href="projects.php?p=more_dell">More info</a></li>
          </ul>
        </div>
        <div class="portfolio-description">
          <h2>Gotta keep old hardware going!</h2>
          <p>
          This project was realised partly due to interest and partly due to necessity for a laptop.<br/>
          I mostly worked on Dell laptops because it's what I could get my hands on at the time. They mostly came from school or companies clearing out old machines.</br>
          Visit the <a href="projects.php?p=more_dell">More info</a> page about this project to learn all the repairs and modifications done to the laptops.<br/><br/>
          Here is a list of the laptops I've worked on : 
          <ul>
            <li>Dell Latitude D620</li>
            <li>Dell Latitude D630</li>
            <li>Dell Precision M4300</li>
            <li>Dell Inspiron 9400</li>
            <li>Dell Inspiron 6400</li>
          </ul>
          I have worked on more recent business Dell laptops and not much has changed in the way of upgrades and repairs.<br/>
          I have also worked on other brands but I mostly played around with Dell laptops.<br/>
          Given either a guide or a manual, I'd feel comfortable trying out repairs on more laptops.
          </p>
        </div>
      </div>

    </div>

  </div>
</section><!-- End Portfolio Details Section -->

<?php
$content = ob_get_clean();
require "_template.php";