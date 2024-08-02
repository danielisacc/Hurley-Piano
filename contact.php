<?php
// Include the configuration file that contains common settings, paths, and other configurations.
// This file likely defines variables such as $styles and $html used throughout the site.
include "./scripts/config.php";

// Define an array of output messages for different form submission scenarios.
// These messages are used to provide feedback to the user after submitting the contact form.
$output_messages = array(
    "success" => "Thank you! Our staff will be in touch with you soon.",
    "empty" => "Missing an Input, please fill all fields.",
    "email" => "Invalid Email, please input a different email.",
    "database" => "Database Error, please try again later."
);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Define the character encoding for the document to ensure proper display of text -->
    <meta charset="UTF-8">
    
    <!-- Set the viewport for responsive web design, making the website adaptable to different screen sizes -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Set the title of the webpage, displayed in the browser's title bar and tab -->
    <title>Hurley Piano Website - Contact Us</title>
    
    <!-- Link the favicon for the website, an icon that appears in the browser tab -->
    <link rel="icon" type="image/png" href="img/PianoLogo7.png">
    
    <!-- Link to the main stylesheet for the "Contact Us" page, using the base path defined in config.php -->
    <link rel="stylesheet" href="<?= $styles ?>contact.css">
</head>
<body>
    <!-- Include the header HTML, which typically contains navigation, logo, and other header elements -->
    <?php include($html . "header.html"); ?>
    
    <main>
        <!-- Main content area starts here -->
        <div class="ContactUs">
            <div class="title">
                <!-- Title or heading for the Contact Us page -->
                <h2><b>Reach Out to Us for Any Inquiries or Assistance</b></h2>
            </div>
            <div class="box">
                <!-- Contact Form Section -->
                <div class="contact form">
                    <h3>Send a Message</h3>
                    
                    <!-- Display a success or error message based on the form submission status.
                         The message is retrieved from the $output_messages array based on the "output" parameter in the URL. -->
                    <p class="success-message"><b><i>
                        <?php if (isset($_GET["output"])) echo $output_messages[$_GET["output"]]; ?>
                    </i></b></p>
                    
                    <!-- Contact form for users to send a message. The form data is submitted via POST method
                         to "process-contactus.php" for handling. The form includes fields for first name, last name,
                         email, phone number, and message. -->
                    <form action="process-contactus.php" method="post" id="contactus" novalidate class="inquiry-form">
                        <div class="formBox">
                            <div class="row50">
                                <div class="inputBox">
                                    <span>First Name</span>
                                    <input type="text" name="first_name" placeholder="Hurley">
                                </div>
                                <div class="inputBox">
                                    <span>Email</span>
                                    <input type="text" name="email" placeholder="you@email.com">
                                </div>
                            </div>
                            <div class="row50">
                                <div class="inputBox">
                                    <span>Last Name</span>
                                    <input type="text" name="last_name" placeholder="Piano">
                                </div>
                                <div class="inputBox">
                                    <span>Mobile</span>
                                    <input type="text" name="phone" placeholder="Phone">
                                </div>
                            </div>
                            <div class="row100">
                                <div class="inputBox">
                                    <span>Message</span>
                                    <textarea name="comment" placeholder="Hi..."></textarea>
                                </div>
                            </div>
                            <div class="row100">
                                <div class="inputBox">
                                    <input type="submit" name="submit" value="Send">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                
                <!-- Contact Information Section -->
                <div class="contact info">
                    <h3>Contact Info</h3>
                    <div class="infoBox">
                        <div>
                            <!-- Icon and address of the business location -->
                            <span><ion-icon name="location"></ion-icon></span>
                            <p>5209 Duval Rd, Austin Texas 78727</p>
                        </div>
                        <div>
                            <!-- Icon and email address of the business -->
                            <span><ion-icon name="mail"></ion-icon></span>
                            <a href="mailto:richardhurley@hurleypiano.com">richardhurley@hurleypiano.com</a>
                        </div>
                        <div>
                            <!-- Icon and phone number of the business -->
                            <span><ion-icon name="call"></ion-icon></span>
                            <a href="tel:+16315235853">(631) 523-5853</a>
                        </div>
                        <!-- Social Media Links -->
                        <ul class="sci">
                            <li><a href="#"><ion-icon name="logo-facebook"></ion-icon></a></li>
                            <li><a href="#"><ion-icon name="logo-twitter"></ion-icon></a></li>
                            <li><a href="#"><ion-icon name="logo-linkedin"></ion-icon></a></li>
                            <li><a href="#"><ion-icon name="logo-instagram"></ion-icon></a></li>
                        </ul>
                    </div>
                </div>
                
                <!-- Google Map Embed Section -->
                <div class="contact map">
                    <!-- Embed a Google Map showing the business location -->
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3440.684819212167!2d-97.74425372393381!3d30.416683000837427!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8644ccf580ab7e51%3A0x1174a045fff372d0!2s5209%20Duval%20Rd%2C%20Austin%2C%20TX%2078727!5e0!3m2!1sen!2sus!4v1722054751373!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </main>

    <!-- Include the footer HTML, containing additional navigation, contact information, or other footer elements -->
    <?php include($html . "footer.html"); ?>

    <!-- Custom element for integrating a live chat feature.
         The 'phonesystem-url' attribute specifies the URL for the phone system, and 'party' specifies the user or business identity. -->
    <call-us-selector phonesystem-url="https://1861.3cx.cloud" party="thienkimle"></call-us-selector>

    <!-- External JavaScript file for the live chat functionality, deferred to load after the main content -->
    <script defer src="https://downloads-global.3cx.com/downloads/livechatandtalk/v1/callus.js" id="tcx-callus-js" charset="utf-8"></script>

    <!-- UserWay widget script for enhancing website accessibility. The data-account attribute links to a specific UserWay account for customization -->
    <script src="https://cdn.userway.org/widget.js" data-account="rmm88qREWe"></script>

    <!-- Ionicons for rendering icons, loaded as ES6 modules if supported, otherwise falls back to a script for older browsers -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>
