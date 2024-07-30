<?php
require "email_script.php";
require "database.php";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])){

// Retrieve and sanitize POST data
$first_name = filter_input(INPUT_POST, 'first_name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$last_name = filter_input(INPUT_POST, 'last_name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$comment = filter_input(INPUT_POST, 'comment', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

// Validate input
$errors;
if (empty($first_name) || empty($last_name) || empty($phone) || empty($comment)) {
    $errors = "empty";
}
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors = "email";
}

if (empty($errors)) {
    // Send email
    $subject = "Contact Us Form Submission";
    $message = "Hello,<br> A contact us form submission was made by:<br>$first_name $last_name<br>$email<br>$phone<br>Comment: $comment";
    sendMail('thienkim.le@g.austincc.edu', $subject, $message, 0);

    // Prepare and execute the SQL statement
    try {
        $mysqli = $conn;

        $sql = "INSERT INTO contacts (first_name, last_name, email, phone, comment) VALUES (?, ?, ?, ?, ?)";
        $stmt = $mysqli->prepare($sql);
        if ($stmt === false) {
            throw new Exception('Prepare failed: ' . htmlspecialchars($mysqli->error));
        }

        $stmt->bind_param("sssss", $first_name, $last_name, $email, $phone, $comment);
        $stmt->execute();

        $stmt->close();

        // Redirect back to the form with a success flag
        header("Location: ../contact.php?output=success");
        exit;

    } catch (Exception $e) {
        header("Location: ../contact.php?output=database");
        exit;
    }
} else {
    header("Location: ../contact.php?output=" . $errors);
    exit;
}
}
?>