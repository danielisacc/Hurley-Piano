<?php
include "./scripts/config.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hurley Piano Sign-In</title>
    <link rel="icon" type="image/png" href="<?= $imgs ?>PianoLogo7.png">
    <link rel="stylesheet" href="<?= $styles ?>styles.css">
</head>
<body>
    <?php include($html . "header.html"); ?>
    <main>
    <!-- Main content goes here -->
        <!-- Hero Section  -->
        <div class="hero-image">
            <div class="hero-text">
                <h1>Teaching<br>Neurodiverse Kids<br>To Play Piano</h1>
            </div>
            <div class="hero-buttons">
            <a href="https://calendly.com/richardhurley-hurleypiano/30min" class="button book-consultation">Book Free Consultation</a> 
                <a class=" email-button button" href = "mailto: info@hurleypiano.com">Send Us Email</a>
            </div>
        </div>


        <!-- Buissiness Statistics Section -->
        <div class="stats-block">
            <div class="stat">
                <h2>15</h2>
                <p>Years in<br>Operation</p>
            </div>
            <div class="stat">
                <h2>400+</h2>
                <p>Students</p>
            </div>
            <div class="stat">
                <h2>22,000</h2>
                <p>Classes<br>Taught</p>
            </div>
            <div class="stat">
                <h2>55</h2>
                <p>Events<br>Held</p>
            </div>
        </div>

        <!-- 2 -->
        <h2>What People Say<br>About Us</h2>
        <div class="banner" style="
                --width: 400px;
                --height: 460;
                --quantity: 4;
                --time-running: 15s;
            ">
            <div class="list">
                <div class="tile testimonial" style="--position: 1">
                    <p>“Richard Hurley is brilliant when it comes to teaching children and young adults 
                        on the autism spectrum. What impresses me most about Richard is his calm, even demeanor. He has a real ability in reading the child and where they are in the moment —from moment to moment at times. I highly recommend Richard Hurley and his style of piano teaching to those living with Autism and their family.”</p>
                        <div class="star-rating">
                            <img src="<?= $imgs?>purple-star.png" alt="Star">
                        </div>
                    <h2>ANGELA R BALMER</h2>
                    <h3>OCCUPATIONAL THERAPIST</h3>
                </div>
                <div class="tile testimonial" style="--position: 2">
                    <p>“Richard Hurley&rsquo;s approach to music instruction emphasize the collaboration with parents and other professionals to deliver a program of instruction that is consistent and highly individualized to meet the needs of each learner”</p>
                    <div class="star-rating">
                        <img src="<?= $imgs ?>purple-star.png" alt="Star">
                    </div>
                    <h2>LAURA B MOON</h2>
                    <h3>KTL BEHAVIORAL THERAPY AND CONSULTATION</h3>
                </div>
                <div class="tile testimonial" style="--position: 3">
                    <p>“Richard&rsquo;s ability to adapt and grow with a student has helped to nurture and bring out incredible talent"</p>
                    <div class="star-rating">
                        <img src="<?= $imgs ?>purple-star.png" alt="Star">
                    </div>
                    <h2>LAUREN DOOLEY</h2> 
                    <h3>BOARD CERTIFIED BEHAVIOR ANALYST</h3>
                </div>
                <div class="tile testimonial"  style="--position: 4">
                    <p>“Hurley Piano&rsquo;s approach incorporates a variety of strategies including the use of current technology. Hurley Piano is open to work collaboratively with other professionals with kids with ASD.”</p>
                    <div class="star-rating">
                        <img src="<?= $imgs ?>purple-star.png" alt="Star">
                    </div>
                    <h2>CHRISTINE GAHARAN</h2>
                    <h3>OCCUPATIONAL THERAPIST</h3>
                </div>
            </div>
        </div>

        <h2> Why Hurley Piano?</h2>
        <h5> We offer unique music lessons</h5>

        <div class="centered-tile-double">
            <img src="img/why-hurley-1.png" 
            alt="free book. Teach your toddler music even though you never learned music yourself. Get your FREE starter book and teach your
            little one music most efficiently. innovative ideas. Innovation is synonymous with Hurley Piano because what others have failed to think of, We have already made standard.">
            <img src="img/why-hurley-2.png" 
            alt="video lessons. We’re on a mission to bring music into more homes and communities around the world. Everyone should have access to music education.innovative ideas. Innovation is synonymous with Hurley Piano because what others have failed to think of, We have already made standard.">
            <img src="img/why-hurley-3.png" 
            alt="interactive games. Enhance music theory skills through our engaging online games, improving rhythm, note recognition, sight reading, and more. practice tools. Practice sessions provide step-by-step instructions between video lessons, with recorded audio tracks for a real band experience.">
        </div>
        
        <h2>Our Interactive Games</h2>
        <div class="tile" style="--color: radial-gradient(rgba(124, 186, 232,0.7), rgba(250,128,114,0.2))">
            <h2>GOJUN'S ADVENTURE</h2>
            <img src="<?= $imgs ?>gojuns-home.png" 
            alt="gojuns adventure game">
            <p>In This Thrilling And Strategic Board Game, You Have The Option To Play Solo Or Challenge A Friend To A Friendly Match.
                 Roll The Dice And Navigate Through The Board, Using Special Abilities Like JumpForwards And Knockback To Outsmart Your Opponent.</p>
        </div>
        <div class="tile" style="--color:  radial-gradient(rgba(0,127,255,0.1), rgba(124, 186, 232,0.6));">
            <h2>CHIME CANDY 1</h2>
            <img src="<?= $imgs ?>chime-candy.jpg" 
            alt="chime candy game">
            <p>In This Game Players Guide Musical Fish Across The Screen Into Designated Note Slots That Correspond With Piano Sheet Music.
                Each Successful Placement Emits The Sound Of A Musical Note</p>
            <a href="#" class="button play-now">Play Now</a>
        </div>

        <h2>About Us</h2>
        <div class="tile" style="background: url('img/About-Img.webp');">
            <div class="about-us">
                <p>Hurley Piano is a leading piano methodology to the special needs community. Richard Hurley has developed a highly regarded Black Keys Exercises designed to introduce the world of the keyboard to the most challenging of special need students. Based in Austin Texas, a city that is a hub of special needs innovation, Hurley Piano has drawn upon the expertise of the city’s leading special needs researchers to test and challenge this methodology. Sign up for free introductory videos and blogs, follow the video based conversation around the challenges facing our special needs kiddos today.</p>
            </div>
       </div>

        <div class="centered-tile-double">
            <img src="<?= $imgs ?>special-needs-student.png" 
            alt="Specail needs students include ADHD, Asperger Syndrome, Autism, Down Syndrome, Dyscalculia, Dyselexia, Sensory Processing Disorder">
        </div>

    </main>
    <?php include $html . "footer.html" ?>


    <!--Use the below code snippet to provide real time updates to the live chat plugin without the need of copying and paste each time to your website when changes are made via PBX-->
<call-us-selector phonesystem-url="https://1888.3cx.cloud" party="hurleypiano"></call-us-selector>
<script defer src="https://downloads-global.3cx.com/downloads/livechatandtalk/v1/callus.js" id="tcx-callus-js" charset="utf-8"></script>
    
<!-- UserWay widget script  -->
<script src="https://cdn.userway.org/widget.js" data-account="rmm88qREWe"></script>

</body>
</html>
