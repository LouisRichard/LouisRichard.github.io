<?php
ob_start();
?>
<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
  <div class="container">

    <ol>
      <li><a href="../../index.html">Home</a></li>
      <li><a href="projects.php">projects</a></li>
      <li><a href="projects.php?p=cat_apps">apps</a></li>
    </ol>
    <h2>Dynamic Window Manager</h2>

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
              <img src="https://dwm.suckless.org/screenshots/dwm-20100318s.png" alt="">
            </div>
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="portfolio-info">
          <h3>Project information</h3>
          <ul>
            <li><strong>Category</strong>: App</li>
            <li><strong>Client</strong>: me</li>
            <li><strong>Project date</strong>: MAR, 2022 - JUN, 2023</li>
            <li><strong>Fork from</strong>: <a href="https://git.suckless.org/dwm/">Suckless' DWM</a></li>
            <li><strong>Project Source</strong>: <a href="https://github.com/LouisRichard/dwm">Project on GitHub</a></li>
          </ul>
        </div>
        <div class="portfolio-description">
          <h2>My modified version of DWM</h2>
          <p>
          This project was made when I took interest into WM to replace DE to get the most out of old laptops. <br/>
          My fork includes the following modifications :
            <ul>
              <li>Using a different system font</li>
              <li>Modifying the icons for the <i>"virtual desktops"</i></li>
              <li>
                Working media keys for Dell Latitude D630 laptop
                <ul>
                  <li>Made to work with PulseAudio and Alsa</li>
                </ul>
              </li>
              <li>Color change</li>
              <li>Custom <i>.xinitrc</i>
                <ul>
                  <li>
                    using <i>xsetroot</i> and <i>awk</i>
                    <ul>
                      <li>Monitoring Memory usage</li>
                      <li>Monitoring CPU usage</li>
                      <li>Monitoring Battery status</li>
                      <li>Date & time</li>
                    </ul>
                  </li>
                  <li>Wallpaper change using <i>feh</i></li>
                </ul>
              </li>
            </ul>
            In the end, I archived the project as I went back to using a regular DE (<i>XFCE4</i>) and the repo was not kept up to date with Suckless' official repository.
          </p>
        </div>
      </div>

    </div>

  </div>
</section><!-- End Portfolio Details Section -->

<?php
$content = ob_get_clean();
require "_template.php";