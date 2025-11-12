<?php
ob_start();
?>
<span class="bg-text">"NESPRESSO"</span>
    <p class="util-text section-id">"SECTION 02-A"</p>

    <div class="project-content">
      <h2 class="quote-title">NESTLÉ NESPRESSO SA</h2>
      <div class="project-divider"></div>
      <p class="util-text">
        <span class="bracket-text">[Category]</span> IT SERVICE DESK<br>
        <span class="bracket-text">[Timespan]</span> 2020<br>
        <span class="bracket-text">[Status]</span> <span style="color:#F00">OFFLINE</span>
      </p>

      <p class="mt-4">
        This experience was aquired as part of an internship in my studies at the CPNV.<br>
        Achived in the production center in Orbe, VD.<br>
        I joined the IS/IT Service Desk team for lvl 1 support. Starting in the field service then working remotely during covid. 
      </p>

      <h3 class="bracket-text">[DEVELOPPED SKILLS]</h3>
      <p class="util-text">
        Windows 10<br/>
        Office 2016/365<br/>
        Active Directory<br/>
        Skype For Business<br/>
        SCCM<br/>
        HP Printer maintenance<br/>
        HP Asset Manager<br/>
        Kronos clocking system
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