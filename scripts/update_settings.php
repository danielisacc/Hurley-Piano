<?php
    require "database.php";
    require "sessions.php";

    $mysqli = $conn;

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $sql = "SELECT * FROM parent_users WHERE parent_id = ?";
        $stmt = $mysqli->prepare($sql);
        $stmt->bind_param("s", $_SESSION["parent_id"]);
        $stmt->execute();
        $results = $stmt->get_result();
        $user = $results->fetch_assoc();

        $first_name = filter_input(INPUT_POST, "first-name", FILTER_SANITIZE_SPECIAL_CHARS);
        $last_name = filter_input(INPUT_POST, "last-name", FILTER_SANITIZE_SPECIAL_CHARS);
        $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
        $country = filter_input(INPUT_POST, "country", FILTER_SANITIZE_SPECIAL_CHARS);
        $birth = filter_input(INPUT_POST, "birth", FILTER_SANITIZE_SPECIAL_CHARS);

        $first_name = (empty($first_name)) ? $user["first_name"] : $first_name;
        $last_name = (empty($last_name)) ? $user["last_name"] : $last_name;
        $email = (empty($email)) ? $user["email"] : $email;
        $country = (empty($country)) ? $user["country"] : $country;
        $birth = (empty($birth)) ? $user["birth"] : $birth;

        $sql = "UPDATE parent_users
                SET first_name = ?,
                    last_name = ?,
                    email = ?,
                    country = ?,
                    birth = ?
                WHERE parent_id = ?";
        $stmt = $mysqli->prepare($sql);
        $stmt->bind_param("ssssss", $first_name,
                                    $last_name,
                                    $email,
                                    $country,
                                    $birth,
                                    $_SESSION["parent_id"]);
        $stmt->execute();
        header("Location: ../parent-portal.php");
    }
