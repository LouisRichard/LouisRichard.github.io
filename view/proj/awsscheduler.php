<?php
ob_start();
?>
<span class="bg-text">"RICHARD486"</span>
    <p class="util-text section-id">"SECTION 04-C"</p>

    <div class="project-content">
      <h2 class="quote-title">AWS SCHEDULER</h2>
      <div class="project-divider"></div>
      <p class="util-text">
        <span class="bracket-text">[Category]</span> DEVELOPPEMENT<br>
        <span class="bracket-text">[Timespan]</span> 2020 - 2021<br>
        <span class="bracket-text">[Status]</span> <span style="color:#F00">ABANDONED</span>
      </p>

      <p class="mt-4">
        AWS Scheduler is designed to manage existing AWS infrastructure (start, stop, alert, email, budget follow-up).<br/>
        This project was developed during my internship at CPNV, with Mr. Glassey serving as the product owner and project manager responsible for decision-making and code review.<br/>
        The project is written in object-oriented PHP, which was a new experience for me. Additionally, it was my first time working with the AWS API.<br/>
        Despite the challenges, I thoroughly enjoyed my time working on it as part of the team.<br/>
        Currently, it appears that the project is either on standby or halted for the time being.
      </p>
        <br/>
      <h3 class="bracket-text">[DEVELOPPED SKILLS]</h3>
      <p class="util-text">
        PHP<br/>
        Agile project management<br/>
        SCRUM<br/>
        Object Oriented Programming<br/>
        Source control (git)<br/>
        Test driven developpement<br/>
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