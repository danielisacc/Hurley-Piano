<?php
// Variables
$header = "header.html";
$footer = "footer.html";
$styles = "./styles/styles.css";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hurley Piano: Parent Portal</title>
    <link rel="stylesheet" href="<?= $styles ?>">
</head>
<body>
    <?php include "$header" ?>


    <?php include "$footer" ?>
    
</body>
</html>