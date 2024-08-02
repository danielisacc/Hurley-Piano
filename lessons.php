<?php
// Include the configuration file located in the scripts directory.
// This file typically contains database connection details, constants, and other global settings.
include "./scripts/config.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Specify the character encoding for the HTML document -->
    <meta charset="UTF-8">
    
    <!-- Ensure the website is responsive and scales properly on different devices -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Set the title of the webpage that appears in the browser tab -->
    <title>Hurley Piano Website - Lessons</title>
    
    <!-- Link to the website's favicon, a small icon displayed in the browser tab -->
    <link rel="icon" type="image/png" href="img/PianoLogo7.png">
    
    <!-- Link to the stylesheet for the lessons section. 
         The $styles variable, defined in config.php, contains the base path for stylesheets. -->
    <link rel="stylesheet" href="<?= $styles ?>lessons.css">
    
    <!-- Link to the stylesheet for the about section, allowing for separate styling -->
    <link rel="stylesheet" href="<?= $styles ?>about.css">
</head>
<body>
    <!-- Include the header content, which is typically a consistent part of the website.
         This might include the logo, navigation menu, and other elements present on all pages. -->
    <?php include($html . "header.html"); ?>

    <main>
        <!-- Main content area begins here -->
        <div class="centered-tile-full-width-hero">
            <!-- Display a hero image at the top of the main content area -->
            <img src="<?= $imgs ?>music-lessons/hero-img.png" alt="Teaching musical instruments to Neurodiverse Kids" class="hero-photo">
            <!-- Hero heading highlighting the focus on teaching musical instruments to neurodiverse children -->
            <h1>Teaching Musical<br> Instruments to <br> <i>Neurodiverse</i> Kids</h1>
            <div class="button-container">
                <!-- Button linking to a Calendly page for booking a free consultation. 
                     The button has specific styling through the class 'book-consultation'. -->
                <a href="https://calendly.com/richardhurley-hurleypiano/30min" class="button book-consultation">Book Free Consultation</a>
            </div>
        </div>

        <div class="container">
            <!-- Testimonial box section for piano lessons, describing the benefits and features of piano lessons for neurodiverse kids -->
            <div class="testimonial-box">
                <!-- Image representing piano lessons, with an appropriate alt text for accessibility -->
                <img src="<?= $imgs ?>music-lessons/piano.png" alt="Teaching piano to a child">
                <!-- Subheading with emphasized words to highlight the specific focus on teaching piano to neurodiverse kids -->
                <h4>Teaching <i>Piano</i> to <i>Neurodiverse</i> kids</h4>
                <!-- Paragraph detailing the benefits of piano lessons for neurodiverse children, including cognitive, emotional, and social benefits -->
                <p>The Piano serves as a powerful educational tool for neurodiverse children. Its structured yet creative nature aids in cognitive development, improving focus, memory, and problem-solving skills. For neurodiverse kids, it offers a multisensory experience, enhancing sensory processing and coordination. Moreover, music fosters emotional expression and regulation, crucial for those with neurodivergent conditions like autism or ADHD. Through music education, these children find avenues for self-expression, confidence-building, and social interaction, promoting holistic development and inclusivity.</p>
                <h5>Benefits</h5>
                <!-- List of specific benefits associated with piano lessons -->
                <p>Enhanced Cognitive Development<br>
                   Emotional Regulation<br>
                   Improved Fine Motor Skills<br>
                   Boosted Self-Esteem and Confidence<br>
                   Enhanced Social Skills
                </p>           
            </div>

            <!-- Testimonial box section for drum lessons, highlighting similar benefits specific to drumming -->
            <div class="testimonial-box">
                <!-- Image representing drum lessons, with descriptive alt text for accessibility -->
                <img src="<?= $imgs ?>music-lessons/drums.png" alt="child playing drums happily">
                <!-- Subheading emphasizing the focus on teaching drums to neurodiverse children -->
                <h4>Teaching <i>Drums</i> to <i>Neurodiverse</i> kids</h4>
                <!-- Paragraph explaining the benefits of drum lessons for neurodiverse children, including sensory, cognitive, and emotional benefits -->
                <p>Drum lessons provide numerous benefits for neurodiverse children. They enhance sensory integration, promote rhythmic cognition, foster emotional expression, and encourage social interaction. Additionally, drumming builds confidence and serves as a therapeutic outlet. The rhythmic nature of drumming effectively engages neurodiverse children, aiding in their holistic development and overall well-being. These lessons not only support their educational growth but also contribute significantly to their emotional and social skills, making drumming an invaluable tool in neurodiverse education.</p>
                <h5>Benefits</h5>
                <!-- List of specific benefits related to drum lessons -->
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
            <!-- Section for promoting a free piano lesson -->
            <div class="Free-Piano-Lesson">
                <h2>Book Your <u>FREE</u> Lesson!</h2>
                <h4>Unlock Your Musical Potential with Expert Guidance!</h4>
                <!-- Display a success message if the 'success' query parameter is present and equals '1'.
                     This indicates that the form submission was successful. -->
                <?php if (isset($_GET['success']) && $_GET['success'] == '1') : ?>
                    <p class="success-message"><br><b><i>Thank you! Our staff will be in touch with you soon.</i></b></p>
                    <!-- JavaScript snippet to reset the form after a successful submission -->
                    <script>
                        document.addEventListener("DOMContentLoaded", function() {
                            document.getElementById('freelesson').reset();
                        });
                    </script>
                <?php endif; ?>
                <!-- Form for booking a free piano lesson, sending data to 'process-freelessons.php' via POST method -->
                <form action="./scripts/process-freelesson.php" method="post" id="freelesson" novalidate class="inquiry-form">
                    <label for="first_name">First Name</label>
                    <!-- Input field for the user's first name, required for submission -->
                    <input type="text" id="first_name" name="first_name" placeholder="Hurley" required>
                    
                    <label for="last_name">Last Name</label>
                    <!-- Input field for the user's last name, required for submission -->
                    <input type="text" id="last_name" name="last_name" placeholder="Piano" required>
                    
                    <label for="email">Email</label>
                    <!-- Input field for the user's email address, required for submission -->
                    <input type="email" id="email" name="email" placeholder="you@email.com" required>
                    
                    <label for="phone">Phone</label>
                    <!-- Input field for the user's phone number, required for submission -->
                    <input type="tel" id="phone" name="phone" placeholder="Phone" required>
                    
                    <!-- Submit button for the form -->
                    <button type="submit" name="submit">Submit</button>
                </form>
            </div>

            <!-- Section for promoting a free eBook offering -->
            <div class="Free-Book">
                <h2>Get Your <u>FREE</u> eBook!</h2>
                <h4>Teach your kiddios piano with no experience needed.</h4>
                <!-- Display a success message if the 'success' query parameter is present and equals '1'.
                     This indicates that the eBook request form submission was successful. -->
                <?php if (isset($_GET['success']) && $_GET['success'] == '1') : ?>
                    <p class="success-message"><br><b><i>Thank you! We have just emailed you the ebook.</i></b></p>
                    <!-- JavaScript snippet to reset the form after a successful submission -->
                    <script>
                        document.addEventListener("DOMContentLoaded", function() {
                            document.getElementById('freebook').reset();
                        });
                    </script>
                <?php endif; ?>  
                <!-- Form for requesting a free eBook, sending data to 'process-freebook.php' via POST method -->
                <form action="./scripts/process-freebook.php" method="post" id="freebook" novalidate class="inquiry-form">
                    <label for="first_name">First Name</label>
                    <!-- Input field for the user's first name, required for submission -->
                    <input type="text" id="first_name" name="first_name" placeholder="Hurley" required>
                    
                    <label for="last_name">Last Name</label>
                    <!-- Input field for the user's last name, required for submission -->
                    <input type="text" id="last_name" name="last_name" placeholder="Piano" required>
                 
                    <label for="email">Email</label>
                    <!-- Input field for the user's email address, required for submission -->
                    <input type="email" id="email" name="email" placeholder="you@email.com" required>
                    
                    <label for="phone">Phone</label>
                    <!-- Input field for the user's phone number, required for submission -->
                    <input type="tel" id="phone" name="phone" placeholder="Phone" required>
                                                                    
                    <!-- Submit button for the form -->
                    <button type="submit" name="submit">SUBMIT</button>
                </form>
                
            </div>
        </div>
    
    </main>
    <!-- Include the footer content, which generally contains additional navigation links, contact info, and other footer-specific elements -->
    <?php include $html . "footer.html"; ?>

    <!-- Custom element for a live chat feature, with attributes for the phone system URL and specific user party -->
    <call-us-selector phonesystem-url="https://1888.3cx.cloud" party="hurleypiano"></call-us-selector>
    <!-- External JavaScript file for the live chat functionality -->
    <script defer src="https://downloads-global.3cx.com/downloads/livechatandtalk/v1/callus.js" id="tcx-callus-js" charset="utf-8"></script>
    
    <!-- UserWay widget script for accessibility, loaded from an external source. 
         The data-account attribute uniquely identifies the UserWay account. -->
    <script src="https://cdn.userway.org/widget.js" data-account="rmm88qREWe"></script>
</body>
</html>
