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
      This project was created within the context of my studies. It was a group project intended to be developed in C# .NET. The subject was free to choose but had to adhere to certain specifications, such as:<br/>
      * Utilizing a database<br/>
      * Implementing some form of login functionality</br>
      * Employing the Agile methodology to manage the project<br/><br/>
      The intention behind this project was to keep it free and open-source without any restrictions imposed by our school.<br/>
      Although challenging at times, we managed to achieve this using only free software, with the exception of Visual Studio Enterprise.<br/>
      The objective was to continuously update the software until we deemed it 'good enough'. However, as time progressed, we became involved in other projects, causing this one to be put aside.<br/>
      </p>
        <br/>
      <h3 class="bracket-text">[DEVELOPPED SKILLS]</h3>
      <p class="util-text">
        C# .NET<br/>
        .NET Framework<br/>
        Agile project management<br/>
        SCRUM<br/>
        Source control (git)<br/>
        Doxygen<br/>
        Test driven developpement<br/>
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