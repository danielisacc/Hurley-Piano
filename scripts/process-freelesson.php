<?php
// Include external scripts for email handling and database connection
require "email_script.php";
require "database.php";

// Check if the form has been submitted via POST request
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])){
   $errors = [];

// Retrieve and sanitize POST data to prevent security issues
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

// If no validation errors, proceed with email sending and database insertion
if (empty($errors)) {
    // Prepare email details
    $subject = "A first free piano lesson appointment";
    $message = "Hello,<br> A first free piano lesson was made by:<br>$first_name $last_name<br>$email<br>$phone";
    // Send the email using the sendMail function
    sendMail('richardhurley@hurleypiano.com', $subject, $message, 0);

    // Try to prepare and execute the SQL statement to insert data into the database
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

        // Redirect to another page with a success flag
        header("Location: ../lessons.php?success=1");
        exit;

    } catch (Exception $e) {
        // Display any errors that occur during database operations
        echo "Error: " . $e->getMessage();
    }
} else {
    // Display validation errors if there are any
    foreach ($errors as $error) {
        echo $error . "<br>";
    }
    echo "Invalid form submission.";
}
}
?>
