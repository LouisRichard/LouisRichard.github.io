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
    <h2>Dell upgrades and repairs</h2>

  </div>
</section><!-- End Breadcrumbs -->

<section id="about" class="about">
  <div class="container">

    <div class="row">
      <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left">
        <img src="../assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
      </div>
      <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right">
        <h3>I just really like Dell laptops</h3>
        <p>
          Over the years, I've had quite a few Dell computers and laptops.<br/>
          This is mostly due to the fact they were easy to get a hold of for very cheap or even for free.<br/>
          During my time using those laptops and computers, I had opportunities to upgrade them and I sometimes had to repair them.<br/>
          Dell, today, is one of my favorite brand when it comes to entreprise hardware for their ease of service and overall solid laptops and monitors.</br>
          I must say, though, that the premium you have to pay for their machines is sometimes quite a lot and they do have a tendency to use proprietary hardware in their prebuilt desktops which is a big no-no for me.<br/><br/>

          Below, you'll find in more details what kind of laptop I currently have that I have worked on along with a quick list of the work done to them.
        </p>
      </div>

      <div class="col-lg-12 pt-4 pt-lg-0 order-3 order-lg-3 content" data-aos="fade-up">
        <h4>Dell Latitude D630</h4>
        <p>
          The workhorse of my fleet! This laptop was given to me by a teacher at my school. It was already pretty old by then.<br/>
          This laptop saved me during my last exam at the <a href="https://cpnv.ch">CPNV</a>. When I came back to school to take the exam, they forgot to enable my account so I didn't have a workstation to use.</br><br/>
          Today, after 16 years of services, I have had to retire this machine due to a failure with the CPU cooler. The fan wouldn't spin anymore causing the CPU to overheat.</br>
          I tried replacing the fan with a known good one from a D620 but to no avail.<br/>
          Anyway, here's a list of all the upgrades and repairs I did to this wonderful machine :
          <ul>
            <li>CPU - From Core 2 Duo T7100 to Core 2 Duo T7500 (didn't have a 7800 on hand)</li>
            <li>WiFi - Changed wifi board for one from a later model laptop with 3 antennas</li>
            <li>Bluetooth - Added a bluetooth card from an older Dell Latitude
            <li>Storage - Changed the old 80GB 2.5" HDD for a SATA SSD</li>
            <li>Optical drive - Changed the CD/DVD-R drive for a CD/DVD-RW from a Dell Precision</li>
            <li>Ram - Replaced the 1GB stick with 2x2GB DDR2 667MHz</li>
            <li>OS - Windows XP wouldn't cut it so I ran ArchLinux along with the XFCE4 desktop environement</li>
          </ul>
          After that, this machine was more than capable of running a web browser, Codium, PHP and a MariaDB database all the while running OnlyOffice to document the project.<br/>
          The machine still came short for virtual machines or heavier processes.<br/><br/>
          Along with the upgrades I already did, I was also looking into upgrading the LCD pannel to one of the same size but higher resolution.<br/>
          Unfortunately, this idea died pretty quickly as the internal connector and GPU aren't well documented. I couldn't find a single source telling me if the internal connector could support WUXGA resolution.<br/>
          Furthermore, higher resolution 14.1" screens compatible with this laptop weren't available on the market.
        </p>
        <br/>
        <h4>Dell Precision M4300</h4>
        <p>
          If only I could throw out this awful GPU...<br/>
          This laptop came to replace the D630 once the CPU fan died. It came not really as an upgrade but more as a downgrade, really...</br>
          It already came out of the factory in August 2008 with a Core 2 Duo T7500 and 2GB of ram so it only really needed an SSD and two more GB of ram.<br/>
          This laptop also being larger than the 14.1" of the D630 (15.6"), it came with a much better screen with a resolution of 1650x1050 (16:10).<br/><br/>
          The only thing really holding it back is it's GPU. While everything in the machine aged decently, the poor Quadro FX 360M aged like fine milk.<br/>
          Having this dedicated GPU means that the memory size is fixed to a maximum of 256MB which is not enough to support modern desktop environement. Barely enough for lightweight ones.<br/>
          Furthermore, as you can probably guess, I run Linux on these old laptops. Linux and Nvidia aren't good friends so it made the task a bit more difficult.<br/>
          On ArchLinux, this card had no intentions of working nicely with Nouveau drivers and is completely incompatible with the newer proprietary drivers. So I had to trust a package from the AUR to use.<br/>
          These drivers (nvidia-340xx) work fine for the most part. The only real problem I've encountered with them is that everytime I updated X, I had to recompile and reinstall them. A simple reinstall wouldn't work.<br/>
          This issue lead to me leaving this laptop to the side. It's now only used to watch movies using VLC (not powerful enough to decode Netlix).<br/><br/>
          Anyway, here's a list of the modifications and repairs done to this machine :
            <ul>
              <li>Storage - Replace the 120GB HDD for a SATA SSD</li>
              <li>Ram - Replaced the 2x1GB sticks for 2x2GB DDR2 667MHz</li>
              <li>Battery - Replaced the dead battery with a known good one I had spare</li>
              <li>OS - Windows XP wouldn't cut it so I ran Gentoo along with DWM at first, then switched to ArchLinux with XFCE4</li>
            </ul>
        </p>
        <br/>
        <h4>Dell Inspiron 6400</h4>
        <p>
          The useless one.<br/>
          If, like me, you like to tinker with machines, you probably have one of those somewhere.<br/>
          A machine with absolutely no use due to it's age and the fact that you have one better right beside it.<br/>
          This machine didn't get the luxury of upgrades or repairs because I truely have no use for it.<br/>
          It's 32bit only, it's got an old and tired Pentium Dual Core, 2GB of DDR2 and a dead battery.<br/>
          The keyboard is also smashed in.</br>
          I could always install Windows XP or Debian i386 on it and use it for old software or old games but I have no need for it as I have a...
        </p>
        <br/>
        <h4>Dell Inspiron 9400</h4>
        <p>
          Now <i>this</i> is the ultimate Windows XP laptop!<br/>
          This machine is also 32bit only but came out with a Core 2 Duo and an Nvidia Geforce Go 7900 gs!<br/>
          The battery is still fine, as well! All this laptop needed was a repaste and more ram!<br/>
          I use it today to play classic games from the Windows 98 - XP era. I still have the boxes for the origial Sims games with all the extensions.<br/><br/>
          For the upgrades and repairs, added Ram and that's it! I love this machine.<br/>
          (Fun fact : You can still enable Windows XP today!)
        </p>
      </div>

    </div>
  </div>
</section><!-- End About Section -->

    <?php
$content = ob_get_clean();
require "_template.php";

