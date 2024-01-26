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
      <li>aws scheduler</li>
    </ol>
    <h2>AWS Scheduler</h2>

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
              <img src="../assets/img/portfolio/app/awsscheduler.jpg" alt="">
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
            <li><strong>Client</strong>: <a href="https://bitbucket.org/NGY_CPNV/">Nicolas Glassey</a> / <a href="https://cpnv.ch">CPNV</a></li>
            <li><strong>Collaborators</strong>: <a href="https://bitbucket.org/NGY_CPNV/">Nicolas Glassey</a>, <a href="https://bitbucket.org/Naima28">Naima Fahmy Hanna</a>, <a href="https://bitbucket.org/AltinZILI/">Altin Zili</a>
            <li><strong>Project date</strong>: FEB, 2020 - JUN, 2021</li>
            <li><strong>Project Source</strong>: <a href="https://bitbucket.org/NGY_CPNV/awsscheduler/src/master/">Project on BitBucket</a></li>
          </ul>
        </div>
        <div class="portfolio-description">
          <h2>A project designed to manage existing AWS Infra</h2>
          <p>
          AWS Scheduler is designed to manage existing AWS infrastructure (start, stop, alert, email, budget follow-up).</br>
          This project was developed during my internship at CPNV, with Mr. Glassey serving as the product owner and project manager responsible for decision-making and code review.</br>
          The project is written in object-oriented PHP, which was a new experience for me. Additionally, it was my first time working with the AWS API.<br/>
          Despite the challenges, I thoroughly enjoyed my time working on it as part of the team.<br/>
          Currently, it appears that the project is either on standby or halted for the time being.
          </p>
        </div>
      </div>

    </div>

  </div>
</section><!-- End Portfolio Details Section -->

<?php
$content = ob_get_clean();
require "_template.php";