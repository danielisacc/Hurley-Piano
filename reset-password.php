<?php
// include the variables from the config file
include "./scripts/config.php";

// establish a database connection
require $scripts . "database.php";

// Retrieve the token variable from the header
$token = $_GET["token"];

// Generate a token hash from the token to compare to db hash
$token_hash = hash("sha256", $token);

$mysqli = $conn;

$sql = "SELECT * FROM parent_users WHERE reset_token_hash = ?";

$stmt = $mysqli->prepare($sql);
$stmt->bind_param("s", $token_hash);

$stmt->execute();

$result = $stmt->get_result();
$user = $result->fetch_assoc();

// If there is no user with the hash used in the URL, kill the page
if ($user === null) {
    die("token not found");
}

// If the users hash has expired kill the page
if (strtotime($user["reset_token_expires_at"]) <= time()) {
    die("token has expired");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Reset</title>
    <link rel="stylesheet" href="<?= $styles ?>styles.css">
</head>
<body>
    <main>
        <div class="tile signin-form">
            <h1>Reset Password</h1>
            <p class="error" id="error"></p>
            <form action="<?php htmlspecialchars($_SERVER['PHP_SELF'])?>" method="POST">

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

                    <input type="submit" value="Reset Password">
            </form>
            <script src="<?= $script ?>register_script.js"></script>
        </div>
    </main>
</body>
</html>

<?php 
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);
    $password_conf = filter_input(INPUT_POST, "password-conf", FILTER_SANITIZE_SPECIAL_CHARS);

    if (empty($password)) {
        echo"<script>
                        document.getElementById('error').insertAdjacentHTML('beforeend', '😨 Password Not Entered');
                    </script>";
    }
    else if (empty($password_conf)){
        echo"<script>
                        document.getElementById('error').insertAdjacentHTML('beforeend', '😨 Password Confirmation Not Entered');
                    </script>";
    }
    else if ($password != $password_conf) {
        echo"<script>
                    document.getElementById('error').insertAdjacentHTML('beforeend', '😨 Confirm Password Not Matching');
                </script>";
    }
    else if ($_COOKIE['valid_password'] != 'true') {
        echo"<script>
                    document.getElementById('error').insertAdjacentHTML('beforeend', '😨 Password Doesn't Meet Requirements');
                </script>";
    }
    else {
        $hash = password_hash($password, PASSWORD_DEFAULT);

        $sql = "UPDATE parent_users
                SET password = ?,
                    reset_token_hash = NULL,
                    reset_token_expires_at = NULL
                WHERE parent_id = ?";
        $stmt = $mysqli->prepare($sql);
        $stmt->bind_param("ss", $hash, $user["parent_id"]);
        $stmt->execute();

        echo"<script>
                    document.getElementById('error').insertAdjacentHTML('beforeend', `Your Password has been Updated. <a href='sign-in.php'>Sign In</a>`);
                </script>";
    }
}

?>