<?php
ob_start();
?>
<span class="bg-text">"LAPTOP REPAIRS"</span>
    <p class="util-text section-id">"SECTION 04-D"</p>

    <div class="project-content">
      <h2 class="quote-title">LAPTOP REPAIRS</h2>
      <div class="project-divider"></div>
      <p class="util-text">
        <span class="bracket-text">[Category]</span> HARDWARE<br>
        <span class="bracket-text">[Timespan]</span> 2013 - 2025<br>
        <span class="bracket-text">[Status]</span> <span style="color:#fdee00">ONGOING</span>
      </p>

      <p class="mt-4">
        This project came to fruition partly out of interest and partly out of necessity for a laptop.<br/>
        Primarily, I focused on Dell laptops because they were readily available to me at the time, often acquired from school or companies clearing out old machines.<br/>
        Upgrades and repairs included things like new CPUs, new RAM, new SSD, screen replacements, keyboard replacements, BIOS flashing, all that.<br/>
        Although I've had the opportunity to work on more recent business Dell laptops, the essence of upgrades and repairs hasn't changed much.<br/>
        While I have dabbled with other brands, my focus has predominantly been on Dell and Apple laptops. By necessity at my different workplaces, I've also dabbled with HP devices.<br/>
        Given access to either a guide or a manual, I would feel confident in attempting repairs on a wider range of laptops.
      </p>
        <br/>
      <h3 class="bracket-text">[DEVELOPPED SKILLS]</h3>
      <p class="util-text">
        Hardware diagnostic<br/>
        Hardware replacement<br/>
        BIOS flashing<br/>
        Microsoldering (at times)<br/>
        Hardware compatibility checks<br/>
      </p>

      <h4 class="mt-5 bracket-text">[RESSOURCES]</h4>
      <ul class="util-text list-unstyled resource-links">
        <li><a href="#" target="_blank">NOT AVAILABLE</a></li>
      </ul>

      <a href="index.html#projects" class="btn btn-outline-dark mt-4">← Back to Projects</a>
    </div>
<?php
$content = ob_get_clean();
require "./view/template.php";