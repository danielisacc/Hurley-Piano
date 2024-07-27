<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get In Touch</title>
    <link rel="icon" type="image/png" href="img/PianoLogo7.png">
    <link rel="stylesheet" href="getintouch.css">
</head>
<body>
<?php include("header.html"); ?>
    <main>
        <div class="ContactUs">
            <div class="title">
                <h2>Get in Touch</h2>
            </div>
            <div class="box">
                <!-- Form -->
                <div class="contact form">
                    <h3>Send a Message</h3>
                    <?php if (isset($_GET['success']) && $_GET['success'] == '1') : ?>
                    <p class="success-message"><br><b><i>Thank you! We have just emailed you the ebook.</i></b></p>
                    <script>
                        document.addEventListener("DOMContentLoaded", function() {
                            document.getElementById('freebook').reset();
                        });
                    </script>
                <?php endif; ?>  
                <form action="contactus.php" method="post" id="contactus" novalidate class="inquiry-form">
                    <form>
                        <div class="formBox">
                            <div class="row50">
                                <div class="inputBox">
                                    <span>First Name</span>
                                    <input type="text" placeholder="Hurley">
                                </div>
                                <div class="inputBox">
                                    <span>Last Name</span>
                                    <input type="text" placeholder="Piano">
                                </div>
                            </div>
                            <div class="row50">
                                <div class="inputBox">
                                    <span>Email</span>
                                    <input type="text" placeholder="you@email.cm">
                                </div>
                                <div class="inputBox">
                                    <span>Mobile</span>
                                    <input type="text" placeholder="6315235853">
                                </div>
                            </div>
                            <div class="row100">
                                <div class="inputBox">
                                    <span>Message</span>
                                    <textarea placeholder="Hi..."></textarea>
                                </div>
                            </div>
                            <div class="row100">
                                <div class="inputBox">
                                    <input type="submit" value="Send">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- info box -->
                <div class="contact info">
                    <h3>Contact Info</h3>
                    <div class="infoBox">
                        <div>
                            <span><ion-icon name="location"></ion-icon></span>
                            <p>5209 Duval Rd, Austin Texas 78727</p>
                        </div>
                        <div>
                            <span><ion-icon name="mail"></ion-icon></span>
                            <a href="mailto:richardhurley@hurleypiano.com">richardhurley@hurleypiano.com</a>
                        </div>
                        <div>
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
                <!-- map -->
                <div class="contact map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3440.684819212167!2d-97.74425372393381!3d30.416683000837427!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8644ccf580ab7e51%3A0x1174a045fff372d0!2s5209%20Duval%20Rd%2C%20Austin%2C%20TX%2078727!5e0!3m2!1sen!2sus!4v1722054751373!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </main>

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

<!-- UserWay widget script -->
<script src="https://cdn.userway.org/widget.js" data-account="rmm88qREWe"></script>

<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>
