<?php
include "./scripts/config.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hurley Piano Website - Lessons</title>
    <link rel="icon" type="image/png" href="img/PianoLogo7.png">
    <link rel="stylesheet" href="<?= $styles ?>lessons.css">
    <link rel="stylesheet" href="<?= $styles ?>about.css">
</head>
<body>
<?php include($html . "header.html"); ?>
    <main>
        <!-- Main content goes here -->
        <div class="centered-tile-full-width-hero">
            <img src="<?= $imgs ?>music-lessons/hero-img.png" alt="Teaching musical instruments to Neurodiverse Kids" class="hero-photo">
            <h1>Teaching Musical<br> Instruments to <br> <i>Neurodiverse</i> Kids</h1>
            <div class="button-container">
                <a href="https://calendly.com/richardhurley-hurleypiano/30min" class="button book-consultation">Book Free Consultation</a> 
            </div>
        </div>

        <div class="container">
            <div class="testimonial-box">
                <img src="<?= $imgs ?>music-lessons/piano.png" alt="Teaching piano to a child">
                <h4>Teaching <i>Piano</i> to <i>Neurodiverse</i> kids</h4>
                <p>The Piano serves as a powerful educational tool for neurodiverse children. Its structured yet creative nature aids in cognitive development, improving focus, memory, and problem-solving skills. For neurodiverse kids, it offers a multisensory experience, enhancing sensory processing and coordination. Moreover, music fosters emotional expression and regulation, crucial for those with neurodivergent conditions like autism or ADHD. Through music education, these children find avenues for self-expression, confidence- building, and social interaction, promoting holistic development and inclusivity.”</p>
                <h5>Benefits</h5>
                <p>Enhanced Cognitive Development<br>
                   Emotional Regulation<br>
                   Improved Fine Motor Skills<br>
                   Boosted Self-Esteem and Confidence<br>
                   Enhanced Social Skills
                </p>           
            </div>

            <div class="testimonial-box">
                <img src="<?= $imgs ?>music-lessons/drums.png" alt="child playing drums happily">
                <h4>Teaching <i>Drums</i> to <i>Neurodiverse</i> kids</h4>
                <p>Drum lessons provide numerous benefits for neurodiverse children. They enhance sensory integration, promote rhythmic cognition, foster emotional expression, and encourage social interaction. 
                    Additionally, drumming builds confidence and serves as a therapeutic outlet. The rhythmic nature of drumming effectively engages neurodiverse children, aiding in their holistic development and overall well-being. 
                    These lessons not only support their educational growth but also contribute significantly to their emotional and social skills, making drumming an invaluable tool in neurodiverse education.
                </p>

                <h5>Benefits</h5>
                <p>Sensory Stimulation<br>
                   Rhythmic Cognition<br>
                   Emotional Expression<br>
                   Social Interaction<br>
                   Confidence Building<br>
                   Therapeutic Outlet
                </p>
            </div>
        </div>
    
        <div class="container">
            <div class="Free-Piano-Lesson">
                <h2>Book Your <u>FREE</u> Lesson!</h2>
                <h4>Unlock Your Musical Potential with Expert Guidance!</h4>
                <?php if (isset($_GET['success']) && $_GET['success'] == '1') : ?>
                    <p class="success-message"><br><b><i>Thank you! Our staff will be in touch with you soon.</i></b></p>
                    <script>
                        document.addEventListener("DOMContentLoaded", function() {
                            document.getElementById('freelesson').reset();
                        });
                    </script>
                <?php endif; ?>
                <form action="process-freelessons.php" method="post" id="freelesson" novalidate class="inquiry-form">
                    <label for="first_name">First Name</label>
                    <input type="text" id="first_name" name="first_name" placeholder="Hurley" required>
                    
                    <label for="last_name">Last Name</label>
                    <input type="text" id="last_name" name="last_name" placeholder="Piano" required>
                    
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="you@email.com" required>
                    
                    <label for="phone">Phone</label>
                    <input type="tel" id="phone" name="phone" placeholder="Phone" required>
                    
                    <button type="submit" name="submit">Submit</button>
                </form>
            </div>

            <div class="Free-Book">
                <h2>Get Your <u>FREE</u> eBook!</h2>
                <h4>Teach your kiddios piano with no experience needed.</h4>
                <?php if (isset($_GET['success']) && $_GET['success'] == '1') : ?>
                    <p class="success-message"><br><b><i>Thank you! We have just emailed you the ebook.</i></b></p>
                    <script>
                        document.addEventListener("DOMContentLoaded", function() {
                            document.getElementById('freebook').reset();
                        });
                    </script>
                <?php endif; ?>  
                <form action="process-freebook.php" method="post" id="freebook" novalidate class="inquiry-form">
                    <label for="first_name">First Name</label>
                    <input type="text" id="first_name" name="first_name" placeholder="Hurley" required>
                    
                    <label for="last_name">Last Name</label>
                    <input type="text" id="last_name" name="last_name" placeholder="Piano" required>
                 
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="you@email.com" required>
                    
                    <label for="phone">Phone</label>
                    <input type="tel" id="phone" name="phone" placeholder="Phone" required>
                                                                    
                    <button type="submit" name="submit">SUBMIT</button>
                </form>
                
            </div>
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