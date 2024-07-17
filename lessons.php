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
            <div class="button-container">
                <a href="https://cal.com/thienkim-le" class="button book-consultation">Book Free Consultation</a> 
            </div>
        </div>

        <div class="container">
            <div class="testimonial-box">
                <img src="img/music-lessons/piano.png" alt="Teaching piano to a child">
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
                <img src="img/music-lessons/drums.png" alt="child playing drums happily">
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
                           
            <!-- <form action="https://api.web3forms.com/submit" method="post" id="getyourfreebook" novalidate class="inquiry-form">
            <input type="hidden" name="access_key" value="49674ab5-11eb-4012-bf3e-19b0883c1beb">  -->
                <form action="getyourfreebook.php" method="post" id="getyourfreebook" novalidate class="inquiry-form">
                    <label for="first_name">First Name</label> <br>
                    <input type="text" id="first_name" name="first_name" placeholder="Hurley"><br>
                    
                    <label for="last_name">Last Name</label> <br>
                    <input type="text" id="last_name" name="last_name" placeholder="Piano"><br>
                 
                    <label for="phone">Phone</label> <br>
                    <input type="text" id="phone" name="phone" placeholder="Phone Number"><br>
                    
                    <label for="email">Email</label><br>
                    <input type="text" id="email" name="email" placeholder="you@email.com"><br>
                                                 
                    <button type="submit">SUBMIT</button>
                </form>
            </div>
        </div>
    </main>
    <?php include("footer.html"); ?>

    <!--Use the below code snippet to provide real time updates to the live chat plugin without the need of copying and paste each time to your website when changes are made via PBX-->
    <call-us-selector phonesystem-url="https://1861.3cx.cloud" party="thienkimle"></call-us-selector>

    <!--Incase you don't want real time updates to the live chat plugin when options are changed, use the below code snippet. Please note that each time you change the settings you will need to copy and paste the snippet code to your website--> 
    <!--<call-us 
    phonesystem-url="https://1861.3cx.cloud" 
    style="position:fixed;font-size:16px;line-height:17px;z-index: 99999;right: 0; bottom: 0;" 
    id="wp-live-chat-by-3CX" 
    minimized="true" 
    animation-style="noanimation" 
    party="thienkimle" 
    minimized-style="bubbleright" 
    allow-call="true" 
    allow-video="false" 
    allow-soundnotifications="true" 
    enable-mute="true" 
    enable-onmobile="true" 
    offline-enabled="true" 
    enable="true" 
    ignore-queueownership="false" 
    authentication="none" 
    show-operator-actual-name="true" 
    aknowledge-received="true" 
    gdpr-enabled="false" 
    message-userinfo-format="both" 
    message-dateformat="both" 
    lang="browser" 
    button-icon-type="default" 
    greeting-visibility="none" 
    greeting-offline-visibility="none" 
    chat-delay="2000" 
    enable-direct-call="true" 
    enable-ga="false" 
    ></call-us>--> 
    <script defer src="https://downloads-global.3cx.com/downloads/livechatandtalk/v1/callus.js" id="tcx-callus-js" charset="utf-8"></script>

    <!-- UserWay widget script  -->
    <script src="https://cdn.userway.org/widget.js" data-account="g3JuQiTzQN"></script>
   
</body>
</html>
