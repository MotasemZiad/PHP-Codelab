<?php 
include_once('./operations.php');
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['save'])){
    $first_operand = $_GET['first_operand'];
    $second_operand = $_GET['second_operand'];
    $operation = $_GET['operation'];
    $result = 0;
    switch ($operation) {
        case '+':
            $result = sum($first_operand, $second_operand);
            break;
        case '-':
            $result = sub($first_operand, $second_operand);
            break;
        case '*':
            $result = mul($first_operand, $second_operand);
            break;
        case '/':
            $result = div($first_operand, $second_operand);
    }

    header('Location: ' . $_SERVER['HTTP_REFERER']."?result=".$result);
    die;
}