<?php
// Include the configuration file for common settings, paths, and other configurations.
// This typically defines variables like $styles, $imgs, and $html used throughout the site.
include "./scripts/config.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Define the character encoding for the document -->
    <meta charset="UTF-8">
    
    <!-- Set the viewport for responsive design, ensuring proper display on different devices -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Set the title of the webpage, displayed in the browser's title bar and tab -->
    <title>Hurley Piano Website - Blog</title>
    
    <!-- Include Font Awesome stylesheet for using icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    
    <!-- Link the favicon for the website, an icon that appears in the browser tab -->
    <link rel="icon" type="image/png" href="<?= $imgs ?>PianoLogo7.png">
    
    <!-- Link to the main stylesheet for the blog page, using the base path defined in config.php -->
    <link rel="stylesheet" href="<?= $styles ?>blog.css">
    
    <!-- Include Google Fonts stylesheet for using the 'Roboto' font -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Include the header HTML, which typically contains navigation, logo, and other header elements -->
    <?php include($html . "header.html"); ?>
    
    <main>
        <!-- Main content area starts here -->
        
        <div class="star-child">
            <br><br><br>
            <!-- Blog post title -->
            <h2>
                Introduction Steps for Teaching Piano to Special Needs Kids <br><br>
            </h2>
            
            <!-- Link to an image related to the blog post -->
            <a href="<?= $imgs ?>blog/steps-to-piano.png"></a> 
            
            <!-- Button linking to an external PDF article -->
            <div class="button-container">
                <a href="https://finearts.tcu.edu/music/wp-content/uploads/sites/5/2021/03/2021_03_31_Hetherington-Lecture-Recital-Handout.pdf" class="button book-consultation">Read Article</a> 
            </div>
            
            <br><br><br><br><br>
        </div>

        <!-- Section header for recent blog posts -->
        <h2>Recent Blog Posts</h2>

        <!-- Container for recent blog posts -->
        <div class="container">
            <!-- Blog post entry -->
            <a href="blog-posts/steinway-post.html" class="testimonial-box">
                <img src="<?= $imgs ?>blog/concert.png" alt="orchestra">
                <h3>Special Needs Concert at Steinway</h3>
                <h4>by Richard Hurley | Feb 22,2024 | Music Blog</h4>
            </a>

            <!-- Another blog post entry -->
            <a href="#" class="testimonial-box">
                <img src="<?= $imgs ?>blog/concert.png" alt="orchestra">
                <h3>Top 5 Reasons why Special Needs Music Lessons Are Helpful</h3>
                <h4>by Richard Hurley | Feb 22,2024 | Music Blog</h4>
            </a>

            <!-- Another blog post entry -->
            <a href="#" class="testimonial-box">
                <img src="<?= $imgs ?>blog/concert.png" alt="orchestra">
                <h3>Visual Strategies to Help Special Children Learn the Piano</h3>
                <h4>by Richard Hurley | Feb 22,2024 | Music Blog</h4>
            </a>
        </div>

        <!-- Additional container for more blog posts -->
        <div class="container">
            <a href="#" class="testimonial-box">
                <img src="<?= $imgs ?>blog/concert.png" alt="orchestra">
                <h3>Lillypond: Independent Data Blockchain</h3>
                <h4>by Richard Hurley | Feb 22,2024 | Music Blog</h4>
            </a>

            <a href="#" class="testimonial-box">
                <img src="<?= $imgs ?>blog/concert.png" alt="orchestra">
                <h3>This Year Autism and Music 2018</h3>
                <h4>by Richard Hurley | Feb 22,2024 | Music Blog</h4>
            </a>  

            <a href="#" class="testimonial-box">
                <img src="<?= $imgs ?>blog/concert.png" alt="orchestra">
                <h3>This Year Autism and Music 2018</h3>
                <h4>by Richard Hurley | Feb 22,2024 | Music Blog</h4>
            </a>
        </div>

        <!-- Another container for more blog posts -->
        <div class="container">
            <a href="#" class="testimonial-box">
                <img src="<?= $imgs ?>blog/concert.png" alt="orchestra">
                <h3>Chime Candy</h3>
                <h4>by Richard Hurley | Feb 22,2024 | Music Blog</h4>
            </a>
        </div>        
    </main>
    
    <!-- Include the footer HTML, containing additional navigation, contact information, or other footer elements -->
    <?php include $html . "footer.html" ?>

    <!-- Custom element for integrating a live chat feature.
         The 'phonesystem-url' attribute specifies the URL for the phone system, and 'party' specifies the user or business identity. -->
    <call-us-selector phonesystem-url="https://1888.3cx.cloud" party="hurleypiano"></call-us-selector>
    <script defer src="https://downloads-global.3cx.com/downloads/livechatandtalk/v1/callus.js" id="tcx-callus-js" charset="utf-8"></script>

    <!-- UserWay widget script for enhancing website accessibility. The data-account attribute links to a specific UserWay account for customization -->
    <script src="https://cdn.userway.org/widget.js" data-account="rmm88qREWe"></script>

</body>
</html>
