<?php

    $db_host = 'db';
    $db_user = 'MYSQL_USER';
    $db_pass = 'MYSQL_PASSWORD';
    $db_name = 'MYSQL_DATABASE';

    $conn = mysqli_connect($db_host ,$db_user ,$db_pass ,$db_name);

    if ($conn->connect_error) {  
        die("Connecten Error: " . $conn->connect_error);  
    }

?>