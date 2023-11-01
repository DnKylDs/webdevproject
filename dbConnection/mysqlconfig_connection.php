<?php
    define('DB_USER', 'root');
    define('DB_PASSWORD', 'root');
    define('DB_HOST', 'localhost');
    define('DB_NAME', 'db');

    $dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
    OR dies('Could not connect to MySQL: ' .mysql_connect_error());
    
    ?>
    
    
    
    