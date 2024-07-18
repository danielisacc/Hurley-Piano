<?php
// require "email_script.php";
require "database.php";

// Retrieve POST data
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$comment = $_POST['comment'];

//  Send email
// $subject = "Hurley Piano: Free Ebook!";
// $message = "Hello " . $first_name . ",<br>Here is your free <a href=''>Ebook</a>";
// sendMail($email, $subject, $message, 0);

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
    header("Location: contact.php?success=1");
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
