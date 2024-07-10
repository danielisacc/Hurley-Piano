<?php
// Filepath variables
$header = "header.html";
$footer = "footer.html";
$styles = "./styles/styles.css";
$scripts = "./scripts/script.js";
$signin = "sign-in.php";

$php_script = "./scripts/";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hurley Piano Sign-In</title>
    <link rel="stylesheet" href="<?= $styles ?>">
</head>
<body>
    <?php include($header); ?>
    <main>
        <div class="tile signin-form">
            <h1>Sign In</h1>
            <p class="error" id="error"></p>
            <form action="<?php htmlspecialchars($_SERVER['PHP_SELF'])?>" method="POST">
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
    <?php include($footer); ?>
    <script src="<?= $scripts ?>"></script> 
</body>
</html>
<?php

include $php_script . 'database.php';
include $php_script . 'db_script.php';
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    user_signin_validation($conn);
}

mysqli_close($conn);

?>