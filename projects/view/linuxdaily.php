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
      <li>linux daily</li>
    </ol>
    <h2>Linux daily driver</h2>

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
              <img src="../assets/img/portfolio/system/linuxdaily.jpg" alt="">
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
            <li><strong>Project date</strong>: 2013 - Today</li>
          </ul>
        </div>
        <div class="portfolio-description">
          <h2>I am the admin</h2>
          <p>
            I took on this "project" because most of my computers at the time were not too powerful and I needed an alternative to the disaster that was Windows 8 in the early days.<br/>
            Today, I just like the convenienece of it, really. Once you get used to a new operating system, you just don't really think about it.<br/><br/>
            At the start, it was pretty complicated especially because I like to game on my PC. Back then, Proton didn't exist and Wine wasn't exactly made for this purpose.<br/>
            I ended up coming back to Windows on my main machine to game and work but all my other computers, laptops or other, ran Linux from then on.<br/>
            Started out with Ubuntu and Mint, moved on to Debian and then to ArchLinux when I got bored of it and wanted to try something new.<br/>
            Tried out Gentoo but compiling everything takes a lot of time that I often don't have.<br/>
            Also tried Void but I got too used to the SystemD init system so it didn't stay.<br/>
            Today, I use Debian on workstations, Windows on my gaming machine, and ArchLinux on everything else.<br/>
          </p>
        </div>
      </div>

    </div>

  </div>
</section><!-- End Portfolio Details Section -->

<?php
$content = ob_get_clean();
require "_template.php";