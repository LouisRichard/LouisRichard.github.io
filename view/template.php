<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>"<?= $title ?>"</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="../css/style.css" rel="stylesheet">
</head>
<body class="bg-light text-dark">

    <!-- Nav -->
  <nav class="navbar fixed-top bg-white border-bottom">
    <div class="container-fluid d-flex justify-content-between align-items-center">
      <a class="navbar-brand util-text fw-bold" href="index.html">[L. RICHARD]</a>
      <div>
        <a class="nav-link util-text d-inline mx-2" href="index.html#about">[About]</a>
        <a class="nav-link util-text d-inline mx-2" href="index.html#experience">[Experience]</a>
        <a class="nav-link util-text d-inline mx-2" href="index.html#education">[Education]</a>
        <a class="nav-link util-text d-inline mx-2" href="index.html#projects">[Projects]</a>
        <a class="nav-link util-text d-inline mx-2" href="index.html#contact">[Contact]</a>
      </div>
    </div>
  </nav>

  <div class="hazard"></div>

  <!-- Project Section -->
<section class="container text-center project-detail">

<?php echo($content); ?>

</section>

  <div class="hazard"></div>

  <footer id="contact" class="container text-center position-relative">
    <!-- Links -->
    <div class="footer-links mt-3 text-center">
      <a href="https://www.linkedin.com/in/louis-richard-8079b21a3/" class="util-text mx-2" target="_blank">
      <span class="bracket-text">[LinkedIn]</span>
      </a>
      <a href="https://github.com/LouisRichard" class="util-text mx-2" target="_blank">
        <span class="bracket-text">[GitHub]</span>
      </a>
      <a href="https://blog.richard486.ch" class="util-text mx-2" target="_blank">
        <span class="bracket-text">[Blog]</span>
      </a>
    </div>

    </div>
    <p class="util-text mt-3">"THIS IS A WEBSITE" / "DESIGNED IN 2025"</p>
    <p class="util-text mt-3">"COPYRIGHT" / "RICHARD486.CH"</p>
  </footer>
</body>
</html>