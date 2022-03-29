<?php
    $name = "Motasem Abu Nema";
    $age = 22;
    echo ("My name's $name. I'm $age years old.");

    $i = 0;
    while($i < 10){
        print("<br>While Loop ". ($i + 1));
        $i++;
    }

    $x = 0;
    while($x <= 100){
        print("<br>Your downloading progress: %" . $x);
        $x+= 10;
    }

    # Avoid infinite loops

    $j = 0;
    do {
        echo "<br>Do while Loop should run at lease once.". $j + 1;
        $j++;
    } while ($j < 10);

    echo "<br>";
    for ($x=0; $x < 5; $x++) { 
        echo $x + 1 . ' ';
    }
    echo "<br>";
    $arrayOfElements = ["element_1", "element_2", "element_3", "element_4", "element_5"];

    for($i = 0; $i < count($arrayOfElements); $i++){
        echo $arrayOfElements[$i] . "<br>";
    }

    for($i = 0; $i < 10; $i++){
        echo "<br>For Loop " . ($i + 1);
    }
    echo "<br>";

    for($i = 2, $j = 1; $i <= 10; $i+=2, $j++){
        echo "i = $i, j = $j <br>";
    }


    $students = ["Ahmed", "Sami", "Fawzy", "Khaled", "Soso", "Jana", "Ola", "Sameera"];

    foreach($students as $student){
        echo "<br> $student";
    }

    echo "<br>";

    $arr = ["E1", "E2", "E3", "E4", 'E5'];
    foreach($arr as $a){
        echo $a . " ";
    }

    $associativeArray = [
        'username' => "motasem_abunema",
        'first_name' => "Motasem",
        'last_name' => "Abu Nema",
        'age' => 22,
        'date_of_birth' => "05/11/2000",
        'password' => "12431234",
        'email' => 'moatasem.abunema@gmail.com',
        'second_email' => 'miziad2000@gmail.com',
        'phone_number' => '0599838964',
        'salary' => 1800.99,
        'is_verified' => TRUE,
    ];

    foreach($associativeArray as $key => $value){
        echo "$key: $value<br>";
    }
    echo "<br>";
    # Nested Loops -> Pyramid
    $n = 10;
    for ($i=0; $i <= $n ; $i++) { 
        for ($j=0; $j <= $i ; $j++) { 
            echo " * ";
        }
        echo "<br>";
    }

    for ($i=$n; $i > 0 ; $i--) { 
        for ($j=0; $j < $i ; $j++) { 
            echo " * ";
        }
        echo "<br>";
    }

    echo "<br>";
    # break & continue
    // break ends the loop, while continue stops for the current iteration and executes the rest of the loop.
    for ($i=0; $i <= 5; $i++) { 
       if($i == 3){
           break;
       }
       echo "Number of rows " . $i+1 . "<br>";
    }
    echo "<br>";
    for ($i=0; $i <= 5 ; $i++) { 
       if($i == 3){
           continue;
       }
       echo "Number of column " . $i+1 . "<br>";
    }
    echo "<br>";
    
    // Multidimensional associative array
    $superheroes = array(
        "spider-man" => array(
            "name" => "Peter Parker",
            "email" => "peterparker@gmail.com",
        ),
        "super-man" => array(
            "name" => "Clark Kent",
            "email" => "clarkkent@gmail.com",
        ),
        "iron-man" => array(
            "name" => "Harry Potter",
            "email" => "harrypotter@gmail.com",
        )
    );
    // Printing all the keys and values one by one
    $keys = array_keys($superheroes);
    for($i = 0; $i < count($superheroes); $i++) {
        echo $keys[$i] . "{<br>";
        foreach($superheroes[$keys[$i]] as $key => $value) {
            echo $key . " : " . $value . "<br>";
        }
        echo "}<br>";
    }



