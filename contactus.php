<?php
require "email_script.php";
require "database.php";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {
    $errors = [];

    // Retrieve and sanitize POST data
    $first_name = filter_input(INPUT_POST, 'first_name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $last_name = filter_input(INPUT_POST, 'last_name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $comment = filter_input(INPUT_POST, 'comment', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    // Validate input
    if (empty($first_name)) {
        $errors[] = "First name is required.";
    }
    if (empty($last_name)) {
        $errors[] = "Last name is required.";
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format.";
    }
    if (empty($phone)) {
        $errors[] = "Phone number is required.";
    }
    if (empty($comment)) {
        $errors[] = "Comment is required.";
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
            header("Location: contactus.php?success=1");
            exit;

        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
        }
    } else {
        foreach ($errors as $error) {
            echo $error . "<br>";
        }
        echo "Invalid form submission.";
    }
}
?>
