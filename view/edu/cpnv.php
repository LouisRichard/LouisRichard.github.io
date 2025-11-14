<?php
ob_start();
?>
<span class="bg-text">"CPNV"</span>
    <p class="util-text section-id">"SECTION 03-B"</p>

    <div class="project-content">
      <h2 class="quote-title">CPNV</h2>
      <div class="project-divider"></div>
      <p class="util-text">
        <span class="bracket-text">[Category]</span> CFC<br>
        <span class="bracket-text">[Timespan]</span> 2016 - 2022<br>
        <span class="bracket-text">[Status]</span> <span style="color:#0F0">SUCCESS</span>
      </p>

      <p class="mt-4">
        CFC in general computer science obtained as part of my apprenticeship.<br/>
        Did all my time in Ste-Croix, VD, Switzerland.<br/>
        This course doesn't specialize in anything. We learn networking, programming, system administration, database management, ...<br/>
        This course takes into consideration all the required ICT modules as well as some bonus ones.
      </p>
        <br/>
      <h3 class="bracket-text">[DEVELOPPED SKILLS]</h3>
      <p class="util-text">
        Windows 7, 10, Server 2008R2, 2012R2<br/>
        Microsoft Office suite > 2010, 2016, O365<br/>
        Developpement > Visual Basic, C, C# .NET, PHP, JavaScript<br/>
        Scripting > Bash, Powershell<br/>
        Databases > SQL Server, TSQL, MySQL, MariaDB, SQLite<br/>
        Apache Web Server / WAMP/LAMP<br/>
        DomoticZ<br/>
        Network Attached Storage<br/>
        Print/Scan server<br/>
        Mac OSX 10.14 Mojave<br/>
        Linux > Debian 9/10/11, Ubuntu<br/>
        Networking > Cisco CCNA<br/>
        Services > DHCP, DNS<br/>
        Active Directory<br/>
        Hardware diagnostic<br/>
      </p>

      <h4 class="mt-5 bracket-text">[RESSOURCES]</h4>
      <ul class="util-text list-unstyled resource-links">
        <li><a href="#" target="_blank">NOT AVAILABLE</a></li>
      </ul>

      <a href="index.html#education" class="btn btn-outline-dark mt-4">← Back to Education</a>
    </div>
<?php
$content = ob_get_clean();
require "./view/template.php";