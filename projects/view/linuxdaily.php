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
          I embarked on this "project" primarily because most of my computers at the time lacked sufficient power, and I needed an alternative to the early disaster that was Windows 8.<br/>
          Nowadays, I simply appreciate the convenience of it all. Once you become accustomed to a new operating system, you tend to forget about it.<br/><br/>
          Initially, it was quite complicated, especially because I enjoy gaming on my PC. Back then, Proton didn't exist, and Wine wasn't exactly optimized for gaming. <br/>
          Consequently, I reverted to Windows on my main machine for gaming and work purposes, while all my other computers, including laptops, ran on Linux from that point onward.<br/>
          I started with Ubuntu and Mint, then transitioned to Debian, and eventually explored ArchLinux when I grew tired of the status quo and wanted to try something different.<br/>
          I experimented with Gentoo briefly, but the extensive compiling required a lot of time, which I often lacked.<br/>
          I also gave Void a shot, but I had grown too accustomed to the SystemD init system, so it didn't stick.<br/>
          Presently, I use Debian on workstations, Windows on my gaming machine, and ArchLinux on everything else.<br/>
          </p>
        </div>
      </div>

    </div>

  </div>
</section><!-- End Portfolio Details Section -->

<?php
$content = ob_get_clean();
require "_template.php";