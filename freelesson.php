<?php
require "email_script.php";
require "database.php";

// Retrieve POST data
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
 
// Send email
$subject = "A first freee piano lesson apointment";
$message = "Hello,<br> A first free piano lesson was made by:<br>$first_name $last_name<br>$email<br>$phone";
sendMail('thienkim.le@g.austincc.edu', $subject, $message, 0);

// Prepare and execute the SQL statement
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

    // Redirect back to the form with a success flag
    header("Location: lessons.php?success=1");
    exit;

} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}

// Assuming you have some validation errors or other checks that would set $errors
$errors = [];
if (!empty($errors)) {
    foreach ($errors as $error) {
        echo $error . "<br>";
    }
} else {
    echo "Invalid form submission.";
}
?>
