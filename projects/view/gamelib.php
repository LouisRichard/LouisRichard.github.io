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
      <li>Game Library</li>
    </ol>
    <h2>Game Library</h2>

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
              <img src="../assets/img/portfolio/app/gamelib/login.jpg" alt="Login page">
            </div>

            <div class="swiper-slide">
              <img src="../assets/img/portfolio/app/gamelib/addgame.jpg" alt="Adding a game">
            </div>

            <div class="swiper-slide">
              <img src="../assets/img/portfolio/app/gamelib/mainpage.jpg" alt="Main page">
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
            <li><strong>Collaborator</strong>: <a href="https://github.com/JonasHau">Jonas Hautier</a>
            <li><strong>Client</strong>: <a href="https://cpnv.ch">CPNV</a></li>
            <li><strong>Project date</strong>: FEB, 2020</li>
            <li><strong>Project Source</strong>: <a href="https://github.com/LouisRichard/GameLibrary">Project on GitHub</a></li>
          </ul>
        </div>
        <div class="portfolio-description">
          <h2>A project written in C# to organise your game library</h2>
          <p>
          This project was created within the context of my studies. It was a group project intended to be developed in C# .NET. The subject was free to choose but had to adhere to certain specifications, such as:
            <ul>
                <li>Utilizing a database</li>
                <li>Implementing some form of login functionality</li>
                <li>Employing the Agile methodology to manage the project</li>
            </ul>
            <br/>
            The intention behind this project was to keep it free and open-source without any restrictions imposed by our school.<br/>
            Although challenging at times, we managed to achieve this using only free software, with the exception of Visual Studio Enterprise.<br/>
            The objective was to continuously update the software until we deemed it 'good enough'. However, as time progressed, we became involved in other projects, causing this one to be put aside.<br/>
            Personally, I aspire to revisit it someday. 
          </p>
        </div>
      </div>

    </div>

  </div>
</section><!-- End Portfolio Details Section -->

<?php
$content = ob_get_clean();
require "_template.php";