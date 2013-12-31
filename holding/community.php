<?php 

$page_id = "catapultpgh-community";
include('parts/header.php');

?>
    <nav class="programs-nav">
        <ul class="tabs clearfix">
        
            <li class="threecol first"><a href="#showntell" class="current" title="Show 'n' Tell">
                <p>Show &lsquo;N&rsquo; Tell</p>
                <img src="img/programs/showntell-nav.png" alt="Show 'N' Tell" />
            </a></li>
            
            <li class="threecol"><a href="#microloans" title="Micro Loans">
                <p>Micro Loans</p>
                <img src="img/programs/microloans-nav.png" alt="Micro Loans" />
            </a></li>
            
            <li class="threecol"><a href="#roasting" title="Small Batch Roasting">
                <p>Small Batch Roasting</p>
                <img src="img/programs/roasting-nav.png" alt="Small Batch Roasting" />
            </a></li>
            
            <li class="threecol last"><a href="#monday" title="Monday Focus">
                <p>Monday Focus</p>
                <img src="img/programs/monday-nav.png" alt="Monday Focus" />
            </a></li>

        </ul> <!-- .tabs -->
    </nav>

    <section class="tab-content" id="showntell">

        <div class="clearfix">
            <div class="sixcol first">
                <h2 class="h2">Show &lsquo;N&rsquo; Tell</h2>
                <p>Show-n-Tell is a monthly event showcasing interesting projects around town. Every first Friday at 5pm, we invite 4 speakers to come share what they are doing to make Pittsburgh awesome. Keep an eye on the Catapult weblog for details on the coming month's presenters.</p>
                <p>Have an idea for a speaker? Looking to present something yourself? Stop by the space or shoot an email to <a href="mailto:lara@catapultpgh.org">Lara</a> for details.</p>
            </div>
            <div class="sixcol last">
                <img class="showntell-logo" src="img/programs/showntell-page.jpg" alt="Show-n-Tell" />
            </div>
        </div>

        <div class="presenter-gallery clearfix">
            <h3>Past Speakers</h3>
            <div class="presenter-gallery animated fadeInUp clearfix">

                <?php
                
                printAll('presenters');

                /* Lara was experimenting with an array to print presenter image, name, and URL. Incomplete, obvy. */

                // Inefficient, for testing purposes.
                // $names = array(
                //         'Podcamp guy' => '01', 
                //         'Red Blue Voice'=> '02', 
                //         'Kate Stoltzfus' => '03', 
                //         'Brian Shope' => '04', 
                //         'Green &amp; Screen' => '05', 
                //         'Alex Leeson-Brown' => '06', 
                //         'Cassidy Krug' => '07', 
                //         'Feebee' => '08', 
                //         'Eric Singer' => '09', 
                //         'Nick Fedoreck' => '10', 
                //         'Anne Marie' => '11', 
                //         'Derek Minto' => '12', 
                //         'Some Guy' => '13', 
                //         'Jonny Goldstein' => '14', 
                //         'Laurie Trok' => '15', 
                //         'Kit Mueller' => '16', 
                //         'Chalkboard gurl' => '17', 
                //         'Prenatal Woman' => '18', 
                //         'Healcrest Farms' => '19', 
                //         'Chatham Woman' => '20',
                //         'Other' => '21',
                //         'Other2' => '22',
                //         'Other3' => '23',
                //         'Other4' => '24'

                //     );

                
                // foreach ($names as $n => $i) {
                //     printPresenter($i, '');
                // }

                ?>

            </div>
        </div>

    </section> <!-- #showntell -->

    <section class="tab-content" id="microloans">
        <h2 class="h2">Micro Loans</h2>
        <div class="clearfix">
            <div class="sixcol first">
                <p>Catapult PGH is a Trustee for the Kiva Zip program. Kiva was a pioneer in micro loans in West Africa, and now they've decided to bring their model to The States. Awesome for us, Pittsburgh was the third city they decided to pilot their program in, and Catapult was the first Trustee.</p>
                <p>The loan is pretty simple. It's for people who don't have the income or equity for a traditional business loan, it's for up to 5,000 dollars and it's interest free. If you pay it back, you can reapply for a 10,000 and 25,000 dollar interest free loan as well.Below are some projects Catapult has helped out so far.</p>
            </div>
            <div class="sixcol last">
                <img src="img/programs/microloans-page.png" alt="Kiva Zip logo" />
            </div>
        </div>

        <h2>Who's been funded?</h2>
        <div class="clearfix">   
            <h3>Healcrest Urban Farms</h3>
            <div class="sixcol first">
                <p>We offer an ultra-pure line of wellness products made from herbs and fruits grown on the farm and are expanding our line to include all natural, fruit and herb frozen treats to be sold at a line-up of festivals, outdoor markets and seasonal events April-November 2013.</p>

                <p>Our biggest challenge has been creating solid revenue streams that create financial sustainability for the farm. Our saving grace is that there is little overhead in maintaining and producing the herbs. I own the land outright with no debt and cost of greenhouse maintenance, cover cropping and organic treatments, seeds and plants is affordable. However I want very much to make sustainable profit in order to grow the Farm and to increase its production through a quality artisanal brand of natural products.</p>

                <p>I am very proud of how this abandoned land has been saved and grown as a natural space. I am proud of the crop production we have and the line of herbal teas we have grown. We saw good response on Etsy for last few years and great potential to have quality products with a local artisanal touch.This is our customer-base - those who love hand-touched, naturally prepared and small batch artisanal processes that make slow food good and good for you.</p>
            </div>
            <div class="sixcol last">
                <img src="img/microloans/healcrest.jpg" alt="Healcrest Urban Farms" />
            </div>
        </div>

        <div class="clearfix">    
            <h3>TrokArt</h3>
            <div class="sixcol first">
                
                <p>The TrokArt business model can be divided into three parts.</p>

                <p>The first part is the work I create without any money or business in mind. This includes collages, public art pieces, installations, and art books. While these projects will sometimes sell and occasionally be lucrative, I have realized I can't count on them as a sustainable source of income.</p>

                <p>The second part is creating custom works of art for individuals and businesses on unconventional canvases. I use a lot of repurposed materials in my work, and this is an extension of that. I believe art can and should be anywhere. I have been working on commissions making art on items that people own, like cars, laptops, turntables, windows, appliances, and more. I have found that people seem to value art as application in a way that is different from the conventional 'fine art' collector mentality. This art is more accessible to everyone. Therefore, I am able to profit from this and create a new kind of art market for myself.</p>

                <p>The third part of my business is creating wearable art and other art objects from repurposed materials. I create jewelry made from optical lenses that are otherwise thrown away. I have also been creating lamps and other functional pieces of art that will be readily available on my website.</p>

                <p>My goal is to organize and integrate these three parts into one sustainable creative business.</p>
            </div>
            <div class="sixcol last">
                <img src="img/microloans/trokart.jpg" alt="Healcrest Urban Farms" />
            </div>
        </div>
    </section>

    <section class="tab-content" id="roasting">
        <h2 class="h2">Small Batch Roasting</h2>
        <div class="sixcol first">
            <p>We don't mess around when it comes to coffee. In fact, we are so serious that we roast our own! Member <a href="http://notlaura.com" target="blank">Lara Schenck</a> roasts small batches of single origin beans, supplying the freshest, most delicious beans for Catapult's exceptionally refined palette. Needless to say, our Chemex gets quite a workout. We've also got supplies for pourover, Aeropress, and syphon brewing.</p>
            <p>In addition to provding for our own caffination, we have occasional tasting sessions open to the public. Keep an eye on the Weblog for updates.</p>
        </div>
        <div class="sixcol last">
            <img src="img/programs/roasting-page.jpeg" alt="Coffee roasting" />
        </div>
    </section>

    <section class="tab-content" id="monday">
        <h2 class="h2">Monday Focus</h2>
        <div class="sixcol first">
            <p>Mondays at 10:30 we gather around a bowl of gluten free baked goods and talk about our individual goals for the week. None of us have a boss so this is a great way to get us on the path to a productive work week. We try to keep it to 15 minutes.</p>
        </div>
        <div class="sixcol last">
            
        </div>
    </section>
 
<?php include('parts/footer.php'); ?>
