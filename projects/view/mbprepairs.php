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
            <li><strong>Project date</strong>: 2023 - Today</li>
            <li><strong>More info</strong>: coming soon</li>
          </ul>
        </div>
        <div class="portfolio-description">
          <h2>First one on apple machines</h2>
          <p>
            As the title says, it's my first time working on an Apple machine beside the occasional iPhone 4 from back in the days.<br/>
            This machine was given to me by my dad as "not working". Lo and behold, it worked for me!<br/>
            Of course, it didn't last long.<br/><br/>
            With trial and error, I noticed that when I applied pressure near the I/O Board connector, the computer would crash instantly.<br/>
            The same happened when the computer was simply laid on a table.<br/>
            So, to try and remidy this issue, I armed myself with a drill and a file and made a hole in the bottom cover where the connector is! (img-2)<br/><br/>
            Of course, this fix didn't last and the issue got worse and worse to the point where, even opened and with the I/O board disconnected, the issue would happen semi-randomly.<br/>
            My current theory is that at least one of the memory modules is bad, causing a kernel pannic when slightly moved.<br/>
            Project is still ongoing as I am currently waiting for parts to fix it. I ordered : 
              <ul>
                <li>A new logic board - 2013, i7, 16GB</li>
                <li>A new I/O cable in case I damaged mine</li>
                <li>New screws for the bottom cover</li>
                <li>A new bottom cover</li>
                <li>A screwdriver that isn't a #000 flathead</li>
            </ul>
            All new parts come from different recyclers on AliExpress.
          </p>
        </div>
      </div>

    </div>

  </div>
</section><!-- End Portfolio Details Section -->

<?php
$content = ob_get_clean();
require "_template.php";