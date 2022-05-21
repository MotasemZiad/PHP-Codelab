<?php 
    $connection = mysqli_connect("localhost", "root", "", "project");
    
    $query = "SELECT * FROM users";
    $result = mysqli_query($connection, $query);
    $users = [];

    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            array_push($users, $row);
        }
    }

    /* 
        Encoding convert Array of Object into Json representation.
        Decoding convert Json representation into an Array of Object.
    */
    echo json_encode($users); 
    // echo json_decode($json_format); 