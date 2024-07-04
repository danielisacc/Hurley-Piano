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
                <a href="../html/members.html" style="text-decoration: none;">
                    <input type="submit" value="Sign In">
                </a>
            </form>
        </div>
        <p class="centered-text nowrap-text">Don't have an account?<br><a href="#">Sign Up</a></p> 
    </main>
    <?php include("footer.html"); ?>
    <script src="script.js"></script> 
</body>
</html>
<?php

include('database.php');

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
    $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);

    if (empty($email)) {
        echo"<script>
                document.getElementById('error').insertAdjacentHTML('beforeend', `⚠️ `);
                document.getElementById('error').insertAdjacentHTML('beforeend', `Please Enter an Email`);
            </script>";
    }
    else if (empty($password)) {
        echo"<script>
                document.getElementById('error').insertAdjacentHTML('beforeend', `⚠️ `);
                document.getElementById('error').insertAdjacentHTML('beforeend', `Please Enter a Password`);
            </script>";
    }
    else {
        compare_hash($conn, $email, $password);
    }
}

function compare_hash($conn, $email, $password) {
    $query = "SELECT password FROM parent_users WHERE email = '$email'";
    $result = mysqli_query($conn, $query);

    if(mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $hash = $row["password"];
        if (password_verify($password, $hash)) {
            ob_clean();
            echo"<script>window.location.replace('index.php')</script>";
            echo"<script>
                document.getElementById('error').insertAdjacentHTML('beforeend', `Success!`);
            </script>";
        }
        else {
            echo"<script>
                document.getElementById('error').insertAdjacentHTML('beforeend', `😨 `);
                document.getElementById('error').insertAdjacentHTML('beforeend', `Incorrect Email or Password!`);
            </script>";
        }
    }
    else {
        echo"<script>
                document.getElementById('error').insertAdjacentHTML('beforeend', `😨 `);
                document.getElementById('error').insertAdjacentHTML('beforeend', `Incorrect Email or Password!`);
            </script>";
    }
}

mysqli_close($conn);

?>