<?php 
    if($_SERVER['REQUEST-METHOD'] == "POST"){
        if(isset($_POST['course_name']) && $_POST['course_name'] > 11){
            $name = $_POST['course_name'];
            $created_at = new date.now();
            $connection = mysqli_connect('localhost', 'root', '', 'university');

            if(!$connection){
                echo mysqli_connect_error();
            }

            $query = 'INSERT INTO courses(name, created_at, created_by) VALUES('$')'
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form accept="http://example.com/search" method="GET">
        Article <input type="text" name="article"> <br>
        Word <input type="text" name="word"> <br>
        <button type="submit">Search</button>
        <!-- http://example.com/search?article=&word=sami --> 
    </form>
</body>
</html>

