<?php
ob_start();
?>
<span class="bg-text">"RICHARD486"</span>
    <p class="util-text section-id">"SECTION 04-B"</p>

    <div class="project-content">
      <h2 class="quote-title">RICHARD486</h2>
      <div class="project-divider"></div>
      <p class="util-text">
        <span class="bracket-text">[Category]</span> WEB<br>
        <span class="bracket-text">[Timespan]</span> 2020 - 2025<br>
        <span class="bracket-text">[Status]</span> <span style="color:#fdee00">ONGOING</span>
      </p>

      <p class="mt-4">
        This project initially began because it was recommended for us to create a portfolio, so here we are.<br/>
        I quite enjoy keeping it up to date now, and I can see the benefits of having your own website.<br/>
        Initially, I intended not to use a template and do everything by myself. Unfortunately, I'm not that proficient in web design, so I ended up using one anyway. Oopsy~~ <br/>
        Anyway, that was short lived. The version you're looking at right now was all made by my hands!<br/>
        (Yes, that's why it looks bad on mobile)
      </p>
        <br/>
      <h3 class="bracket-text">[DEVELOPPED SKILLS]</h3>
      <p class="util-text">
        HTML<br/>
        CSS<br/>
        PHP<br/>
        JavaScript<br/>
        Source control (git)<br/>
        Even more stuff, I'm sure<br/>
      </p>

      <h4 class="mt-5 bracket-text">[RESSOURCES]</h4>
      <ul class="util-text list-unstyled resource-links">
        <li><a href="https://github.com/louisrichard/louisrichard.github.io" target="_blank">PROJECT SOURCE</a></li>
      </ul>

      <a href="index.html#projects" class="btn btn-outline-dark mt-4">← Back to Projects</a>
    </div>
<?php
$content = ob_get_clean();
require "./view/template.php";