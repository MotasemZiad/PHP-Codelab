<?php 
    $name = "Motasem Abu Nema";
    $age = 19;
    $commission = 0.1;
    $is_student = false;
    $courses = ["Web Development using PHP", "Android Development using Kotlin", "Game Development using Unity(C#)", "Entrepreneurship", "Design Patterns", "Graduation Project",];

    $add = 9 + 2;
    $sub = 9 - 2;
    $mul = 9 * 2;
    $div = 9 / 2;
    $mod = 9 % 2;
    $power = 9 ** 2;
    /* Power of the operators
    0. ()
    1. **
    2. *
    3. /
    4. +
    5. -
    6. %
    */
    $arr = [5, 6, 12, 93, 23, 53, 26, 72,];
    $n = 12.6;
    echo sin($n)."<br>";
    echo cos($n)."<br>";
    echo abs($n)."<br>";
    echo log($n)."<br>";
    echo ceil($n)."<br>";
    echo floor($n)."<br>";
    echo max($arr)."<br>";
    echo sqrt(81)."<br>";
    echo M_PI."<br>";
    echo M_E."<br>";
    $num = 4;
    $total = $num * 14 - 1 + 72 /M_E * 5 + sqrt(14.5) - 1.1; 
    echo "Total is => $total<br>";

    echo "9 & 2=> $add, $sub, $mul, $div, $mod, $power<br>";
    echo "Name: $name<br>Age: $age<br>Commission: $commission<br>Is Student: $is_student<br>Courses:<br>";
    for ($i=0; $i < count($courses); $i++) { 
        echo "$courses[$i]<br>";
    }
