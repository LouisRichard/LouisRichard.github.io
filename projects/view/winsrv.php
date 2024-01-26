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
      <li>windows server setup</li>
    </ol>
    <h2>Windows Server Setup</h2>

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
              <img src="../assets/img/portfolio/system/winsrv.jpg" alt="">
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
            <li><strong>Project date</strong>: 2016 - 2019</li>
          </ul>
        </div>
        <div class="portfolio-description">
          <h2>Connect everyone!</h2>
          <p>
          This project was undertaken as part of my studies at the <a href="https://cpnv.ch/">CPNV</a>.<br/>
          Throughout my time there, I had numerous opportunities to configure Windows servers on both virtual machines and physical hardware.<br/>
          We utilized Windows Server for various services, including:
            <ul>
              <li>DHCP server</li>
              <li>DNS service</li>
              <li>Active Directory</li>
              <li>Print and scan server</li>
              <li>Network share with AD users</li>
            </ul>
            Throughout these experiences, we learned about best practices and how to implement redundant server configurations.<br/>
            Although my experience is primarily with versions that have reached their End of Life (EOL), I am confident that I can adapt if the need arises.<br/>
            The versions used during my apprenticeship were : 
            <ul>
              <li>Windows Server 2008 R2</li>
              <li>Windows Server 2012 R2</li>
          </p>
        </div>
      </div>

    </div>

  </div>
</section><!-- End Portfolio Details Section -->

<?php
$content = ob_get_clean();
require "_template.php";