<?php
ob_start();
?>
<span class="bg-text">"L. RICHARD"</span>
    <p class="util-text section-id">"SECTION 02-C"</p>

    <div class="project-content">
      <h2 class="quote-title">Louis Richard Ing. Conseil SA</h2>
      <div class="project-divider"></div>
      <p class="util-text">
        <span class="bracket-text">[Category]</span> CONSULTANT<br>
        <span class="bracket-text">[Timespan]</span> 2023<br>
        <span class="bracket-text">[Status]</span> <span style="color:#F00">OFFLINE</span>
      </p>

      <p class="mt-4">
        This experience was a week long contract with the objective of updating the internal technical documentation for their servers and services.<br/>
        The mission was simple, comb through everything and if the documentation didn't match, update it.<br/>
        At the same time, I had to update one of the computers to Windows 11. Not much of a challenge considering we already knew it worked with some other PCs already on it.<br/>
        Another part of this migration was migrating files from OneDrive to SharePoint Online (which are different entities for some reasons)<br/>
      </p>
        <br/>
      <h3 class="bracket-text">[DEVELOPPED SKILLS]</h3>
      <p class="util-text">
        Active Directory<br/>
        Windows 10/11<br/>
        Exchange<br/>
        DHCP / DNS / NAS / Print Server<br/>
        OneDrive / SharePoint Online<br/>
        MS Teams
      </p>

      <h4 class="mt-5 bracket-text">[RESSOURCES]</h4>
      <ul class="util-text list-unstyled resource-links">
        <li><a href="#" target="_blank">NOT AVAILABLE</a></li>
      </ul>

      <a href="index.html#experience" class="btn btn-outline-dark mt-4">← Back to Experience</a>
    </div>
<?php
$content = ob_get_clean();
require "./view/template.php";