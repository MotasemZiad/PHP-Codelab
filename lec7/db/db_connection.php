<?php

    $server_name = 'localhost';
    $username = 'root';
    $password = '';
    $university_database = 'university';
    $connection = mysqli_connect($server_name, $username, $password, $university_database);

    if(!$connection){
        die("Error: ". mysqli_connect_error());
    }