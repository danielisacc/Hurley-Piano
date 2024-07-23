<?php
require "database.php";
require "email_script.php";
$mysqli = $conn;

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // Email variable creation
    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
    // Token creation
    $token = bin2hex(random_bytes(16));
    $token_hash = hash("sha256", $token);
    // Token expiration created
    $expiry = date("Y-m-d H:i:s", time() + 60 * 30);

    $sql = "UPDATE parent_users
            SET reset_token_hash = ?, 
                reset_token_expires_at = ?
            WHERE email = ?";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("sss", $token_hash, $expiry, $email);
    $stmt->execute();

    ////////////////////////////
    // ENTER THE WEBSITE URL BELOW
    $link = "https://localhost/Test-Website/reset-password.php?token=" . $token;
    /////////////////////////

    $message = "Click <a href='$link'>Here</a> to reset your password.";
    $subject = "Hurley Piano: Password Reset";
    $response = sendMail($email, $subject, $message, 0);
    header("Location: ../sign-in.php?error=password_reset");
            exit();
}