<?php
// Includes the config file that contains variables used in this page
include "./scripts/config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <link rel="stylesheet" href="<?= $styles ?>styles.css">
</head>
<body>
    <!-- includes the header page -->
    <?php include $html . "header.html" ?>
    <main>
    <h2 style="margin-top: 0px;">Forgot Password</h2>
        <div class="tile signin-form">
            <form action="./scripts/forgot_password_token.php" method="post">
                <h2 style="margin-bottom: 50px;">Recovery Email</h2>
                <p id="error"></p>
                <input type="email" name="email" id="email" placeholder="Your Recovery Email...">
                <input type="submit" name="submit" value="Send Recovery Email">
            </form>
        </div>
    </main>
</body>
</html>
