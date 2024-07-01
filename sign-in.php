<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hurley Piano Sign-In</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <main>
    <?php include("header.html"); ?>
    <div class="sign-in">
        <form action="index.php" method="post">
            <div class="set">
                <label for="email">Email </label>
                <input type="email" name="email">
            </div>
            <div class="set">
                <label for="password">Password </label>
                <input type="password" name="password">
            </div>
            <input type="submit" value="sign In" name="submit">
        </form>
    </div>
    </main>
    <footer></footer>
    <script src="script.js"></script> 
    <?php include("footer.html") ?>
</body>
</html>

<?php
    if (isset($_POST["submit"])) {
        // Sanitize Input
        $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
        $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);
        // Validate Input
        $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
        
        if (empty($email)) {
            echo "Email is Empty";
        }
        elseif (empty($password)) {
            echo "Password is Empty";
        }
        else {
            echo "Success!";
        }
    }
?>