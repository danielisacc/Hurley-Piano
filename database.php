<?php

    $db_server = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "hurley-rigler";
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

    // add_user($conn, 'April', 'Winkler', 'april2@gmail.com', 'Love2802!', 'United States', '2001-04-28');
?>