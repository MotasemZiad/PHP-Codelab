<?php 
    include_once('operations.php');
?>
<?php include_once('operations.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
    
    <form action="./operations.php" method="GET">
        <label for="first_operand">First Operand</label>
        <input type="number" name="first_operand" id="first_operand" >
        <br>
        <label for="second_operand">Second Operand</label>
        <input type="number" name="second_operand" id="second_operand" >
        <br>
        <label for="operation">Operation</label>
        <select name="operation" id="operation" >
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <br>
        <br>
        <button type="submit" name="save">Calculate</button>
    </form>

    <h2>Result: <?php $result ?></h2>
</body>
</html>

<!-- 107.0.0.1 == localhost -->