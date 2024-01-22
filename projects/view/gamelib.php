<?php
ob_start();
?>
<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
  <div class="container">

    <ol>
      <li><a href="../../index.html">Home</a></li>
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
              <img src="../../assets/img/portfolio/gamelib/login.jpg" alt="Login page">
            </div>

            <div class="swiper-slide">
              <img src="../../assets/img/portfolio/gamelib/addgame.jpg" alt="Adding a game">
            </div>

            <div class="swiper-slide">
              <img src="../../assets/img/portfolio/gamelib/mainpage.jpg" alt="Main page">
            </div>

          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="portfolio-info">
          <h3>Project information</h3>
          <ul>
            <li><strong>Category</strong>: App design</li>
            <li><strong>Collaborator</strong>: <a href="https://github.com/JonasHau">Jonas Hautier</a>
            <li><strong>Client</strong>: <a href="https://cpnv.ch">CPNV</a></li>
            <li><strong>Project date</strong>: FEB, 2020</li>
            <li><strong>Project Source</strong>: <a href="https://github.com/LouisRichard/GameLibrary">Project on GitHub</a></li>
          </ul>
        </div>
        <div class="portfolio-description">
          <h2>A project written in C# to organise your game library</h2>
          <p>
          This project was made in the context of my studies. It was a group project meant to be done in C# .NET. The subject was free to choose but had to obey some specifications such has :
            <ul>
                <li>using a database</li>
                <li>having some sort of login</li>
                <li>using the Agil method to manage the project</li>
            </ul>
            <br/>
            This project was made with the intention of keeping it free and open source without any restrictions enforced by our school.<br/>
            This proved difficult at times but we still managed to do it using only free softwares except for Visual Studio Entreprise.<br/>
            The point was to keep updating the software until we found it to be "good enough". As time went on, we both took on other projects and this one was left to the side.<br/>
            I'd personally like to return to it some day. 
          </p>
        </div>
      </div>

    </div>

  </div>
</section><!-- End Portfolio Details Section -->

<?php
$content = ob_get_clean();
require "_template.php";