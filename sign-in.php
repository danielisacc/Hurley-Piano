<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hurley Piano Sign-In</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php include("header.html"); ?>
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
    <?php include("footer.html"); ?>
    <script src="script.js"></script> 
</body>
</html>
<?php

include_once 'database.php';
include_once 'db_script.php';
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    user_signin_validation($conn);
}

mysqli_close($conn);

?>