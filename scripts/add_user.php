<?php
require "database.php";
$mysqli = $conn;
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // Create Variables
    $first_name = filter_input(INPUT_POST, "first-name", FILTER_SANITIZE_SPECIAL_CHARS);
    $last_name = filter_input(INPUT_POST, "last-name", FILTER_SANITIZE_SPECIAL_CHARS);
    $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);
    $password_conf = filter_input(INPUT_POST, "password-conf", FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
    $country = filter_input(INPUT_POST, "country", FILTER_SANITIZE_SPECIAL_CHARS);
    $birth = filter_input(INPUT_POST, "birth", FILTER_SANITIZE_SPECIAL_CHARS);

    //Error Messages
    $error_messages = array('first-name', 'last-name', 'email', 'password', 'password-conf', 'country', 'birth');
    // Iterate through the inputs using the error message key to test if the input is empty output error message
    foreach ($error_messages as $key) {
        if (empty($_POST[$key])){
            header("Location: ../register.php?error=empty_field&empty=$key");
            exit();
        } 
    }
    // If password and Confimation password Don't match
    if ($password != $password_conf) {
        header("Location: ../register.php?error=passwords_not_matching");
        exit();
    }
    // If the Password doesn't meet minimum requirements
    else if ($_COOKIE['valid_password'] != 'true') {
        header("Location: ../register.php?error=min_reqs_unmet");
        exit();
    }
    else {
        $sql = "INSERT INTO `parent_users` (`parent_id`, `first_name`, `last_name`, `email`,
                                            `password`, `country`, `birth`, `activation_date`,
                                            `reset_token_hash`, `reset_token_expires_at`)
                        VALUES (NULL, ?, ?, ?, ?, ?, ?, current_timestamp(), NULL, NULL);";
        $hash = password_hash($password, PASSWORD_DEFAULT);
        $stmt = $mysqli->prepare($sql);
        $stmt->bind_param("ssssss",  $first_name, $last_name, $email, $hash, $country, $birth);
        $stmt->execute();
        header("Location: ../sign-in.php");
    }
}