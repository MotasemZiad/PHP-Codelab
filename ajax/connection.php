<?php 
    $connection = mysqli_connect('localhost', 'root', '', 'university');

    if(!$connection){
        die("Error: ". mysqli_connect_error());
    }