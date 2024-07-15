<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hurley Piano Website - Lessons</title>
    <link rel="icon" type="image/png" href="img/favicon.png">
    <link rel="stylesheet" href="lessons.css">
    <link rel="stylesheet" href="about.css">
</head>
<body>
    <?php include("header.html"); ?>
    <main>
        <!-- Main content goes here -->
        <div class="centered-tile-full-width-hero">
            <img src="img/music-lessons/hero-img.png" alt="Teaching musical instruments to Neurodiverse Kids" class="hero-photo">
            <h1>Teaching Musical<br> Intruments to <br> <i>Neurodiverse</i> Kids</h1>
        </div>

        <div class="container">
            <div class="testimonial-box">
                <img src="img/music-lessons/piano.png" alt="Teaching piano to a child">
                <h4>Teaching <i>Piano</i> to <i>Neurodiverse</i> kids</h4>
                <p>The Piano serves as a powerful educational tool for neurodiverse children. Its structured yet creative nature aids in cognitive development, improving focus, memory, and problem-solving skills. For neurodiverse kids, it offers a multisensory experience, enhancing sensory processing and coordination. Moreover, music fosters emotional expression and regulation, crucial for those with neurodivergent conditions like autism or ADHD. Through music education, these children find avenues for self-expression, confidence-building, and social interaction, promoting holistic development and inclusivity.”</p>
                <h5>Benefits</h5>
                <ul>
                    <li>Enhanced Cognitive Development</li>
                    <li>Emotional Regulation</li>
                    <li>Improved Fine Motor Skills</li>
                    <li>Boosted Self-Esteem and Confidence</li>
                    <li>Enhanced Social Skills</li>
                </ul>
            </div>
            <div class="testimonial-box">
                <img src="img/music-lessons/drums.png" alt="child playing drums happily">
                <h4>Teaching <i>Drums</i> to <i>Neurodiverse</i> kids</h4>
                <p>Drum lessons offer many diverse benefits in neurodiverse kids education. Drumming enhances sensory integration, promotes rhythmic cognition, fosters emotional expression, encourages social interaction, builds confidence, and provides a therapeutic outlet. Its rhythmic nature engages neurodiverse children effectively, aiding in their holistic development and overall well-being.</p>
                <h5>Benefits</h5>
                <ul>
                    <li>Sensory Stimulation</li>
                    <li>Rhythmic Cognition</li>
                    <li>Emotional Expression</li>
                    <li>Social Interaction</li>
                    <li>Confidence Building</li>
                    <li>Therapeutic Outlet</li>
                </ul>
            </div>
        </div>
        
        <div class="container">
            <div class="centered-tile-full-width">
                <h2>Get Your <u>FREE</u> Book!</h2>
                <p>Teach your toddler music even though you never learned music yourself. <br> 
                Get your <b>FREE</b> starter book and teach your little one music most efficiently.</p>
                <?php if (isset($_GET['success']) && $_GET['success'] == '1') : ?>
                    <p class="success-message">Form submitted successfully!</p>
                    <script>
                        document.addEventListener("DOMContentLoaded", function() {
                            document.getElementById('getyourfreebook').reset();
                        });
                    </script>
                <?php endif; ?>
                <form action="process-getyourfreebook.php" method="post" id="getyourfreebook" novalidate class="inquiry-form">
                    <label for="first-name">First Name</label> <br>
                    <input type="text" id="first-name" name="first-name" placeholder="Hurley"><br>
                    
                    <label for="last-name">Last Name</label> <br>
                    <input type="text" id="last-name" name="last-name" placeholder="Piano"><br>
                 
                    <label for="email">Email</label><br>
                    <input type="text" id="email" name="email" placeholder="you@email.com"><br>
                                                 
                    <button type="submit" name="submit">SUBMIT</button>
                </form>
            </div>
        </div>
    </main>
    <?php include("footer.html"); ?>

    <script defer src="https://downloads-global.3cx.com/downloads/livechatandtalk/v1/callus.js" id="tcx-callus-js" charset="utf-8"></script>
</body>
</html>