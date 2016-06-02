<?php
    //Create a database connection
    define("DB_SERVER","localhost");
    define("DB_USER","root");
    define("DB_PASS","saurabh1330");
    define("DB_NAME","saurabh");
    $connection = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
    // test if connection succeeded
    if (mysqli_connect_errno()){
        die("Database connection failed: ".mysqli_connect_error().
            "(".mysqli_connect_errno().")"
        );
    }
?>