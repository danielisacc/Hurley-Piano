<?php
include "./scripts/config.php";
include "./scripts/sessions.php";

if (isset($_SESSION["parent_id"])){
    require "./scripts/database.php";
    $mysqli = $conn;
    $sql = "SELECT * FROM parent_users WHERE parent_id = ?";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("s", $_SESSION['parent_id']);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();
}
else {
    echo"<script>window.location.replace('sign-in.php')</script>";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hurley Piano: Parent Portal</title>
    <link rel="stylesheet" href="<?= $styles ?>styles.css">
</head>
<body>
    <?php include "$html" . "header.html" ?>

    <main>
        <!-- Hero Image Section  -->
        <div class="hero-image" style="
            background-image: linear-gradient(to right, rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.0)), url('<?= $imgs ?>brown-piano-banner.jpg');
            height: 50vh;">
                <h1>Parent Portal</h1>
                <a href="" class="button book-consultation">Student Dashboard</a>
        </div>
        <h2 style="margin-top: 20px; margin-bottom: 0px; font-family: var(--header2_font)">
            Welcome Back <?= ucfirst($user["first_name"]) ?>
        </h2>
        <div class="icon_container">
            <a onclick="subpage_display('account-settings')"><img src="<?= $imgs?>icons/svg/settings.svg" alt="Settings" class="icon">Account Settings</a>
            <a onclick="subpage_display('my-students')"><img src="<?= $imgs?>icons/svg/user.svg" alt="Student Info" class="icon">My Students</a>
            <a href="https://link.msaascrm.com/widget/bookings/hurley-piano-call-booking"><img src="<?= $imgs?>icons/svg/calendar.svg" alt="Book Appointment" class="icon">Book Consultation</a>
            <a href="#"><img src="<?= $imgs?>icons/svg/tool.svg" alt="Tools" class="icon">Resources</a>
            <a href="contact.php"><img src="<?= $imgs?>icons/svg/phone.svg" alt="Contact Us" class="icon">Contact Us</a>
            <a href="#"><img src="<?= $imgs?>icons/svg/file.svg" alt="Your Documents" class="icon">Your Files</a>
        </div>
        <script>
            function subpage_display(page) {
                if (document.getElementById(page).style.display === "none"){
                    document.getElementById(page).style.display = "flex";
                }
                else {
                    document.getElementById(page).style.display = "none";
                }
            }
        </script>
        <?php 
            include "account-settings.php";
            include "my-students.php"
        ?>

    </main>

    <?php include "$html" . "footer.html" ?>
    
</body>
</html>