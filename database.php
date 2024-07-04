<?php

    $db_server = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "Hurley-DB";
    $conn = "";

    try {
        $conn = mysqli_connect($db_server, 
        $db_user, 
        $db_pass, 
        $db_name);
    }
    catch (mysqli_sql_exception) {
        echo"Could not Connect!";
    }

    function add_user($conn, $first_name, $last_name, $email, $password, $country, $birth){
        $hash = password_hash($password, PASSWORD_DEFAULT);
        $sql_insert = "INSERT INTO `parent_users` (`parent_id`, `first_name`, `last_name`, `email`, `password`, `country`, `birth`, `activation_date`)
                       VALUES (NULL, '$first_name', '$last_name', '$email', '$hash', '$country', '$birth', current_timestamp());";
        try {
            mysqli_query($conn, $sql_insert);
            echo"User is now Registered";
        }
        catch(mysqli_sql_exception) {
            echo"Failed to create User!";
        }
    }

    // add_user($conn, 'April', 'Winkler', 'april2@gmail.com', 'Love2802!', 'United States', '2001-04-28');
?>