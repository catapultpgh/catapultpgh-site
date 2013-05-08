<?php 

$page_id="catapultpgh";
include('parts/header.php'); 

?>
    <h2 class="h1 tagline">Catapult is a <span class="keyword">coworking</span> space, a <span class="keyword">community</span>, a full stack <span class="keyword">agency</span>, and a small batch coffee <span class="keyword">roastery</span>.</h2>
    <p class="h3">Catapult is a lot of disparate things that somehow work very well together. <br /><!-- Stop by sometime.--></p>
    <div class="clearfix space-photos">    
        <?php printAll('space'); ?>
    </div>
    <br /><br />
    <div class="clearfix">
        <section class="sixcol first">

            <p>To join the community is free. Come hang out any weekday and meet some members. If it's a good fit, <a href="https://groups.google.com/d/forum/catapultpgh" target="blank">join our mailing list</a> and setup a <a href="https://www.gittip.com/catapultpgh/" target="blank">reoccuring donation</a>. If you love what we're doing and you want to contribute more, come talk to us about getting a key (90 dollars a month) and maybe even a permanent desk (another 60 a month). We're pretty relaxed. There are no contracts, start and stop whenever you want.</p>

            <ul class="contact-info">
                <li><strong>Catapult PGH</strong></li>
                <li>5139 Penn Ave.</li>
                <li>Pittsburgh, PA 15224</li>
                <li><a href="mailto:inbox@catapultpgh.org">inbox@catapultpgh.org</a></li>
                <li>(412) 407-3327</li>
            </ul>
            
        </section>  
        <section class="sixcol last">
            <a href="https://maps.google.com/maps?q=5139+Penn+Ave,+Pittsburgh,+PA&hl=en&ll=40.465299,-79.941888&spn=0.031246,0.035062&sll=40.431368,-79.9805&sspn=0.250094,0.280495&hnear=5139+Penn+Ave,+Pittsburgh,+Allegheny,+Pennsylvania+15224&t=m&z=15"><img src="img/map.png" alt="5139 Penn Ave" /></a>
        </section>
    </div>

<?php include('parts/footer.php'); ?>
