<?php
ob_start();
?>
<span class="bg-text">"HACKERRANK"</span>
    <p class="util-text section-id">"SECTION 03-A"</p>

    <div class="project-content">
      <h2 class="quote-title">HACKERRANK</h2>
      <div class="project-divider"></div>
      <p class="util-text">
        <span class="bracket-text">[Category]</span> Certificate<br>
        <span class="bracket-text">[Timespan]</span> 2021<br>
        <span class="bracket-text">[Status]</span> <span style="color:#0F0">SUCCESS</span>
      </p>

      <p class="mt-4">
        SQL Basic certification obtained for fun during some free time.<br/>
        I had already finished pretty much every SQL challenges on this site so I figured I might as well try.<br/>
        Too much time had passed since the challenges to try my hands at SQL advanced but SQL basic is good enough for my specifications. 
      </p>
        <br/>
      <h3 class="bracket-text">[DEVELOPPED SKILLS]</h3>
      <p class="util-text">
        MySQL, TSQL
      </p>

      <h4 class="mt-5 bracket-text">[RESSOURCES]</h4>
      <ul class="util-text list-unstyled resource-links">
        <li><a href="https://www.hackerrank.com/profile/louis_richard" target="_blank">HACKERRANK PROFILE</a></li>
      </ul>

      <a href="index.html#education" class="btn btn-outline-dark mt-4">← Back to Education</a>
    </div>
<?php
$content = ob_get_clean();
require "./view/template.php";