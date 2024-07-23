<?php
include "./scripts/config.php";

$empty_messages = array('first-name' => '😨 First Name Not Entered',
                            'last-name' => '😨 Last Name Not Entered',
                            'email' => '😨 Email Not Entered',
                            'password' => '😨 Password Not Entered',
                            'password-conf' => '😨 Confirm Password Not Entered',
                            'country' => '😨 Country Not Entered',
                            'birth' => '😨 Birthday Not Entered');

$error_messages = array('passwords_not_matching' => '😨 Password & Confimation Not Matching',
                            'min_reqs_unmet' => '😨 Minimum Password Requirements Unmet',
                            'empty_field' => "");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hurley Piano Register</title>
    <link rel="stylesheet" href="<?= $styles ?>styles.css">
</head>
<body>
    <?php include($html . "header.html"); ?>
    <main>
        <div class="tile signin-form signup">
            <h1>Parent Registration</h1>
            <p class="error" id="error">
                <?php

                if (isset($_GET["error"])) {
                    if ($_GET["error"] === "empty_field") {
                        echo $empty_messages[$_GET["empty"]];
                    }
                    else {
                        echo $error_messages[$_GET["error"]];
                    }
                }

                ?>
            </p>
            <form action="./scripts/add_user.php" method="POST">
                    <div class="form-inner">
                        <label for="first-name">First Name</label>
                        <input type="text" id="first-name" name="first-name">
                    </div>
                    <div class="form-inner">
                        <label for="last-name">Last Name</label>
                        <input type="text" id="last-name" name="last-name">
                    </div>

                    <div class="form-inner">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email">
                    </div>
                
                    <div class="form-inner">
                        <label for="password">Password</label>
                        <input type="password" id="register-pass" name="password">
                    </div>
                    <div class="pass-req" id="pass-req">
                         <p><span id="length"></span> 8 Characters</p>
                         <p><span id="upper"></span> 1 Uppercase</p>
                         <p><span id="lower"></span> 1 Lowercase</p>
                         <p><span id="number"></span> 1 Number</p>
                         <p><span id="symbol"></span> 1 Symbol</p>
                     </div>
                    <div class="form-inner">
                        <label for="password-conf">Confirm Password</label>
                        <p id="conf-match"></p>
                        <input type="password" id="password-conf" name="password-conf">
                    </div>
                    <div class="form-inner">
                        <label for="birth">Date of Birth</label>
                        <input type="date" id="birth" name="birth">
                    </div>

                    <div class="form-inner">
                        <label for="country">Country</label>
                        <!-- <input type="" id="country" name="country"> -->
                        <select id="country" name="country">
                            <div id="countries"></div>
                        </select>
                    </div>
                    <input type="submit" value="Sign Up">
            </form>
        </div>
        <p class="centered-text nowrap-text">Already have an account?<br><a href="sign-in.php">Sign In</a></p>
    </main>
    <?php include($html . "footer.html"); ?>
    <script src="<?= $scripts ?>register_script.js"></script> 
</body>
</html>