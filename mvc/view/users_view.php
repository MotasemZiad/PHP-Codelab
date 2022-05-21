<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Demo Project</title>
</head>
<body>
    <div class="col-12">
        <table class="table table-bordered">
            <thead>
                <th>#</th>
                <th>Username</th>
                <th>Email</th>
                <th>Hashed Password</th>
            </thead>
            <tbody>
                <?php
                    include_once('../controller/user_controller.php');
                    $user_controller = new UserController();
                    $users = $user_controller->getUsers();
                    foreach ($users as $user) {
                        echo '<tr>
                        <td>'. $user->getId() . '</td>
                        <td>'. $user->getUsername() . '</td>
                        <td>'. $user->getEmail() . '</td>
                        <td>'. $user->getPassword() . '</td>
                    </tr>';
                    }
                ?>
                <tr>
                    <td></td>
                </tr>
            </tbody>

        </table>
    </div>
</body>
</html>