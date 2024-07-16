<?php
include "./scripts/config.php";
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
        <div class="icon_container">
            <a href="#"><img src="<?= $imgs?>icons/svg/settings.svg" alt="Settings" class="icon">Account Settings</a>
            <a href="#"><img src="<?= $imgs?>icons/svg/user.svg" alt="Student Info" class="icon">My Students</a>
            <a href="https://link.msaascrm.com/widget/bookings/hurley-piano-call-booking"><img src="<?= $imgs?>icons/svg/calendar.svg" alt="Book Appointment" class="icon">Book Consultation</a>
            <a href="#"><img src="<?= $imgs?>icons/svg/tool.svg" alt="Tools" class="icon">Resources</a>
            <a href="contact.php"><img src="<?= $imgs?>icons/svg/phone.svg" alt="Contact Us" class="icon">Contact Us</a>
            <a href="#"><img src="<?= $imgs?>icons/svg/file.svg" alt="Your Documents" class="icon">Your Files</a>
        </div>
        

    </main>

    <?php include "$html" . "footer.html" ?>
    
</body>
</html>