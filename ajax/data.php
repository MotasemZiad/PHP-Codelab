<?php 
    include_once('connection.php');
    include_once('student.php');

    $students = array();

    if($_SERVER['REQUEST_METHOD'] == "GET"){
        $query = "SELECT * FROM students";
        $result = mysqli_query($connection, $query);
        
        if($result){
            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                    $student = new Student();
                    $student->name = $row['name'];
                    $student->email = $row['email'];
                    $student->phone = $row['phone'];

                    array_push($students, $student);
                }
            }
        }
    }

    echo json_encode($students);