<?php
ob_start();
?>
<span class="bg-text">"DAREST"</span>
    <p class="util-text section-id">"SECTION 02-D"</p>

    <div class="project-content">
      <h2 class="quote-title">DAREST INFORMATIC SA</h2>
      <div class="project-divider"></div>
      <p class="util-text">
        <span class="bracket-text">[Category]</span> IT SERVICE DESK<br>
        <span class="bracket-text">[Timespan]</span> 2025 - TODAY<br>
        <span class="bracket-text">[Status]</span> <span style="color:#0F0">ONLINE</span>
      </p>

      <p class="mt-4">
        Experience aquired as a regular day job.<br/>
        I joined the IT Service Desk team for the client company. The Service Desk is available 24/7 do so lvl 1 and 2 tech support on workstations and some specialized softwares.<br/>
        I worked on the phone and at the Service Desk counter in multiple offices.<br/>
        During my time, I've also worked remotely, sometimes during the night.<br/>
        In both French and English.<br/>
        The developped skills list is long, but keep in mind we were level 1 and 2 for end user services. We were also the first point of contact for the entire IT department.<br/>
        Tougher incidents were forwarded to a more specialized L2 or to L3.
      </p>
        <br/>
      <h3 class="bracket-text">[DEVELOPPED SKILLS]</h3>
      <p class="util-text">
        Incident management<br/>
        Major incident management (P1/P2)<br/>
        Service Now<br/>
        FortiClient VPN<br/>
        Windows 10/11<br/>
        Office 365 Suite<br/>
        MS Teams<br/>
        Active Directory<br/>
        Azure AD<br/>
        InTune device management<br/>
        InTune software deployment<br/>
        Exchange<br/>
        SCCM</br>
        SharePoint<br/>
        OneDrive<br/>
        SamWin call center client<br/>
        Directory Access Management<br/>
        Knowledge base redaction<br/>
        VDI Services<br/>
        Wallix<br/>
        Ivanti Device Management<br/>
        Cisco Webex<br/>
        VMware Aria Automation<br/>
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