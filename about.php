<?php
include "./scripts/config.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hurley Piano Website - About</title>
    <link rel="icon" type="image/png" href="<?= $imgs ?>PianoLogo7.png">
    <link rel="stylesheet" href="<?= $styles ?>about.css">
    <link rel="stylesheet" href="<?= $styles ?>styles.css">
    
</head>
<body>
<?php include($html . "header.html"); ?>
    <main>
    
    <!-- Testimonial Box 1 -->
    <div class="testimonial1-box element">
               <div class="star-child">
                   <h2>"We Believe Your Child is a STAR"</h2>
                   <p>The Piano serves as a powerful educational tool for neurodiverse children...Hurley Piano specializes in creating educational methodologies that simplify music learning for parents teaching their children, including neuro-typical kids and those with special needs like ADHD, Asperger Syndrome, Autism, Down Syndrome, Dyscalculia, Dyslexia, and Sensory Processing Disorder. Richard Hurley has developed the acclaimed Black Keys Exercises to introduce keyboard skills to even the most challenging special needs students. Based in Austin, Texas, a hub of special needs innovation, Hurley Piano collaborates with leading researchers to refine their approach and offers free introductory videos and blogs, fostering a video-based community discussion to address the challenges faced by special needs children, all guided by their vision of inclusive music education.
               </p>
               </div>
           </div>
      
    <div class="container">
        <!-- Testimonial Box 2 -->
        <div class="testimonial-box element">
               <h2>My Mission</h2><br>
               <img src="<?= $imgs ?>about/sheet-music.png" alt="fingers on sheet music">
               <p>The Piano serves as a powerful educational tool for neurodiverse children...</p><br><br>
           </div>
        <!-- Testimonial Box 3 -->
        <div class="testimonial-box">
            <h2>My Vision</h2>
            <img src="<?= $imgs ?>music-lessons/piano.png" alt="baby play piano">
            <p>
            Hurley Piano empowers every child, including those with special needs, through accessible and enriching music education...
            </p>
        </div>
    </div>
    
    <div class="container">   
       <!-- Testimonial Box 4 -->
        <div class="testimonial-box">
            <h2>My Goal</h2>
            <img src="<?= $imgs ?>about/piano.png" alt="child and adult playing piano together">
            <p>Hurley Piano develops education methodologies for easy learning to help parents teach their kids music...</p>
        </div>
    <!-- Testimonial Box 5 -->
    <div class="testimonial-box">  
            <h2>My Ideas</h2>
            <img src="<?= $imgs ?>about/ideas.png" alt="holding up a lightbulb to the sky">
            <p>Innovation is synonymous with HurleyPiano...</p><br><br>
        </div>
    </div>

    <div class="container">
        <!-- Testimonial Box 6-->
        <div class="testimonial-box">
            <h2>Our Community</h2>
            <img src="<?= $imgs ?>about/community.png" alt="joining hands together in a pile">
            <p>Hurley Piano fosters connections among those with Special Needs...</p><br><br>
        </div>
         <!-- Testimonial Box 7-->
        <div class="testimonial-box">  
            <h2>Our Website</h2>
            <img src="<?= $imgs ?>about/our-website.png" alt="laptop on table">
            <p>Our site embraces tech, primed for gadgets’ evolution...</p><br><br>
        </div>
    </div>
    
    </main>

    <?php include $html . "footer.html" ?>
<!--Use the below code snippet to provide real time updates to the live chat plugin without the need of copying and paste each time to your website when changes are made via PBX-->
<call-us-selector phonesystem-url="https://1888.3cx.cloud" party="hurleypiano"></call-us-selector>
<script defer src="https://downloads-global.3cx.com/downloads/livechatandtalk/v1/callus.js" id="tcx-callus-js" charset="utf-8"></script>

<!-- UserWay widget script--> 
<script src="https://cdn.userway.org/widget.js" data-account="rmm88qREWe"></script>


</body>
</html>