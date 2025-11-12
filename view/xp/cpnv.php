<?php
ob_start();
?>
<span class="bg-text">"CPNV"</span>
    <p class="util-text section-id">"SECTION 02-B"</p>

    <div class="project-content">
      <h2 class="quote-title">CPNV</h2>
      <div class="project-divider"></div>
      <p class="util-text">
        <span class="bracket-text">[Category]</span> DEVELOPPER<br>
        <span class="bracket-text">[Timespan]</span> 2020 - 2021<br>
        <span class="bracket-text">[Status]</span> <span style="color:#F00">OFFLINE</span>
      </p>

      <p class="mt-4">
        This experience was aquired as part of an internship in my studies at the CPNV.<br>
        Achieved on site and remotely during Covid.<br>
        I joined a small developper team working on the AWS Scheduler project.<br/>
        Project designed to manage existing AWS infrastructure (start, stop, alert, email, budget follow-up).  
      </p>
        <br/>
      <h3 class="bracket-text">[DEVELOPPED SKILLS]</h3>
      <p class="util-text">
        Versioning (Git, Git flow, BitBucket)<br/>
        Markdown<br/>
        AWS EC2 API<br/>
        Google Calendar API<br/>
        C# .NET Framework<br/>
        Object Oriented PHP<br/>
        DOXYGEN<br/>
        Agile project management<br/>
        SCRUM</br>
        DEBIAN / CRON
      </p>

      <h4 class="mt-5 bracket-text">[RESSOURCES]</h4>
      <ul class="util-text list-unstyled resource-links">
        <li><a href="https://bitbucket.org/NGY_CPNV/awsscheduler/src/master/" target="_blank">PROJECT SOURCE</a></li>
      </ul>

      <a href="index.html#projects" class="btn btn-outline-dark mt-4">← Back to Projects</a>
    </div>
<?php
$content = ob_get_clean();
require "./view/template.php";