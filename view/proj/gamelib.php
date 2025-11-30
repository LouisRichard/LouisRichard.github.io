<?php
ob_start();
?>
<span class="bg-text">"GAME LIBRARY"</span>
    <p class="util-text section-id">"SECTION 04-A"</p>

    <div class="project-content">
      <h2 class="quote-title">GAME LIBRARY</h2>
      <div class="project-divider"></div>
      <p class="util-text">
        <span class="bracket-text">[Category]</span> DEVELOPPEMENT<br>
        <span class="bracket-text">[Timespan]</span> 2020<br>
        <span class="bracket-text">[Status]</span> <span style="color:#0F0">FINISHED</span>
      </p>

      <p class="mt-4">
        =lorem()  
      </p>
        <br/>
      <h3 class="bracket-text">[DEVELOPPED SKILLS]</h3>
      <p class="util-text">
        =lorem()
      </p>

      <h4 class="mt-5 bracket-text">[RESSOURCES]</h4>
      <ul class="util-text list-unstyled resource-links">
        <li><a href="https://github.com/louisrichard/gamelibrary" target="_blank">PROJECT SOURCE</a></li>
      </ul>

      <a href="index.html#projects" class="btn btn-outline-dark mt-4">← Back to Projects</a>
    </div>
<?php
$content = ob_get_clean();
require "./view/template.php";