<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password']) && isset($_FILES['file'])){

            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            $file_name = $_FILES['file']['name'];
            $file_size = $_FILES['file']['size'];
            $file_type = $_FILES['file']['type'];
            $file_tmp = $_FILES['file']['tmp_name'];
            $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

            $upload_path = 'uploads/' . $file_tmp;
            move_uploaded_file($file_tmp, $upload_path);

            if(file_exists($upload_path)){
                echo ("FileName: $file_name<br>FileSize: $file_size<br>FileType: $file_type<br>FileTemporaryName: $file_tmp<br>FileExtension: $file_ext<br>");
            }else {
                echo "<h1>Unable to upload the file</h1>";
            }

            // if(!(empty(trim($username)) && empty(trim($email)) && empty(trim($password)))){
            //     if(strlen($password) > 8){
            //         echo "Correct Password";
            //     }else {
            //         echo "Incorrect Password";
            //     }

            //     if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            //         echo "Correct Email";
            //     }else {
            //         echo "Incorrect Email";
            //     }
            //     echo "<h1>Success</h1>";
            // }

        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms</title>
</head>
<body>
    <h2>Sign Up</h2>
    <form action="" method="POST" enctype="multipart/form-data">
        <label for="username">Username: </label><br>
        <input type="text" name="username" id="username" placeholder="example.example"> <br>

        <label for="email">Email:</label> <br>
        <input type="email" name="email" id="email" placeholder="example@gmil.com"> <br>

        <label for="password">Password: </label> <br>
        <input type="password" name="password" id="password" placeholder="********"> <br>

        <label for="file">Upload a File: </label> <br>
        <input type="file" name="file" id="file"> <br>
        <!-- <input type="file" name="array_of_files[]" multiple id="file"> <br> -->

        <button type="submit">Submit</button>
    </form>
</body>
</html>