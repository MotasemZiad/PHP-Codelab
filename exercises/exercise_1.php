<?php

    function get_round($num){
        if(is_float($num)){
            return $num % 10;
        }else {
            return $num;
        }
    }

    // $v1 = 2;
    // $v2 = 3;

    // $r = ($v1 + $v2) * $v1 * $v2 / $v1 % $v2 + 1;
    // $r2 = ($v1 + ($v2 * ($v2 -$v1))) / 2 * $v2 * ($v1  + ($v2 - 1 / ($v1 / 2)));
    // echo $r;
    // echo $r2;

    // echo 2 % 3;
    // echo get_round(5.7);

    function detect_multiply_of_100($num){
        if(is_numeric($num)){
            if($num % 100 == 100 % 10){
                echo "$num is multiply of 100";
            }else {
                echo "$num is not multiply of 100";
            }
        }else {
            echo "Please give a number";
        }
    }

    // detect_multiply_of_100(200);


    function reverse_str($str){
        if(is_string($str)){
            $arrayOfCharacters = str_split('', $str);
            $reversedArray = array_reverse($arrayOfCharacters);
            return implode('', $reversedArray);

        }
    }

    


