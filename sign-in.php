<?php
include "./scripts/config.php";

$error_messages = array(
    "empty_email" => "⚠️ Please Enter an Email",
    "empty_password" => "⚠️ Please Enter a Password",
    "incorrect_combination" => "😨 Incorrect Email or Password!",
    "password_reset" => "Password Reset Link Sent to Email"
);
?>
    <link rel="icon" type="image/png" href="img/PianoLogo7.png">
    <link rel="stylesheet" href="<?= $styles ?>styles.css">
</head>
<body>
    <?php include($html . "header.html"); ?>
    <main>
        <div class="tile signin-form">
            <h1>Sign In</h1>
            <p class="error" id="error"><?php if(isset($_GET["error"]))echo $error_messages[$_GET["error"]] ?></p>
            <form action="./scripts/user_validation.php" method="POST">
                <label for="email">Email</label>
                <input type="email" id="email" name="email">
                <label for="password">Password</label>
                <input type="password" id="password" name="password">
                <input type="submit" value="Sign In">
                <a style="font-size: small"  href="forgot-password.php">Forgot Password</a>
            </form>
        </div>
        <p class="centered-text nowrap-text">Don't have an account?<br><a href="register.php">Sign Up</a></p> 
    </main>
    <?php include($html . "footer.html"); ?>
    <script src="<?= $scripts ?>script.js"></script> 
    
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
<script src="https://cdn.userway.org/widget.js" data-account="rmm88qREWe"></script>
</body>
</html>
