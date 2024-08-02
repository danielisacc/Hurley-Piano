<?php
// Include the configuration file for setting up constants, paths, and other configuration details.
// This file likely defines variables like $imgs, $styles, and $html used throughout the site.
include "./scripts/config.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Define the character encoding for the document to ensure proper display of text -->
    <meta charset="UTF-8">
    
    <!-- Set the viewport for responsive web design to scale the content properly on different devices -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Set the title of the webpage displayed in the browser's title bar and tab -->
    <title>Hurley Piano Website - About</title>
    
    <!-- Link the favicon for the website, an icon that appears in the browser tab -->
    <link rel="icon" type="image/png" href="<?= $imgs ?>PianoLogo7.png">
    
    <!-- Link to the main stylesheet for the "About" page, using the base path defined in config.php -->
    <link rel="stylesheet" href="<?= $styles ?>about.css">
    
    <!-- Link to an additional stylesheet for common styles across the website -->
    <link rel="stylesheet" href="<?= $styles ?>styles.css">
</head>
<body>
    <!-- Include the header HTML, which typically contains navigation, logo, and other header elements -->
    <?php include($html . "header.html"); ?>

    <main>
        <!-- Main content area starts here -->

        <!-- Testimonial Box 1: Highlighting the belief in the potential of all children, including those with special needs -->
        <div class="testimonial1-box element">
            <div class="star-child">
                <h2>"We Believe Your Child is a STAR"</h2>
                <p>
                    <!-- Description of Hurley Piano's approach to teaching music to neurodiverse children,
                         including the development of specific methodologies like the Black Keys Exercises.
                         Emphasis on inclusivity and collaboration with researchers in special needs education.
                         This section likely serves as a mission statement or introduction to the company's philosophy. -->
                    The Piano serves as a powerful educational tool for neurodiverse children...Hurley Piano specializes in creating educational methodologies that simplify music learning for parents teaching their children, including neuro-typical kids and those with special needs like ADHD, Asperger Syndrome, Autism, Down Syndrome, Dyscalculia, Dyslexia, and Sensory Processing Disorder. Richard Hurley has developed the acclaimed Black Keys Exercises to introduce keyboard skills to even the most challenging special needs students. Based in Austin, Texas, a hub of special needs innovation, Hurley Piano collaborates with leading researchers to refine their approach and offers free introductory videos and blogs, fostering a video-based community discussion to address the challenges faced by special needs children, all guided by their vision of inclusive music education.
                </p>
            </div>
        </div>

        <div class="container">
            <!-- Testimonial Box 2: Focus on the mission of Hurley Piano -->
            <div class="testimonial-box element">
                <h2>My Mission</h2><br>
                <!-- Image related to the mission, depicting a symbolic or illustrative scene -->
                <img src="<?= $imgs ?>about/sheet-music.png" alt="fingers on sheet music">
                <!-- Description of the mission, possibly highlighting the educational philosophy and objectives -->
                <p>The Piano serves as a powerful educational tool for neurodiverse children...</p><br><br>
            </div>

            <!-- Testimonial Box 3: Focus on the vision of Hurley Piano -->
            <div class="testimonial-box">
                <h2>My Vision</h2>
                <!-- Image representing the vision, often inspirational or aspirational -->
                <img src="<?= $imgs ?>music-lessons/piano.png" alt="baby play piano">
                <!-- Description of the vision, focusing on the broader goals and future aspirations of the company -->
                <p>
                    Hurley Piano empowers every child, including those with special needs, through accessible and enriching music education...
                </p>
            </div>
        </div>

        <div class="container">
            <!-- Testimonial Box 4: Focus on the goals of Hurley Piano -->
            <div class="testimonial-box">
                <h2>My Goal</h2>
                <!-- Image symbolizing goals, such as collaboration or teaching -->
                <img src="<?= $imgs ?>about/piano.png" alt="child and adult playing piano together">
                <!-- Description of the goals, detailing specific objectives and targets the company aims to achieve -->
                <p>Hurley Piano develops education methodologies for easy learning to help parents teach their kids music...</p>
            </div>

            <!-- Testimonial Box 5: Focus on ideas and innovation -->
            <div class="testimonial-box">
                <h2>My Ideas</h2>
                <!-- Image representing creativity or new ideas -->
                <img src="<?= $imgs ?>about/ideas.png" alt="holding up a lightbulb to the sky">
                <!-- Description of the innovative approaches and new ideas being implemented at Hurley Piano -->
                <p>Innovation is synonymous with HurleyPiano...</p><br><br>
            </div>
        </div>

        <div class="container">
            <!-- Testimonial Box 6: Focus on the community aspect of Hurley Piano -->
            <div class="testimonial-box">
                <h2>Our Community</h2>
                <!-- Image depicting a sense of community or togetherness -->
                <img src="<?= $imgs ?>about/community.png" alt="joining hands together in a pile">
                <!-- Description of the community initiatives, engagement with parents, and support for special needs families -->
                <p>Hurley Piano fosters connections among those with Special Needs...</p><br><br>
            </div>

            <!-- Testimonial Box 7: Focus on the website and its technological features -->
            <div class="testimonial-box">
                <h2>Our Website</h2>
                <!-- Image symbolizing technology and the online presence of Hurley Piano -->
                <img src="<?= $imgs ?>about/our-website.png" alt="laptop on table">
                <!-- Description of the website's features, possibly emphasizing accessibility, resources, and user-friendliness -->
                <p>Our site embraces tech, primed for gadgets’ evolution...</p><br><br>
            </div>
        </div>
    </main>

    <!-- Include the footer HTML, containing additional navigation, contact information, or other footer elements -->
    <?php include $html . "footer.html"; ?>

    <!-- Custom element for integrating a live chat feature.
         The 'phonesystem-url' attribute specifies the URL for the phone system, and 'party' specifies the user or business identity. -->
    <call-us-selector phonesystem-url="https://1888.3cx.cloud" party="hurleypiano"></call-us-selector>

    <!-- External JavaScript file for the live chat functionality, deferred to load after the main content -->
    <script defer src="https://downloads-global.3cx.com/downloads/livechatandtalk/v1/callus.js" id="tcx-callus-js" charset="utf-8"></script>

    <!-- UserWay widget script for enhancing website accessibility. The data-account attribute links to a specific UserWay account for customization -->
    <script src="https://cdn.userway.org/widget.js" data-account="rmm88qREWe"></script>
</body>
</html>
