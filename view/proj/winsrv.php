<?php
ob_start();
?>
<span class="bg-text">"WINDOWS SERVER SETUP"</span>
    <p class="util-text section-id">"SECTION 04-E"</p>

    <div class="project-content">
      <h2 class="quote-title">WINDOWS SERVER SETUP</h2>
      <div class="project-divider"></div>
      <p class="util-text">
        <span class="bracket-text">[Category]</span> System<br>
        <span class="bracket-text">[Timespan]</span> 2016 - 2019<br>
        <span class="bracket-text">[Status]</span> <span style="color:#F00">OUT OF DATE</span>
      </p>

      <p class="mt-4">
         This project was undertaken as part of my studies at the CPNV.<br/>
         Throughout my time there, I had numerous opportunities to configure Windows servers on both virtual machines and physical hardware.<br/>
         We utilized Windows Server for various services, including:</br>
         <ul>
            <li>DHCP server</li>
            <li>DNS service</li>
            <li>Active Directory</li>
            <li>Print and scan server</li>
            <li>Network share with AD users</li>
        </ul>
        Throughout these experiences, we learned about best practices and how to implement redundant server configurations.<br/>
        Although my experience is primarily with versions that have reached their End of Life (EOL), I am confident that I can adapt if the need arises.<br/>
        The versions used during my apprenticeship were :<br/>
        <ul>
            <li>Windows Server 2008 R2</li>
            <li>Windows Server 2012 R2</li>
        </ul>
      </p>
        <br/>
      <h3 class="bracket-text">[DEVELOPPED SKILLS]</h3>
      <p class="util-text">
        DHCP configuration<br/>
        DNS configuration<br/>
        Active Directory configuration<br/>
        User access management<br/>
        Network share configuration<br/>
        RAID configuration<br/>
        Redundant server configuration<br/>
        Print/Scan server configuration<br/>
        NTFS & Share Access Rights management<br/>
        Network configuration<br/>
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