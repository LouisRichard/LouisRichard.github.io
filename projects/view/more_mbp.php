<?php
ob_start();
?>

<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
  <div class="container">

    <ol>
    <li><a href="../../index.html">Home</a></li>
      <li><a href="projects.php">projects</a></li>
      <li><a href="projects.php?p=cat_hardware">hardware</a></li>
      <li><a href="projects.php?p=mbprepairs">macbook pro 1502 repairs</a></li>
      <li>More info</li>
    </ol>
    <h2>MacBook Pro 1502 repairs</h2>

  </div>
</section><!-- End Breadcrumbs -->

<section id="about" class="about">
  <div class="container">

    <div class="row">
      <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left">
        <img src="../assets/img/portfolio/hardware/mbp/mbp3.jpg" class="img-fluid" alt="">
      </div>
      <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right">
        <h3>These are more expensive than it seems!</h3>
        <p>
          Although this laptop was bought more than 10 years ago, one of these in good condition can go for up to 230CHF at auction!<br/>
          At the time of writing, JAN 26th 2024, those go for, in average, 130CHF at auction for a Core i5 with 8GB of ram. <br/>
          Not willing to pay that much for a 10 year old laptop and a downgrade from my i7, 16GB, I chose to repair the one I have instead!<br/><br/>
        </p>
      </div>

      <div class="col-lg-12 pt-4 pt-lg-0 order-3 order-lg-3 content" data-aos="fade-up">
        <h4>A bit of backstory</h4>
        <p>
          My MacBook Pro was given to me by my dad in mid 2023 as "not working". According to him, it wouldn't even post sometimes and was otherwise super unstable.<br/>
          Upon attempting to start it up, it worked just fine for me! So I just used it as I would any other laptop.<br/>
          I first had to reset it by performing a clean install of MacOS 11 (Big Sur) and then setup Bootcamp to dual boot it with the latest version of Windows 10.<br/>
          At first, the computer worked fine. Yeah it was kinda unstable but nothing so bad I couldn't use it for regular work or daily use.<br/>
          Then the real problems started.
          <br/><br/><br/><br/>
        </p>
      </div>
      
      <div class="col-lg-6 pt-4 pt-lg-0 order-4 order-lg-5 content" data-aos="fade-up">
        <h4>That's not supposed to happen</h4>
        <p>
          The computer got <i>really</i> unstable.<br/>
          It crashed semi-randomly and sometimes with graphical glitches on the screen.<br/>
          At first, it was kinda alright. I couldn't really rely on it for critical work anymore but it was good enough for watching movies or series.<br/>
          After a few days, though, it got worse and worse.<br/>
          It's a this point I started looking into the source of the fault. I opened up the laptop with the wrong screwdriver and took a look around.<br/>
          Nothing looked out of place so I started poking around to see if anything would happen (as you do)
        </p>
      </div>
      <div class="col-lg-6 order-5 order-lg-4" data-aos="fade-left">
        <img src="../assets/img/portfolio/hardware/mbp/mbp4.jpg" class="img-fluid" alt="">
      </div>

      <div class="col-lg-12 pt-4 pt-lg-0 order-5 order-lg-5 content" data-aos="fade-up">
        <p>
          <br/>
          You'd be surprised how well just poking around can help you figure out even a temporary fix.<br/>
          From experience with other computers and from what I learned being curious on YouTube, I knew the most likely suspect was memory. So I started by applying pressure on each memory chips with the laptop turned on.<br/>
          As soon as the computer crashed, I knew we had a winner. <br/>
          Lo and behold, the memory chip closest to the I/O board connector did provoke a crash!<br/>
          After this finind, I found it odd that a chip so close to a connector could be source of the crash. So by pure instinct and curiosity, I tried the same experiment but, this time, applying pressure to the I/O board connector.<br/>
          A crash. Immediatly artefacts appeared on the screen. 
          <br/><br/><br/><br/>
        </p>
      </div>

      
      <div class="col-lg-6 pt-4 pt-lg-0 order-5 order-lg-5 content" data-aos="fade-up">
        <h4>The first "fix"</h4>
        <p>
          After figuring out that the connector was <i>very</i> pressure sensitive, I armed myself with a drill and a file and I started making a hole to completely remove pressure from this connector.<br/>
          This brought back the computer to it's previous state. Stable enough when not directly touching a table or other surface. But as soon as I would rest my palms on the keyboard or start typing, it would crash again.<br/>
          So, again, not stable enough to work but, using external peripherals, stable enough to watch movies and such.
        </p>
      </div>
      <div class="col-lg-6 order-5 order-lg-5" data-aos="fade-left">
        <img src="../assets/img/portfolio/hardware/mbp/mbp2.jpg" class="img-fluid" alt="">
      </div>

      <div class="col-lg-12 pt-4 pt-lg-0 order-5 order-lg-5 content" data-aos="fade-up">
        <p>
          <br/>
          In hindsight, it's fairly obvious this fix wouldn't work too well. Even if it worked, having a computer with a hole in the bottom cover open a lot more issues.<br/>
          It's also fairly obvious now that I've had time to think about it and learned a bit more about how GPUs work that it was, indeed, a memory issue.<br/>
          Now, the memory being soldered to the board in this model of MacBook Pro makes it harder for people to fix by themselves. Today, I would give it a shot but I don't have the necessary equipment to even attempt to recover this board.<br/><br/>
          Which is why I chose to <a href="https://www.aliexpress.com/item/4001318126535.html?spm=a2g0o.order_list.order_list_main.29.21ef1802zh0buQ">buy a new board from a chinese recycler on AliExpress</a>.<br/>
          At the same time, I bought a new bottom cover to replace the one I drilled into and buy the right tools for the job.<br/>
          After this fix, the serial numbers won't be matching, reducing the value of the machine, but it's not something I really care about.<br/>
          I chose to buy a 2013 model year logic board with a Core i7 and 16GB of ram. The seller claims that the 2014 model logic board is compatible with 2013 chassis but, this being my first time working on a Mac, I didn't want to take the risk.<br/>
          The total for the logic board, the bottom cover, the tools and new screws? 171CHF. Maybe buying a new one would have been a better deal in the end... Oh well. 
          <br/><br/><br/><br/>
        </p>
      </div>

      <div class="col-lg-6 order-5 order-lg-5" data-aos="fade-left">
        <img src="../assets/img/portfolio/hardware/mbp/mbp5.jpg" class="img-fluid" alt="">
      </div>
      <div class="col-lg-6 pt-4 pt-lg-0 order-5 order-lg-5 content" data-aos="fade-up">
        <h4>The definitive fix</h4>
        <p>
          Following <a href="https://www.ifixit.com/Guide/MacBook+Pro+13-Inch+Retina+Display+Late+2013+Logic+Board+Replacement/27702">this iFixIt guide</a>, I started disassembling the laptop.<br/>
          The connectors scattered on the main board can be pretty delicate so I had to be pretty careful with it.<br/><br/>
          Once the main board was out, I followed the same steps in reverse but installing the new logic board in. <br>
          The seller did include some thermal paste in the package but I chose to use some Noctua thermal paste I had leftover from my PC build.<br/><br/>
          
          Now, because I also installed a new bottom cover to replace the one I drilled through, the marking saying "MacBook Pro" and the serial number are no longer there.<br/>
          Furthermore, the serial number isn't the original one linked to this machine.<br/>
          This might affect the value but it won't impact the performance in any way.<br/><br/>
          With the cover closed off, I plugged in the laptop and started it!<br/>
          Once in MacOS, I simply changed the default boot partition as it was booting on Windows by default, and updated the system.<br/><br/>
          Right now, the computer works perfectly! The new logic board comes with the advertised CPU en memory, the IO works fine and everything is in order!<br/><br/>
          Another victory for the history books!
          <br/><br/><br/><br/>
        </p>
      </div>

    </div>
  </div>
</section><!-- End About Section -->

    <?php
$content = ob_get_clean();
require "_template.php";

