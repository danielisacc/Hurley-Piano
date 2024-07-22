
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hurley Piano Website - Contact Us</title>
    <link rel="icon" type="image/png" href="img/PianoLogo7.png">
    <link rel="stylesheet" href="contact.css">
   
</head>
<body>
    <?php include("./html/header.html"); ?>
    <main>


    <div class="container">
                
        <div class="contact-us">
            <h2>Contact Us</h2>
            <h3>Reach Out to Us for Any Inquiries or Assistance</h3>
            <?php if (isset($_GET['success']) && $_GET['success'] == '1') : ?>
                <p class="success-message"><b><i>Thank you! Our staff will be in touch with you soon.</i></b></p>
                <script>
                    document.addEventListener("DOMContentLoaded", function() {
                        document.getElementById('contactus').reset();
                    });
                </script>
            <?php endif; ?>
            <form action="contactus.php" method="post" id="contactus" novalidate class="inquiry-form">
                <label for="first_name">First Name</label>
                <input type="text" id="first_name" name="first_name" placeholder="Hurley" required>
                
                <label for="last_name">Last Name</label>
                <input type="text" id="last_name" name="last_name" placeholder="Piano" required>
                
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="you@email.com" required>
                
                <label for="phone">Phone</label>
                <input type="tel" id="phone" name="phone" placeholder="Phone" required>

                <label for="comment">Comment</label>
                <input type="text" id="comment" name="comment" placeholder="Enter your text here" required>

                <button type="submit" name="submit">Submit</button>

            
            </form>
        </div>
        </div>


    </main>
    
<<?php include("./html/footer.html") ?>

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
<script src="https://cdn.userway.org/widget.js" data-account="g3JuQiTzQN"></script>

</body>
</html>
