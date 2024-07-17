<?php
require "email_script.php";
require "database.php";

$email = $_POST['email'];
$subject = "Hurley Piano: Free Ebook!";
$message = "Hello " . $_POST['first_name'] . ",<br>Here is your free <a href=''>Ebook</a>";
sendMail($email,$subject,$message,0);

$mysqli = $conn;

$sql = "INSERT INTO contacts VALUES(?,?,?,NULL)";
$stmt = $mysqli->prepare($sql);
$stmt->bind_param("sss", $first_name, $last_name, $email);
$stmt->execute();

$stmt->close();