<?php

    define('DB_SERVER', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', 'root');
    define('DB_NAME', 'mydb');


     $connection = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
     if($connection === false){
        die("ERROR: Não foi possível se conectar ao banco de dados MySQL. " . mysqli_connect_error());
    } 
     else {
        mysqli_autocommit($connection, FALSE);

     }

?>