<?php 
    # Indexed Array
    // $arr = ["Motasem Abu Nema", 22, 2.6, true, ["Web Development", "Android Development", "Game Development", "Design Patterns", "Entrepreneurship", "Graduation Project"]];
    // for($i = 0; $i < count($arr); $i++){
    //     echo $arr[$i]."<br>";
    // }

    $cars = ['BMW', 'VOLVO', 'KIA', 'TOYOTA'];

    $arr2 = array('name' => "Motasem Abu Nema", 'age' => 22, 'gpa' => 2.6, 'is_graduated' => true, 'courses' => [
        "Web Development", "Android Development", "Game Development", "Design Patterns", "Entrepreneurship", "Graduation Project"
    ],);

    echo sort($cars)." Indexed Array (asc)<br>";
    print_r($cars);
    echo "<br>";
    echo rsort($cars)." Indexed Array (des)<br>";
    print_r($cars);
    echo "<br>";


    $arr2['id'] = 120181826;

    echo asort($arr2)." Associative Array (asc) VALUES<br>";
    print_r($arr2);
    echo "<br>";
    echo ksort($arr2)." Associative Array (asc) KEYS<br>";
    print_r($arr2);
    echo "<br>";
    echo arsort($arr2)." Associative Array (des) VALUES<br>";
    print_r($arr2);
    echo "<br>";
    echo krsort($arr2)." Associative Array (des) KEYS<br>";
    print_r($arr2);
    echo "<br>";

    echo "*************************<br>";
    $indexed_array = [234,2,63,23,61,92, 12, 32,73];
    sort($indexed_array);
    print_r($indexed_array);
    /* 
    1. sort => Indexed Array ascending
    2. rsort => Indexed Array descending
    
    3. asort => Associative Array ascending VALUES
    4. ksort => Associative Array ascending KEYS
    5. arsort => Associative Array descending VALUES
    6. krsort => Associative Array descending KEYS
    */


    # Associative Array: Key-Value Stored Array
    // echo "My name's " . $arr2['name']  . " I'm " . $arr2['age']  . " years old. <br>";
    // print(count($arr2));
    // print_r($arr2['courses'][2]);
    // echo count($arr2['courses']);

    // $colors = array("blue", "red", "green");
    // $result = array_push($colors, "black", "white");
    // echo "<br>$result <br>";
    // print_r($colors);

    # Duplication is allowed in values, but not allowed in keys (In this case it consider the last one as the key and removes the first one).
    echo "<br>";
    $some = [ 1,2]; // anything == null or an empty array
    $somethingElse = '';
    $num = -1; // num == 0 return false; anything else return true
    if($num){
        echo "True";
    }else{
        echo "False!";
    }

    echo "<br>";
    $mark = 0;
    if($mark >= 0 && $mark <=100){
        if($mark >= 90){
            echo "Excellent!";
        }elseif($mark >= 80){
            echo "Very Good";
        }elseif($mark >= 70){
            echo "Good";
        }elseif($mark >= 60){
            echo "Accepted";
        }else{
            echo "Failed";
        }
    }else {
        echo "Error! the mark is invalid.<br>";
    }

    switch($mark){
        case ($mark > 100 || $mark < 0):
            echo "Error! Invalid Input";
            break;
        case ($mark >= 90 && $mark <= 100):
            echo "Excellent!";
            break;
        case ($mark >= 80):
            echo "Very Good!";
            break;
        case ($mark >= 70):
            echo "Good!";
            break;
        case ($mark >= 60):
            echo "Accepted!";
            break;
        case ($mark >= 0):
            echo "Failed!";
            break;
    }
    echo "<br>";

    if(0 > 0){
        echo "0 > 0";
    }elseif(0 < 0){
        echo "0 < 0";
    }elseif(0 == 0) {
        echo "0 == 0";
    }
