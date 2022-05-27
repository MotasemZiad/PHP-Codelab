<?php
    include_once('connection.php');

    $response = array('status' => false , 'message' => "");
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone'])){
            $name = $_POST['name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];

            $query = "INSERT INTO students(name, email, phone) VALUES('$name', '$email', '$phone')";
            $result = mysqli_query($connection, $query);

            if($result != false){
                $response['status'] = true;
                $response['message'] = 'Added successfully';
            }else{
                $response['message'] = 'Internal Server Error';
            }
        }else {
            $response['message'] = 'Bad Request';
        }
    }else {
        $response['message'] = 'Method has not allowed';
    }

    echo json_encode($response); 