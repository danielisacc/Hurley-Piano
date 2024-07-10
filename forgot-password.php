<?php
// Filepath variables
$header = "header.html";
$footer = "footer.html";
$styles = "./styles/styles.css";
$signin = "";
$php_script = "./scripts/";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <link rel="stylesheet" href="<?= $styles ?>">
</head>
<body>
    <?php include($header) ?>
    <main>
    <h2 style="margin-top: 0px;">Forgot Password</h2>
        <div class="tile signin-form">
            <form action="forgot-password.php" method="post">
                <h2 style="margin-bottom: 50px;">Recovery Email</h2>
                <p id="error"></p>
                <input type="email" name="email" id="email" placeholder="Your Recovery Email...">
                <input type="submit" name="submit" value="Send Recovery Email">
            </form>
        </div>
    </main>
</body>
</html>

<?php

    include $php_script . "database.php";
    include $php_script . "db_script.php";
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        forgot_pass_token_creation($conn);
    }
    mysqli_close($conn);
?>