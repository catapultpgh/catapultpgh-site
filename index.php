<?php 

$page_id="catapultpgh";
include('parts/header.php'); 

?>
    <h2 class="h1 tagline">Catapult is a <span class="keyword">community</span>, a <span class="keyword">coworking</span> space, and a small batch coffee <span class="keyword">roastery</span>.</h2>
    <p class="h3">Catapult is a lot of disparate things that somehow work very well together.</p>
    <div class="clearfix space-photos">    
        <?php printAll('space'); ?>
    </div>
    <br /><br />
    <div class="clearfix">
        <section class="sixcol first">

             <p>We are a group Pittsburgh-based entrepreneurs, designers, developers, writers, and creatives who simply don't want to work at home, and don't want to work alone.</p>

             <p>To join the community is free. Come hang out any weekday and meet some members. If it's a good fit, <a href="http://eepurl.com/rQ2Kn" target="blank">join our mailing list</a> and setup a <a href="https://www.gittip.com/catapultpgh/" target="blank">reoccuring donation</a>. If you love what we're doing and you want to contribute more, come talk to us about getting a shared desk (50 dollars a month, including key and coffee) and maybe even a permanent desk (another 100 a month), or ask us about hosting events at the space. We're pretty relaxed. There are no contracts, start and stop whenever you want.</p>

            <ul class="contact-info">
                <li><strong>Catapult PGH</strong></li>
                <li>4327 Butler St. 2nd Floor</li>
                <li>Pittsburgh, PA 15201</li>
                <li><a href="mailto:inbox@catapultpgh.org">inbox@catapultpgh.org</a></li>
                <li>(412) 979-1774</li>
            </ul>
            
        </section>  
        <section class="sixcol last">
            <a href="https://www.google.com/maps/preview#!q=4327+Butler+St%2C+Pittsburgh%2C+PA+15201&data=!4m11!1m10!4m8!1m3!1d97183!2d-79.9805005!3d40.4313684!3m2!1i1024!2i768!4f13.1!17b1"><img src="http://maps.google.com/maps/api/staticmap?center=40.471437,-79.960127&zoom=14&markers=40.470574,-79.960389&size=600x600&sensor=false" alt="4327 Butler St." /></a>
        </section>
    </div>

<?php include('parts/footer.php'); ?>
