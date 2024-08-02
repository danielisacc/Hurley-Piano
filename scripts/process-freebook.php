<?php
// Include external scripts for email handling and database connection
require "email_script.php";
require "database.php";

// Initialize an array to hold validation errors
$errors = [];

// Retrieve and sanitize POST data from the form submission
$first_name = filter_input(INPUT_POST, 'first_name', FILTER_SANITIZE_SPECIAL_CHARS);
$last_name = filter_input(INPUT_POST, 'last_name', FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_SPECIAL_CHARS);

// Validate the sanitized input
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

// If there are no validation errors, proceed with email sending and database insertion
if (empty($errors)) {
    // Prepare email details
    $subject = "Hurley Piano: Free Ebook!";
    $message = "Hello " . $first_name . ",<br>Here is your free <a href=''>Ebook</a>";
    // Send the email to the provided address
    sendMail('richardhurley@hurleypiano.com', $subject, $message, 0);

    // Try to prepare and execute the SQL statement to insert the data into the database
    try {
        $mysqli = $conn;

        $sql = "INSERT INTO contacts (first_name, last_name, email, phone) VALUES (?, ?, ?, ?)";
        $stmt = $mysqli->prepare($sql);
        if ($stmt === false) {
            throw new Exception('Prepare failed: ' . htmlspecialchars($mysqli->error));
        }

        $stmt->bind_param("ssss", $first_name, $last_name, $email, $phone);
        $stmt->execute();

        $stmt->close();

        // Redirect to another page with a success flag to indicate successful form submission
        header("Location: ../lessons.php?success=1");
        exit;

    } catch (Exception $e) {
        // Display any errors that occur during database operations
        echo "Error: " . $e->getMessage();
    }
} else {
    // Display validation errors if any are found
    foreach ($errors as $error) {
        echo $error . "<br>";
    }
    echo "Invalid form submission.";
}
?>
