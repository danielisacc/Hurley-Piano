<?php
include "./scripts/config.php";

$error_messages = array(
    "empty_email" => "⚠️ Please Enter an Email",
    "empty_password" => "⚠️ Please Enter a Password",
    "incorrect_combination" => "😨 Incorrect Email or Password!",
    "password_reset" => "Password Reset Link Sent to Email"
);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hurley Piano Sign-In</title>
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
</body>
</html>