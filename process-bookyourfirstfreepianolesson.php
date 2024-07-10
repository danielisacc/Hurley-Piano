<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {
    // Collect POST data and sanitize
    $firstname = filter_input(INPUT_POST, "first-name", FILTER_SANITIZE_SPECIAL_CHARS);
    $lastname = filter_input(INPUT_POST, "last-name", FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
    $phone = filter_input(INPUT_POST, "phone", FILTER_SANITIZE_SPECIAL_CHARS);

    // Validate input
    $errors = [];

    if (empty($firstname)) {
        $errors[] = "First Name is required";
    }

    if (empty($lastname)) {
        $errors[] = "Last Name is required";
    }

    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Valid email is required";
    }

    if (empty($phone)) {
        $errors[] = "Phone number is required";
    }

    // If there are no errors, proceed with database operation
    if (empty($errors)) {
        $host = "localhost";
        $dbname = "bookyourfirstlessondb";
        $username = "root";
        $password = "";

        try {
            $conn = mysqli_connect($host, $username, $password, $dbname);

            if (mysqli_connect_errno()) {
                throw new Exception("Connection error: " . mysqli_connect_error());
            }

            $sql = "INSERT INTO bookyourfirstlesson (firstname, lastname, email, phone) VALUES (?, ?, ?, ?)";
            $stmt = mysqli_stmt_init($conn);

            if (!mysqli_stmt_prepare($stmt, $sql)) {
                throw new Exception("Statement preparation error: " . mysqli_error($conn));
            }

            mysqli_stmt_bind_param($stmt, "ssss", $firstname, $lastname, $email, $phone);

            if (!mysqli_stmt_execute($stmt)) {
                throw new Exception("Execution error: " . mysqli_stmt_error($stmt));
            }

            mysqli_stmt_close($stmt);
            mysqli_close($conn);

            // Redirect back to the form with a success flag
            header("Location: contact.php?success=1");
            exit;

        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
        }
    } else {
        foreach ($errors as $error) {
            echo $error . "<br>";
        }
    }
} else {
    echo "Invalid form submission.";
}
?>
