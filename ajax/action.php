<?php
    include_once('connection.php');
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone'])){
            $name = $_POST['name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];

            $query = "INSERT INTO students(name, email, phone) VALUES('$name', '$email', '$phone')";
            $result = mysqli_query($connection, $query);
        }
    }