<?php
require "config.php";
require "database.php";
$mysqli = $conn;

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // Create Sanitized Variables
    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
    $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);

    $error_messages = array(
        "empty_email" => "⚠️ Please Enter an Email",
        "empty_password" => "⚠️ Please Enter a Password",
        "incorrect_combination" => "😨 Incorrect Email or Password!"
    );

    // If the email field is empty send warning
    if (empty($email)) {
        header("Location: ../sign-in.php?error=empty_email");
        exit();
    }
    // If the password field is empty send warning
    else if (empty($password)) {
        header("Location: ../sign-in.php?error=empty_password");
        exit();
    }
    // If all fields filled out begin query
    else {
        $sql = "SELECT * FROM parent_users WHERE email = ?;";
        $stmt = $mysqli->prepare($sql);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();
        $user = $result->fetch_assoc();

        if($mysqli->affected_rows) {
            $hash = $user["password"];
            if (password_verify($password, $hash)) {
                require "sessions.php";
                $_SESSION["parent_id"] = $user["parent_id"];
                header("Location: ../parent-portal.php");
            }
            else {
                header("Location: ../sign-in.php?error=incorrect_combination");
                exit();
            }
        }
        else {
            header("Location: ../sign-in.php?error=incorrect_combination");
            exit();
        }    
    }
}