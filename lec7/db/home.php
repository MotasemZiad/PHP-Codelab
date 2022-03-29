<?php 
    include_once 'db_connection.php';
    $students_table_name = 'students';
    $first_name_column_name = 'first_name';
    $last_name_column_name = 'last_name';
    $email_column_name = 'email';

    /*
    $query = "INSERT INTO $students_table_name($first_name_column_name, $last_name_column_name, $email_column_name) VALUES('Saleem', 'Fawzy', 'saleem@gmail.com')";

    $result = mysqli_query($connection, $query);
    if($result){
        echo "Success";
    }else {
        echo "Error". mysqli_error($connection);
    }

    */

    echo "
        <table>
            <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
            </tr>
            </thead>
            <tbody>
    ";
    $query = "SELECT * FROM $students_table_name";
    $result = mysqli_query($connection, $query);
    
    if(mysqli_num_rows($result) > 0){
        while ($row = mysqli_fetch_assoc($result)){
            echo "<tr>
            <td>. $row[$first_name_column_name]. </td>
            <td>. $row[$last_name_column_name]. </td>
            <td>. $row[$email_column_name]. </td>
            </tr>
            ";
        }
        echo "</tbody>
            </table>
        ";
    } 




