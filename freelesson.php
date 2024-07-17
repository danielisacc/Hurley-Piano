<?php
require "email_script.php";
require "database.php";

// Retrieve POST data
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$phone = $_POST['phone'];

// Send email
$subject = "Book a First Free Piano Lesson!";
$message = " Customer Name: " .$first_name . $last_name";
sendMail($email, $subject, $message, 0);

// Prepare and execute the SQL statement
$mysqli = $conn;

$sql = "INSERT INTO contacts (first_name, last_name, email, phone) VALUES (?, ?, ?, ?)";
$stmt = $mysqli->prepare($sql);
$stmt->bind_param("ssss", $first_name, $last_name, $email, $phone);
$stmt->execute();

$stmt->close();
