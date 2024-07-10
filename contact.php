<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hurley Piano Website - Contact</title>
    <link rel="icon" type="image/png" href="../img/favicon.png">
    <link rel="stylesheet" href="contact.css">
</head>
<body>
    <?php include("header.html"); ?>
    <main>
        <div class="centered-tile-full-width">
            <h2>Book Your First Free Piano Lesson</h2>
            <form action="process-bookyourfirstfreepianolesson.php" method="post" id="bookyourfirstlesson" novalidate class="inquiry-form">
                <label for="first-name">First Name</label>
                <input type="text" id="first-name" name="first-name" placeholder="Hurley">
                
                <label for="last-name">Last Name</label>
                <input type="text" id="last-name" name="last-name" placeholder="Piano">
                
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="you@email.com">
                
                <label for="phone">Phone</label>
                <input type="tel" id="phone" name="phone" placeholder="Phone">
                
                <button type="submit" name="submit">Submit</button>
            </form>
        </div>
    </main>
    

<<?php include("footer.html") ?>

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

<!-- UserWay widget script 
<script src="https://cdn.userway.org/widget.js" data-account="g3JuQiTzQN"></script>
-->
</body>
</html>
