<?php 
    $name = $_POST['username'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $connection = mysqli_connect("localhost", "root", "", "project");

    $query = "INSERT INTO users(username, email, password) VALUES('$name', '$email', '$password')";
    $result = mysqli_query($connection, $query);

    if($result){
        $status = true;
    }else{
        $status = false;
    }

    echo json_encode($status);
