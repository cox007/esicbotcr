<?php
    $host = "sql12.freemysqlhosting.net";
    $user = "sql12342728";
    $password = "h4TVbUtWpP";
    $db_name = "sql12342728";

    $con = mysqli_connect($host, $user, $password, $db_name);
    if(mysqli_connect_errno()) {
        die("Failed to connect with MySQL: ". mysqli_connect_error());
    }
?>
