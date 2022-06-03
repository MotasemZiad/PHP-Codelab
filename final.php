<?php 
    echo str_contains('somehitng#', 'u') . "<br>";

    function getFirstWord($text){
        return substr($text, 0, strpos($text, ' '));
    }

    echo getFirstWord("isvery pretty.") . "<br>";

    $arr1 = [1, 2, 3];
    $arr2 = [2, 1, 3];

    if($arr1 == $arr2){
        echo "First";
    }

    if($arr2 === $arr1){
        echo "Second";
    }

    $str = "3" . "5"; // String
    // $str .= " Characters";
    $str += 5; // converted to Integer and it become 40
    var_dump($str);
    echo "<br>";

    $a = 12;
    $output = $a == '12' ? 5 : 3;
    
    print($output) . "<br>";


    //! Q: 
    function myFun($input_array){
        $associative_array = array();
        foreach ($input_array as $key) {
            $value = $key * 2;
            $associative_array[$key] = $value;
        }
        return $associative_array;
    }

    $array = [5, 3, 4, 4, 2];
    print_r(myFun($array));
    echo "<br>";
    var_dump('A' > 'a');
    echo "<br>";

    $a = 0;

    if($a++){
        echo "Yes <br>";
    }else {
        echo "No <br>";
    }

    $arrEx = [[], []]; // Fill
    $arrEx2 = [null, null]; // Fill

    if($arrEx){
        echo "fill <br>";
    }else {
        echo "Empty <br>";
    }


    $email = "ahmed@iugaza.edu.ps";
    $last_part = strrev(substr(strrev($email), 0, strpos(strrev($email), '.')));

    echo $last_part . "<br>";

    $arr = ['Gaza' => 12321, 'Rafah' => 12753, 'Khanyonis' => 52395];

    arsort($arr);
    $city = array_keys($arr)[0];

    echo $city . "<br>";