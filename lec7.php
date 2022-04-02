<?php 
    // Predefined CONSTANTS
    echo "PI = ". M_PI ." || E = ". M_E ."<BR>";
    ECHO "hELLO wORLD!<br>";

    $students = ['Ahmed', 'Ali', 'Sami'];

    array_push($students, 'Sameer', 'Fawzy');

    print_r($students);
    echo "<br>";
    
    # Scope 
    $a = 10;

    if($a > 5){
        $b = 20;
        $b = $a;
        // $a = $b;
    }

    echo "a: $a || b: $b<br>";

    $c;
    echo $c;
