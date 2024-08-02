<?php
include "./scripts/config.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hurley Piano Website - Blog</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="icon" type="image/png" href="<?= $imgs ?>PianoLogo7.png">
    <link rel="stylesheet" href="<?= $styles ?>blog.css">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">

</head>
<body>
<?php include($html . "header.html"); ?>
    <main>
        <!-- Main content goes here -->
        
        <div class="star-child">
            <br><br><br>
            <h2>
                Introduction Steps for Teaching Piano to Special Needs Kids <br><br>
            </h2>
            <a href="<?= $imgs ?>blog/steps-to-piano.png"></a> 
            <div class="button-container">
                <a href="https://finearts.tcu.edu/music/wp-content/uploads/sites/5/2021/03/2021_03_31_Hetherington-Lecture-Recital-Handout.pdf" class="button book-consultation">Read Article</a> 
            </div>
            
            <br><br><br><br><br>

        </div>

        <h2>Recent Blog Posts</h2>

        <div class="container">
            <a href="blog-posts/steinway-post.html"  class="testimonial-box">
            <img src="<?= $imgs ?>blog/concert.png" alt="orchestra">
            <h3>Special Needs Concert at Steinway</h2>
                <h4>by Richard Hurley | Feb 22,2024 | Music Blog</h4>
            </a>

            <a href="#"  class="testimonial-box">
                <img src="<?= $imgs ?>blog/concert.png" alt="orchestra">
                <h3> Top 5 Reasons why Special Needs Music Lessons Are Helpful</h2>
                    <h4>by Richard Hurley | Feb 22,2024 | Music Blog</h4>
            </a>

            <a href="#"  class="testimonial-box">
                <img src="<?= $imgs ?>blog/concert.png" alt="orchestra">
                <h3> Visual Strategies to Help Special Children Learn the Piano</h2>
                <h4>by Richard Hurley | Feb 22,2024 | Music Blog</h4>
            </a>
        </div>

        <div class="container">
            <a href="#" class="testimonial-box">
            <img src="<?= $imgs ?>blog/concert.png" alt="orchestra">
            <h3>Lillypond: Independent Data Blockchain</h2>
                <h4>by Richard Hurley | Feb 22,2024 | Music Blog</h4>
            </a>

            <a href="#" class="testimonial-box">
                <img src="<?= $imgs ?>blog/concert.png" alt="orchestra">
                <h3>This Year Autism and Music 2018</h2>
                    <h4>by Richard Hurley | Feb 22,2024 | Music Blog</h4>
            </a>  

            <a href="#" class="testimonial-box">
                <img src="<?= $imgs ?>blog/concert.png" alt="orchestra">
                <h3>This Year Autism and Music 2018</h2>
                <h4>by Richard Hurley | Feb 22,2024 | Music Blog</h4>
            </a>
        </div>
        <div class="container">
            <a href="#"  class="testimonial-box">
                <img src="<?= $imgs ?>blog/concert.png" alt="orchestra">
                <h3> Chime Candy</h2>
                <h4>by Richard Hurley | Feb 22,2024 | Music Blog</h4>

            </a>
        </div>        
    </main>
    
    <?php include $html . "footer.html" ?>

<!--Use the below code snippet to provide real time updates to the live chat plugin without the need of copying and paste each time to your website when changes are made via PBX-->
<call-us-selector phonesystem-url="https://1888.3cx.cloud" party="hurleypiano"></call-us-selector>
<script defer src="https://downloads-global.3cx.com/downloads/livechatandtalk/v1/callus.js" id="tcx-callus-js" charset="utf-8"></script>

<!-- UserWay widget script -->
<script src="https://cdn.userway.org/widget.js" data-account="rmm88qREWe"></script>

</body>
</html>