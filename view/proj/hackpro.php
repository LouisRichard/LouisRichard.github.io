<?php
ob_start();
?>
<span class="bg-text">"HACK PRO"</span>
    <p class="util-text section-id">"SECTION 04-F"</p>

    <div class="project-content">
      <h2 class="quote-title">HACK PRO</h2>
      <div class="project-divider"></div>
      <p class="util-text">
        <span class="bracket-text">[Category]</span> Hardware/System<br>
        <span class="bracket-text">[Timespan]</span> 2024 - 2025<br>
        <span class="bracket-text">[Status]</span> <span style="color:#0F0">ONLINE</span>
      </p>

      <p class="mt-4">
        I've come across a very nice 2009 Mac Pro 4,1 (flashed with 5,1 firmware) with dual CPU and 64GB of ECC DDR3 for free from a friend.<br/>
        His work place was getting rid of it to replace it with the much newer, more powerful and more efficient M3 macs.<br/>
        With this new powerhouse in hand, I decided to have some fun with it.<br/>
        It came with an Nvidia GT120, a tired HDD and two 4c8t Xeon CPUs. This configuration was sub obtimal for what I had in mind.<br/>
        I took it upon myself to upgrade the storage to a couple of SSDs and change the GPU to an RX 280x OC.<br/>
        Changed the Wireless card to an Airport card for cheap off Aliexpress and change the CPUs to two 6c12t Xeon X5675.<br/>
        With all these upgrades and the magic of OpenCore Legacy Patcher, I upgraded this machine to run on MacOS Sequoia as it is the last version compatible with x86-64.<br/>
        This machine now sits in my recording studio I share with a couple of friends. It's the machine running Reaper, Logic Pro, Ableton and other softwares as needed.<br/>
        Would I recommend anyone do it today? Absolutely not. But it was fun so worth.
      </p>
        <br/>
      <h3 class="bracket-text">[DEVELOPPED SKILLS]</h3>
      <p class="util-text">
        MacOS system management<br/>
        MacOS system istallation<br/>
        Hardware compatibility<br/>
        Hardware upgrade<br/>
        MacOS app management<br/>
        CPU Delidding<br/>
      </p>

      <h4 class="mt-5 bracket-text">[RESSOURCES]</h4>
      <ul class="util-text list-unstyled resource-links">
        <li><a href="https://blog.richard486.ch/index.php?page=post&id=3" target="_blank">BLOG POST</a></li>
      </ul>

      <a href="index.html#projects" class="btn btn-outline-dark mt-4">← Back to Projects</a>
    </div>
<?php
$content = ob_get_clean();
require "./view/template.php";